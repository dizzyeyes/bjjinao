<?php
/**
 * @author HaoJie
 */
class TrendGraph {
    public $data = array ();
    public function getXLabel($index) {
        return date ( 'm-d', $this->data [$index] );
    }
} 

?>
