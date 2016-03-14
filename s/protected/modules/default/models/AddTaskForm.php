<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendTaskForm
 *
 * @author whp
 */
class AddTaskForm extends CFormModel {

    public $group_id;

    public function rules() {
        return array(
            array('group_id', 'required', 
                'message' =>
                SnsException::MISSING_PARAMETER('group_id')),
        );
    }

}

?>
