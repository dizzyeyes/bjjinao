<?php

/**
 * Description of WriteFile
 *
 * @author whp
 */
class WriteFile {

    public function __construct() {
        
    }
    public function writeFile() {
        $this->writeHeaderNav();
        $this->writeLeft();
        $this->writeParams();
    }

    public static function writeHeaderNav() {
        $mainMenus = Menu::getByPid(SnsConstants::MENU_MAIN, true);         //一级菜单
        $str = "";
        foreach ($mainMenus as $mainMenu) {
            $str .= "<li <{if isset(\$navId) && \$navId eq " . $mainMenu->menu_id . "}> class='current' <{/if}>><a href='" . $mainMenu->tpl . "'>" . $mainMenu->name . "</a></li>
                ";
        }
        $fileName = APP_DIR . "/views/default/layout/header_nav.tpl";
        $fp = fopen($fileName, "w");
        fwrite($fp, $str);
        fclose($fp);
//        chmod($fileName, 0777);
    }

    public static function writeLeft() {

        $mainMenus = Menu::getByPid(SnsConstants::MENU_MAIN, true);         //一级菜单

        foreach ($mainMenus as $mainMenu) {   //有几个一级菜单就生成几个_XXXXLeft.tpl 文件
            $id = $mainMenu->menu_id;
            $menus = Menu::getByPid($id, true);
            if (!empty($menus)) {
                $str = "
        <ul class='left-menu'>";
                foreach ($menus as $menu) {
                    $str .= " <li <{if \$_leftMenu=='" . $menu->tpl . "'}> class='current' <{/if}>><a href='" . $menu->tpl . "'>" . $menu->name . "</a></li>
                        ";
                }
                $str .="</ul>";
                $fileName = APP_DIR . "/views/default/layout/_" . $mainMenu->tpl . "Left.tpl";
                $fp = fopen($fileName, "w");
                fwrite($fp, $str);
                fclose($fp);
//                chmod($fileName, 0777);
            }
        }
    }

    public static function writeParams() {

        $initInfos = InitInfo::getInfoList();
        $str = "
            <?php

return array (";
        foreach ($initInfos as $initInfo) {
            $str .= "'" . $initInfo->param . "'=>'" . $initInfo->value . "', 
               ";
            if ($initInfo->param == "serverRoot") {
                $str .= "'loginUrl'=>'" . $initInfo->value . "/weibo/login', 
                   ";
                $str .= "'homeUrl'=>'" . $initInfo->value . "/weibo/home',
                    ";
                $str .= "'errorUrl'=>'" . $initInfo->value . "/weibo/error',
                    ";
                $str .= "'redirectUrl'=>'" . $initInfo->value . "/weibo/redirect',
                    ";
                $str .= "'systemCallback'=>'" . $initInfo->value . "/api/redirectAddAccount',
                    ";
            }
        }
        $str.="'machineNum' => 1,
        'oldWeitianxiaThrift'=> array('ip' => '10.1.9.7', 'port' => '10001'),
        'clThrift' => array('ip' => '10.100.92.11', 'port' => '8089'),
        'luceneThrift' => array('ip' => '10.100.92.11', 'port' => '8000'),
        'blogUrl' => 'http://www.peopledaily.me',
        'blogParams' =>array('username' => 'bingliu','password' => 'bingliu','status'=>'draft'),
        'kvCahceName' => 'weiboCache_sns',
        'tmpFilePath' => '/tmp', );
?>";


        $fileName = APP_DIR . "/protected/config/online/params.php";
        $fp = fopen($fileName, "w");
        fwrite($fp, $str);
        fclose($fp);
//        chmod($fileName, 0777);
    }

}

?>
