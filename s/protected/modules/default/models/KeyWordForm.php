<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KeyWordForm
 *
 * @author whp
 */
class KeyWordForm extends CFormModel {

    public $keyword;

    public function rules() {
        return array(
             array('keyword', 'default', 'value' => array()),
             array('keyword', 'convertToArray'),
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
            $this->$attribute = explode(',', strval($this->$attribute));
        }
    }
}

?>
