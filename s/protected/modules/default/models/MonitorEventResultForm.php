<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MonitorEventForm
 *
 * @author whp
 */
class MonitorEventResultForm extends CFormModel {

    public $position;
    public $count;
    public $event_id;
    public $time;

    public function rules() {
        return array(
             array('event_id', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('event_id')),
             array('time', 'default',
                'value' =>time()),
             array('position', 'default',
                'value' =>  SnsConstants::DEFAULT_POSITION),
            array('count', 'default',
                'value' =>  SnsConstants::DEFAULT_COUNT),
        );
    }
}

?>
