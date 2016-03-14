<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BetweenForm
 *
 * @author kfirst
 */
class TimeBetweenForm extends CFormModel {

    public $start_time;
    public $end_time;

    public function rules() {
        return array(
            array('start_time, end_time', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('start_time, end_time')),
            array('start_time, end_time', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('start_time', 'end_time')),
        );
    }

}

?>
