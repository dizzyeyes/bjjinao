<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SaveResultForm
 * 
 * @author whp
 */
class SaveResultForm extends CFormModel {

    public $key;
    public $value;
    public $cache;
    public $expire;

    public function rules() {
        return array(
            array('value', 'default', 'value' => ''),
            array('key', 'default', 'value' => 0),
            array('cache', 'default', 'value' => 0),
            array('expire', 'default', 'value' => 3600*10),
            array('cache', 'transToCacheName'),
        );
    }

    public function transToCacheName($attribute, $params) {
        switch ($this->cache) {
            case 0:$this->cache = yii::app()->params["kvCahceName"];
                break;
            default :$this->cache = yii::app()->params["kvCahceName"];
                break;
        }
    }

}

?>
