<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExcelOutputForm
 * 导出EXCEL 
 * @author whp
 */
class ExcelOutputForm extends CFormModel {

    public $page_name;
    public $position;
    public $count;
    public $start_time;
    public $end_time;
	public $export_platform;
	public $export_fields;

    public function rules() {
        return array(
             array('page_name', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('page_name')),
             array('position', 'default', 'value' => SnsConstants::DEFAULT_POSITION),
             array('count', 'default', 'value' => SnsConstants::DEFAULT_OUTPUT_COUNT),
             array('start_time', 'default', 'value' => strtotime(date(Yii::app()->params['statisticDay']))),
            array('end_time', 'default', 'value' => time()),
            array('export_platform', 'default', 'value' => SnsConstants::DEFAULT_EXPORT_PLATFORM),
            array('export_fields', 'default', 'value' => SnsConstants::DEFAULT_EXPORT_FIELDS),
            array('start_time, end_time', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('start_time', 'end_time')),
        );
    }
}

?>
