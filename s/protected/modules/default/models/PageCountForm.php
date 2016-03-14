<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForbiddenWordsForm
 * 违禁词参数接收（分页）
 * @author whp
 */
class PageCountForm extends CFormModel {

    public $position;
    public $count;

    public function rules() {
        return array(
            array('position, count', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('position', 'count')),
            array('position', 'default', 'value' => SnsConstants::DEFAULT_POSITION),
            array('count', 'default', 'value' => SnsConstants::DEFAULT_COUNT),
        );
    }
}

?>
