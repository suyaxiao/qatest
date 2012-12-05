<?php
class QuestionController extends CController{
	public function actionList(){
		$criteria = new CDbCriteria();
		$criteria->group='qid';
		$criteria->select='question,datetime';	

		
		
		
		$this->render('qusetion',array());
	}
	
	public function actionMoerlist(){
		
		
		$this->render('questionlist',array());
		
	}
	
	
}
