<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UpdateMailForm
 *
 * @author whp
 */
class UpdateMailForm extends CFormModel {

    public $id;
    public $text;

    public function rules() {
        return array(
            array('id', 'default',
               'value' => 0),
            array('text', 'default',
               'value' => ""),
        );
    }
}

?>
