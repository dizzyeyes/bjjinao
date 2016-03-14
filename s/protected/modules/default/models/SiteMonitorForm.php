<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteMonitorForm
 * 添加和修改网站监控的表单
 * @author whp
 */
class SiteMonitorForm extends CFormModel {

    public $event_id;
    public $event_name;
    public $keyword;
    public $search_engine;
    public $positive_feature;
    public $negative_feature;
    public $monitor_page_num;
    public $monitor_term_num;
    public $begin_time;
    public $end_time;
    public $choose;

    public function rules() {
        return array(
             array('event_id', 'default',
                'value' => 0 ),
            array('keyword', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('keyword')),
            array('keyword', 'convertToArray'),
            
            array('event_name', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('event_name')),
             array('search_engine', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('search_engine')),
            array('search_engine', 'convertToIntArray'),
            
            array('positive_feature', 'default','value' => '' ),
            array('positive_feature', 'convertToArray'),
            
            array('negative_feature', 'default','value' => '' ),
            array('negative_feature', 'convertToArray'),
            
            array('monitor_page_num', 'default',
                'value' =>1),
            array('monitor_page_num', 'checkInt','message' =>
                SnsException::PARAMETER_FORMAT_ERROR('monitor_page_num')),
            
             array('monitor_term_num', 'default',
                'value' =>1),
            array('monitor_page_num', 'checkInt','message' =>
                SnsException::PARAMETER_FORMAT_ERROR('monitor_term_num')),
            
            array('begin_time', 'default',
                'value' =>  strtotime(date("Y-m-d",time()+24*3600))),   //默认值修改
            
             array('end_time', 'default',
                'value' =>strtotime(date("Y-m-d",time()+8*24*3600))),
            array('choose', 'default',
                'value' =>0),
        );
    }
     /**
     * 验证器方法，请勿显式调用<br />
     * 用于验证指定的输入是否为用逗号分隔的字符串。
     * @param string $attribute
     * @param array $params
     */
    public function convertToArray($attribute, $params) {
        if (empty($this->$attribute)) {
            $this->$attribute = array();
        } else {
            $this->$attribute = str_replace('，', ',',$this->$attribute);
            $this->$attribute = explode(',', trim(strval($this->$attribute)));
        }
    }
    
    
    /**
     * 验证器方法，请勿显式调用<br />
     * 用于验证指定的输入是否为用逗号分隔的整数。
     * @param string $attribute
     * @param array $params
     */
    public function convertToIntArray($attribute, $params) {
        if ($this->$attribute==null) {
            $this->$attribute = array();
            return;
        }
        $this->$attribute = explode(',', $this->$attribute);
        foreach ($this->$attribute as &$value) {
            $int = intval($value);
            if (strval($int) != strval($value)) {
                $this->addError($attribute, $params['message']);
            }
            $value = $int;
        }
    }
    
    
    public function checkInt($attribute, $params) {
            $int = intval($this->$attribute);
            if (strval($int) != strval($this->$attribute)) {
                $this->addError($attribute, $params['message']);
            }
            $value = $int;
    }
    
}

?>
