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
class FrequentWordForm extends CFormModel {

    public $keyword;
    public $platform_id;
    public $position;
    public $count;

    public function rules() {
        return array(
             array('keyword', 'default',
                'value' =>"国家"),
             array('platform_id', 'default',
                'value' => 0),
            array('position', 'default',
                'value' =>  SnsConstants::DEFAULT_POSITION),
            array('count', 'default',
                'value' =>  SnsConstants::DEFAULT_COUNT),
        );
    }
}


?>
