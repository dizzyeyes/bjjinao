<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UpdateIsshowForm
 *
 * @author whp
 */
class UpdateIsshowForm extends CFormModel {

    public $id;
    public $isshow;

    public function rules() {
        return array(
             array('id', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('id')),
            array('isshow', 'default',
                'message' =>
                SnsException::MISSING_PARAMETER('isshow')),
        );
    }
}

?>
