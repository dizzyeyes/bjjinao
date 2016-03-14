<?php

/**
 * SnsController is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 * 
 * @author kfirst
 */
abstract class SnsController extends CController {

    private $currentUser = null;
    private $ipLocation = null;

    /**
     * 从$_REQUEST中获取指定变量的值
     * @param string $name 变量名
     * @param mixed $default 默认值
     * @return string 返回$_REQUEST中指定变量的值，若为null则返回default值
     */
    public function getRequestVar($name, $default = NULL) {
        return Yii::app()->getRequest()->getParam($name, $default);
    }

    /**
     * 向客户端返回数据，可以选择不同的格式。注意：该方法中调用了exit，将终止php程序的执行
     * @param mixed $data 数据
     * @param string $type 格式，可以为jsonp,json、xml和php
     */
    public function response($data, $type = 'jsonp') {
        SnsIO::response($data, $type);
    }

    /**
     * 从指定位置获取输入，并填充到给定的form中
     * @param CFormModel $form 需要填充的form
     * @param $with 获取输入的指定的位置。为空时将默认为$_REQUEST
     * @return CFormModel 填充完毕的form
     */
    public function fillForm(&$form, $with = null) {
        return SnsIO::fillForm($form, $with);
    }

    /**
     * 已登录的用户可以使用该方法获取user_id
     * @return int
     */
    public function getUserId() {
        return Yii::app()->user->user_id;
    }

    /**
     * 已登录的用户可以使用该方法获取User实例
     * @param boolean $withAccount 是否同时查询Account
     * @return User
     */
    public function getUser($withAccount = false) {
        if (!($this->currentUser instanceof User)) {
            $this->currentUser = User::get($this->getUserId(), $withAccount);
        }
        return $this->currentUser;
    }

    /**
     * 获得用户的IP地址
     * @return string
     */
    public function getIp() {
        return GuestInfo::getClientIp();
    }

    /**
     * 获取ip位置信息
     * @return string
     */
    public function getIpLocation($ip = '') {
        if (empty($this->ipLocation)) {
            $this->ipLocation = new IpLocation();
        }
        if (empty($ip)) {
            $ip = $this->getIp();
        }
        return $this->ipLocation->getlocation($ip);
    }

    /**
     * 使用用户名和密码登录
     * @param string $userName
     * @param string $password
     */
    public function loginCommon($userName, $password, $timeout = 0) {
        $this->login(new CommonIdentity($userName, $password), $timeout);
    }

    /**
     * 使用User实例登录
     * @param User $user
     */
    public function loginUser($user, $timeout = 0) {
        $this->login(new UserIdentity($user), $timeout);
    }

    /**
     * 登出
     */
    public function logout() {
        Yii::app()->user->logout();
    }

    private function login($identity, $timeout) {
        $this->currentUser = $identity->authenticate();
        Yii::app()->user->login($identity, $timeout);
    }

    public function render($view, $data = null, $return = false) {
        //$data["baseUrl"] = "http://58.68.249.7/static/public";
        //$data["baseUrl"] = "http://www.jkcdn.com";
        //用于ajax请求服务地址，部署的根目录 会在全局生产一个serverRoot变量 供js调用 
        //默认为测试地址 上线时请改为线上地址
//        $data["serverRoot"] = "http://mobile.jike.com/wtx";
        $data["serverRoot"] = Yii::app()->params['serverRoot'];
        $data["baseUrl"] = Yii::app()->params['baseUrl'];  //本地（或测试服务器相对地址）
        $data["pageTitle"] = Yii::app()->params['pageTitle'];
		$data["company"] = Yii::app()->params['company'];
//        $data["baseUrl"] = "http://58.68.249.7/sns";  //测试服务器地址
//         $data["baseUrl"] = "..";  //线上服务器相对地址
        $data['blogUrl'] = Yii::app()->params['blogUrl'];
        $data['blogParams'] = Yii::app()->params['blogParams'];
        $data['version'] = Yii::app()->params['version'];
		$data['longweibo_background'] = Yii::app()->params['longweibo_background'];
		$data['comment_default_user_id'] = Yii::app()->params['comment_default_user_id'];
        $data = $this->getWidgets($data);
        return parent::render($view, $data, $return);
    }

    public function getWidgets($data) {
        $widgets = array();
        foreach (Yii::app()->params as $key=>$value) {
            if (strpos($key, 'widgets') === 0) {
                $widget = strtolower(substr($key, 7));
                $widgets[$widget] = $value;
            }
        }
        $data['widgets_arr'] = $widgets;
        $data['widgets_json'] = json_encode($widgets);
        return $data;
    }

    public function getFullAccountInfo(AccountInfo $account, $alarmTime = 172800) {
        $accountVars = $account->attributes;
        $accountVars[SnsConstants::ALARM] = ($account->deadline + $alarmTime < time());
        $owners = $account->users;
        foreach ($owners as $owner) {
            $info[SnsConstants::USER_ID] = $owner->user_id;
            $info[SnsConstants::NICK_NAME] = $owner->nick_name;
            $accountVars[SnsConstants::OWNERS][] = $info;
        }
        return $accountVars;
    }

}
