<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OptimizeImageForm
 *
 * @author whp
 */
class OptimizeImageForm extends CFormModel {

    public $result_id;

    public function rules() {
        return array(
            array('result_id', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('result_id')),
        );
    }
}

?>
