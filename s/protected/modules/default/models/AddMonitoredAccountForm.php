<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddMonitoredAccounts
 *
 * @author whp
 */
class AddMonitoredAccountForm extends CFormModel {

    public $name;
    public $platform_id;
    public $iswarn;

    public function rules() {
        return array(
             array('name', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('name')),
            array('platform_id' ,'required',
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('platform_id')),
            array('iswarn' ,'default',
                'value' =>0),
        );
    }
}

?>
