<?php

class DefaultController extends Controller
{
	
	public function actionIndex()
	{
		$this->redirect($this->createAbsoluteUrl("/{$this->module->id}/profile"));
	}

}