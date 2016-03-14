<?php

/**
 * Description of WarningForm
 *
 * @author whp
 */
class WarningForm extends CFormModel {

    public $position;
    public $count;
    public $start_time;
    public $end_time;

    public function rules() {
        return array(
            array('start_time', 'default',
               'value' => strtotime(date(Yii::app()->params['statisticDay']))),
            array('end_time', 'default',
               'value' => time()),
            array('start_time, end_time', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('start_time', 'end_time')),
            array('position, count', 'numerical', 'integerOnly' => true,
                'message' =>
                SnsException::PARAMETER_FORMAT_ERROR('position', 'count')),
            array('position', 'default', 'value' => SnsConstants::DEFAULT_POSITION),
            array('count', 'default', 'value' => SnsConstants::DEFAULT_COUNT),
        );
    }
    
     public static function getWarningInfo($logs) {
        $ret = array();
        $t = new SnsTranslate();
        foreach ($logs as $log) {
            $ret[] = array(
                'log_id' => $log->log_id,
                SnsConstants::USER_ID => $log->user_id,
                'api_name' => $t->translateApiName($log->name),
                SnsConstants::TIME => date('Y年m月d日 H:i:s', $log->time),
                'ip' => $log->ip,
                'location' => $log->location,
                SnsConstants::INFO => $log->warning->info,
            );
        }
        return $ret;
    }

}

?>
