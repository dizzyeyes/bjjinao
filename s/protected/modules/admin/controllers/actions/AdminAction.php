<?php

abstract class AdminAction extends SnsAction {

    /**
     * 为所有API添加了统一的错误处理，子类不应重载该方法而应重载exec
     */
    final public function run() {
        try {
            $this->exec();
        } catch (SnsException $e) {
            $this->response($e);
        }
    }

    /**
     * 子类需要重载该方法而不是run方法
     */
    abstract protected function exec();

    protected function getUserInfo(User $user = null) {
        return $this->controller->getUserInfo($user);
    }

    protected function getFullAccountInfo(AccountInfo $account,
            $alarmTime = 172800) {
        return $this->controller->getFullAccountInfo($account, $alarmTime);
    }
    
}

?>
