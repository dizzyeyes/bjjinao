<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UpdateIsshow
 *
 * @author whp
 */
class UpdateIsshowAction extends AdminAction {

    protected function exec() {
        $form = $this->fillForm(new UpdateIsshowForm());
        $id = $form->id;
        $isshow = $form->isshow;
		$message = new stdClass();
        $ret = Menu::updateIsshowById($id, $isshow);
		if($ret){
            $message->status = 0;
            $message->msg="success";
        }else{
            $message->status = 1000;
            $message->msg="error";
        }
        echo json_encode($message);
		exit();
    }
}

?>
