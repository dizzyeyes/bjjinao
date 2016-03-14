<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexAction
 *
 * @author whp
 */
class IndexAction extends JinaoAction {

    protected function exec() {
        $data = array();
        $message['data'] = $data;
        $this->render("index", $message);
}
}

?>
