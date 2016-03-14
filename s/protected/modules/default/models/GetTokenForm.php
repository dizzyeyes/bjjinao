<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetTokenForm
 * 获取token
 * @author whp
 */
class GetTokenForm extends CFormModel {

    public $platform_id;

    public function rules() {
        return array(
             array('platform_id', 'required',
                'message' =>
                SnsException::MISSING_PARAMETER('platform_id')),
        );
    }
}

?>
