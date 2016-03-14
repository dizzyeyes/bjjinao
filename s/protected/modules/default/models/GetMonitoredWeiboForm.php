<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetMonitoredWeiboForm
 *
 * @author whp
 */
class GetMonitoredWeiboForm extends CFormModel {

    public $position;
    public $count;
    public $platform_id;
    public $account_id;

    public function rules() {
        return array(
            array('position', 'default',
                'value' =>  SnsConstants::DEFAULT_POSITION),
            array('count', 'default',
                'value' =>  SnsConstants::DEFAULT_COUNT),
            array('platform_id', 'default',
                'value' =>  0),
            array('account_id', 'default',
                'value' =>  0),
        );
    }
}

?>
