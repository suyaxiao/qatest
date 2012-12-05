<?php
class AnswerController extends CController{
	public function actionList(){
		
		
		
		$this->render('answer/answer',array());
	}
	
	public function actionMorelist(){
		
		
		$this->render('answerlist',array());
		
	}
}
