<?php

/**
 * Description of InstallAction
 * 首页
 * @author whp
 */
class SiteInfoSaveAction extends AdminAction {

	protected function exec() {
		$form = $this -> fillForm(new SiteInfoForm());
		
		$ret = InitInfo::updateInfoListByParam("pageTitle", $form -> pageTitle);
		$ret = InitInfo::updateInfoListByParam("version", $form -> version);
		$ret = InitInfo::updateInfoListByParam("platformCallback", $form -> platformCallback);
		$ret = InitInfo::updateInfoListByParam("baseUrl", $form -> baseUrl);
		$ret = InitInfo::updateInfoListByParam("serverRoot", $form -> serverRoot);
		$ret = InitInfo::updateInfoListByParam("widgetsAuthor", $form -> widgetsAuthor);
		$ret = InitInfo::updateInfoListByParam("widgetsEditor", $form -> widgetsEditor);
		$ret = InitInfo::updateInfoListByParam("longweibo_background", $form -> longweibo_background);
		$ret = InitInfo::updateInfoListByParam("comment_default_user_id", $form -> comment_default_user_id);
		$ret = InitInfo::updateInfoListByParam("comment_default_platform", $form -> comment_default_platform);
		$ret = InitInfo::updateInfoListByParam("statisticDay", $form -> statisticDay);

		// back to index page
		Yii::app()->request->redirect("index");
	}

}
?>
