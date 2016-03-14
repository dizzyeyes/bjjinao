<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeiboAnalyzeForm
 *
 * @author whp
 */
class WeiboAnalyzeForm extends CFormModel {

    public $id;
    public $mid;
    public $platform_id;
    public $token_only;
    public $key;

    public function rules() {
        return array(
            array('id', 'default',
               'value' => ""),
            array('mid', 'default',
               'value' => ""),
            array('key', 'default',
               'value' => ""),
             array('token_only', 'default',
               'value' => true),
              array('platform_id', 'default',
                'value' => ""),
            array('platform_id', 'idRequire',
                'message' =>
                SnsException::MISSING_PARAMETER('id,mid')),
//             array('platform_id', 'required',
//                'message' =>
//                SnsException::MISSING_PARAMETER('platform_id')),
        );
    }
    
    public function idRequire($attribute, $params) {
        if(empty ($this->id)&& empty ($this->mid)){
            $this->addError($attribute, $params['message']);
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
