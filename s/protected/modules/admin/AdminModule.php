<?php

Yii::import('application.modules.admin.models.*');
class AdminModule extends CWebModule {
    public function init() {
        $this->setViewPath ( APP_DIR . "/views/admin/" );
        $this->setLayoutPath ( APP_DIR . "/views/admin/layout/" );
    }
}
