<?php

/**
 * 过滤器类<br />
 * 认证过滤器，判断action的调用是否需要认证。
 * 通过检查token和tokenSecret判断API调用是有合法
 *
 * @author kfirst
 */
class AuthenticateFilter extends SnsFilter {

    protected function preFilter($filterChain) {
        if (Yii::app()->user->isGuest) {
            Yii::app()->request->redirect(Yii::app()->params['loginUrl'] );
        } else if ($this->getUser()->authority != -1) {
            $errorMsg ="登录账户不是管理员";  //调转的提示词携带
            Yii::app()->request->redirect(Yii::app()->params['errorUrl']."?errorMsg=".$errorMsg,false );
        } else if ($this->getUser()->type < 0) {
            $this->logout();
            exit(SnsException::USER_DISABLED()->message);
        }
        return true;
    }

}

?>
