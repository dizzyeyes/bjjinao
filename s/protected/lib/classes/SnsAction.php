<?php

/**
 * 
 * SnsAction is the customized base action class.
 * All action classes for this application should extend from this base class.
 *
 * @author kfirst
 */
abstract class SnsAction extends CAction {

    /**
     * 从$_REQUEST中获取指定变量的值
     * @param string $name 变量名
     * @param mixed $default 默认值
     * @return string 返回$_REQUEST中指定变量的值，若为null则返回default值
     */
    protected function getRequestVar($name, $default = NULL) {
        return $this->controller->getRequestVar($name, $default);
    }

    /**
     * 向客户端返回数据，可以选择不同的格式。注意：该方法中调用了exit，将终止php程序的执行
     * @param mixed $data 数据
     * @param string $type 格式，可以为json、xml和php
     */
    protected function response($data, $type = 'jsonp') {
        return $this->controller->response($data, $type);
    }

    /**
     * 从指定位置获取输入，并填充到给定的form中
     * @param CFormModel $form 需要填充的form
     * @param $with 获取输入的指定的位置。为空时将默认为$_REQUEST
     * @return CFormModel 填充完毕的form
     */
    protected function fillForm(&$form, $with = null) {
        return $this->controller->fillForm($form, $with);
    }

    /**
     * 已登录的用户可以使用该方法获取user_id
     * @return int
     */
    protected function getUserId() {
        return $this->controller->getUserId();
    }

    /**
     * 已登录的用户可以使用该方法获取User实例
     * @param boolean $withAccount 是否同时查询Account
     * @return User
     */
    protected function getUser($withAccount = false) {
        return $this->controller->getUser($withAccount);
    }

    /**
     * 获得用户的IP地址
     * @return string
     */
    protected function getIp() {
        return $this->controller->getIp();
    }

    /**
     * 获取ip位置信息
     * @return string
     */
    protected function getIpLocation($ip = '') {
        return $this->controller->getIpLocation($ip);
    }

    /**
     * 重定向
     * @param string $url
     */
    protected function redirect($url) {
        $this->controller->redirect($url);
    }

    /**
     * 使用用户名和密码登录
     * @param string $userName
     * @param string $password
     * @param integer $timeout
     */
    protected function loginCommon($userName, $password, $timeout = 0) {
        $this->controller->loginCommon($userName, $password, $timeout);
    }

    /**
     * 使用User实例登录
     * @param User $user
     * @param integer $timeout
     */
    protected function loginUser($user, $timeout = 0) {
        $this->controller->loginUser($user, $timeout);
    }

    /**
     * 登出
     */
    protected function logout() {
        $this->controller->logout();
    }

    protected function render($view, $data = null, $return = false) {
        $this->controller->render($view, $data, $return);
    }

}

?>
