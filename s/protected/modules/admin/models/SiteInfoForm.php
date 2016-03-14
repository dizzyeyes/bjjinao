<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FrequentWordForm
 * 关键词搜索
 * @author whp
 */
class SiteInfoForm extends CFormModel {

    public $pageTitle;
    public $version;
    public $platformCallback;
	public $baseUrl;
	public $serverRoot;
	public $widgetsAuthor;
	public $widgetsEditor;
	public $longweibo_background;
	public $comment_default_user_id;
	public $comment_default_platform;
	public $statisticDay;

    public function rules() {
        return array(
            array('pageTitle', 'default',
                'value' =>""),
            array('version', 'default',
                'value' =>  ""),
            array('platformCallback', 'default',
                'value' =>  ""),
            array('baseUrl', 'default',
                'value' =>  ""),
            array('serverRoot', 'default',
                'value' =>  ""),
            array('widgetsAuthor', 'default',
                'value' =>  ""),
            array('widgetsEditor', 'default',
                'value' =>  ""),
            array('longweibo_background', 'default',
                'value' =>  ""),
            array('comment_default_user_id', 'default',
                'value' =>  ""),
            array('comment_default_platform', 'default',
                'value' =>  ""),
            array('statisticDay', 'default',
                'value' =>  ""),
            
        );
    }
}


?>
