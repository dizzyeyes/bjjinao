<?php

/**
 * Description of InstallAction
 * 文件生成接口
 * @author whp
 */
class InstallAction extends AdminAction {

    protected function exec() {
//        if(file_exists(APP_DIR . "/install/install.lock")){
//            echo "已经建立，不能重复建立";
//            exit();
//        }
        $template = new WriteFile();
        $template->writeFile();
        
        //写入lock
        $str = "lock";
        $fileName = APP_DIR . "/install/install.lock";
        $fp = fopen($fileName, "w");
            fwrite($fp, $str);
            fclose($fp);
        exit();
    }
}

?>
