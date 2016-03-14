<?php

/**
 * Description of MenuAction
 *
 * @author whp
 */
class MenuAction extends AdminAction {

    protected function exec() {
        $message = array();
		foreach(Menu::getMenuList() as $menu){
			$menuList[] = $menu->attributes;
		}
		$message['menuList'] = $menuList;
		
        $this->render("admin-menu", $message);
    }
    

}

?>
