<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeAction
 *
 * @author whp
 */
class HomeAction extends JinaoAction {

    protected function exec() {
        $data = array();
        $data["img_1"] = "images/folio/slider/1.jpg";
        $data["img_2"] = "images/folio/slider/2.jpg";
        $data["img_3"] = "images/folio/slider/3.jpg";

        $message['data'] = $data;
//        var_dump($data);exit;
        $this->render("home", $message);
}
}

?>
