<?php

class WeiboCommentForm extends CFormModel {

    public $mid;
    public $platform_id;
    public $position;
    public $count;

    public function rules() {
        return array(
            array('mid', 'default',
                'value' =>''),
            array('platform_id', 'default',
                'value' => SnsConstants::DEFAULT_PLATFORM),
            array('count', 'default','value'=>  SnsConstants::DEFAULT_COUNT),
            array('position', 'default','value'=>  SnsConstants::DEFAULT_POSITION),
//            array('id,mid', 'idRequire',
//                'message' =>
//                SnsException::MISSING_PARAMETER('id,mid')),
//             array('platform_id', 'required',
//                'message' =>
//                SnsException::MISSING_PARAMETER('platform_id')),
        );
    }
}
?>
