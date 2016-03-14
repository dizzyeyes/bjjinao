<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthorityFilter
 *
 * @author mac
 */
class AuthorityFilter extends SnsFilter {
	 
	public $mapping;
    protected function preFilter($filterChain) {
         $action = Yii::app()->getController()->getAction()->getId();
        if (isset($this->mapping[$action])) {
            $user = Yii::app()->getController()->getUser();
            if (!$user->checkAuthority($this->mapping[$action])) {
				 Yii::app()->request->redirect(Yii::app()->params['homeUrl']);
            }
        }
        return true;
	}
}

?>
