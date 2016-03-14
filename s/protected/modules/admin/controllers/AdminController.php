<?php

require_once 'actions/AdminAction.php';
Yii::import('application.modules.admin.*');
Yii::import('application.modules.admin.models.*');
Yii::import('application.modules.admin.writefiles.*');
/**
 * CMS的后台控制。
 * 
 * @author whp
 */
class AdminController extends SnsController {

    const ACTIONS = 'application.modules.admin.controllers.actions.';
    const API_ACTIONS = 'application.modules.admin.controllers.apiActions.';
    const FILTERS = 'application.modules.admin.controllers.filters.';

    public function filters() {
        return array(
            // 检查API的调用是否通过了授权
            array(
                self::FILTERS . 'AuthenticateFilter
                    - ',
            ),
//            // 检查用户的权限
//            array(
//                self::FILTERS . 'AuthorityFilter
//				+ authority	',
//                'mapping' => $this->authorityMapping(),
//            ),
        );
    }

    public function actions() {
        return array(
            // common actions
            'install' => self::ACTIONS . 'InstallAction',
            'index' => self::ACTIONS . 'IndexAction',
            'menu' => self::ACTIONS . 'MenuAction',
            'siteInfoSave' => self::ACTIONS . 'SiteInfoSaveAction',
            
            //api actions
            'updateIsshow' => self::API_ACTIONS . 'UpdateIsshowAction',
        );
    }
    
}

?>
