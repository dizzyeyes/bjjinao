<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublishLongForm
 *
 * @author whp
 */
class PublishLongForm extends CFormModel {

    public $longImgUrl;
    public $longTitle;

    public function rules() {
        return array(
            array('longImgUrl', 'url', 
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('longImgUrl')),
			 array('longTitle', 'default','value' => '' ),
        );
    }

}

?>
