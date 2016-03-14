<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeiboRelationForm
 *
 * @author whp
 */
class WeiboRelationForm extends CFormModel {

    public $key;

    public function rules() {
        return array(
            array('key', 'default',
               'value' => ""),
        );
    }
}

?>
