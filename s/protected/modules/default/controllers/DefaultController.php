<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeiboAnalyze
 *
 * @author mac
 */
Yii::import('application.modules.api.*');
Yii::import('application.modules.api.models.*');
Yii::import('application.modules.api.parameters.*');
require_once 'actions/JinaoAction.php';

class DefaultController extends SnsController {

    const FILTERS = 'application.modules.default.controllers.filters.';
    const ACTIONS = 'application.modules.default.controllers.actions.';
    const NO_TPL_ACTIONS = 'application.modules.default.controllers.noTplActions.';

    public function filters() {
    }


    public function actions() {
        return array(
            // common actions
            'index' => self::ACTIONS . 'IndexAction',
            'home' => self::ACTIONS . 'HomeAction',
            'products' => self::ACTIONS . 'ProductsAction',
            'products-1' => self::ACTIONS . 'Products-1Action',

            //没有输出模版
            'getToken' => self::NO_TPL_ACTIONS . 'GetTokenAction',
        );
    }

    public function actionRedirect($errorMsg = ""){
        $message = array();
        if(!$errorMsg){
            $errorMsg = "您的授权已过期，请重新登录";
        }
        $message['errorMsg'] = $errorMsg;
    	$this->render("../layout/error", $message);
    }

}

