<?php

/**
 * Description of InstallAction
 * 首页
 * @author whp
 */
class IndexAction extends AdminAction {

    protected function exec() {
    	$message = array();
		
    	foreach(InitInfo::getInfoList() as $info){
			$infoList[] = $info->attributes;
		}
		$message['infoList'] = $infoList;
		
        $this->render("admin-index", $message);
    }
}

?>
