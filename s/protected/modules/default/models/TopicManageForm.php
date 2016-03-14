<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TopicManageForm
 *
 * @author whp
 */
class TopicManageForm extends CFormModel {

    public $id;
    public $mid;

    public function rules() {
        return array(
            array('id', 'default',
               'value' => ""),
            array('mid', 'default',
               'value' => ""),
            array('id,mid', 'idRequire',
                'message' =>
                SnsException::MISSING_PARAMETER('id,mid')),
        );
    }
    
    public function idRequire($attribute, $params) {
        if(empty ($this->id)&& empty ($this->mid)){
            SnsException::MISSING_PARAMETER('id,mid');
        }
    }
    
    public static function transToDapengPlatform($platformId){
        switch ($platformId){
            case SnsConstants::PLATFORM_SINA: return weibo_analysis_PlatForm::SINA;break;
            case SnsConstants::PLATFORM_TENCENT: return weibo_analysis_PlatForm::QQ;break;
//            case SnsConstants::PLATFORM_SINA: return weibo_analysis_PlatForm::SINA;break;
//            case SnsConstants::PLATFORM_SINA: return weibo_analysis_PlatForm::SINA;break;
        }
    }
}

?>
