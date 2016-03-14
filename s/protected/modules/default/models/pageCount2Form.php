<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pageCount2Action
 *
 * @author whp
 */
class PageCount2Form extends CFormModel {

    public $position1;
    public $count1;
    public $position2;
    public $count2;

    public function rules() {
        return array(
            array('position1, count1,position2,count2', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('position1', 'count1','position2','count2')),
            array('position1', 'default', 'value' => SnsConstants::DEFAULT_POSITION),
            array('count1', 'default', 'value' => SnsConstants::DEFAULT_COUNT),
            array('position2', 'default', 'value' => SnsConstants::DEFAULT_POSITION),
            array('count2', 'default', 'value' => SnsConstants::DEFAULT_COUNT),
        );
    }
}


?>
