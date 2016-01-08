<?php

class DashboardController extends Controller
{
	private $_id;
	private $username;
	public $usrn;
	

	public function actionIndex() {

		// echo Yii::app()->session->sessionID;die;
		if (!Yii::app()->session['username']) {
            $this->layout = 'login_layout';
        }
        else {
			$dataRender = array(
				
			);
			$this->layout = "main-simple";
			$this->pageTitle = "Dashboard";
			$renderView = "home";
			$this->render($renderView,
				array(
					'dataRender'=>$dataRender
				)
			);
		}
	}

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
		
	}

	public function actionLogin()
	{
		
		if(isset($_POST['Login']))
		{
			$data = $_POST['Login'];
			$user = Users::model()->find('LOWER(username)=?',array($data['username']));
			//jika terdapat user
			if ($user != null)
			{
				if ($user->password == $data['password'])
				{
					$this->_id = $user->id;
					$this->username = $user->username;
					

					Yii::app()->session['username'] = $this->username;
					Yii::app()->session['id'] = $this->_id;
					//Yii::app()->session->open();
					$this->usrn = $this->username;

					$this->redirect(Yii::app()->createUrl("dashboard/index"));
					Yii::app()->user->setFlash('berhasil','Login Berhasil');
					//return true;
				}
				else
				{
					Yii::app()->user->setFlash('gagal','Password Anda Salah');
					//return false;
					$this->refresh();
				}
			}
			else
			{
				Yii::app()->user->setFlash('tidak_ditemukan','Username Tidak Ditemukan');
				//return false;
				$this->refresh();
			}

		}
		$dataRender = array(
			
		);
		$this->layout = "login_layout";
		$this->pageTitle = "Login";
		$renderView = "login";
		$this->render($renderView,
			array(
				'dataRender'=>$dataRender
			)
		);

	}

	public function actionLoginCheck()
	{
		if (isset($_POST['username']) && isset($_POST['password'])) 
		{
            $password =  md5($_POST['password']."Random\$SaltValue#WithSpecialCharacters12@$@4&#%^$*");
            $user = $_POST['username'];
            $query = Users::model()->find('username = \''.$user.'\' and password = \''.$password.'\'');
            var_dump('hahahaha');
            
            //$user = md5($password. );
            if ($query != NULL) {
                $this->render('home');
            }   
            else {
           		$this->render('home');
          	}        
        }
        else $this->render('home');
        // $this->redirect(Yii::app()->request->baseUrl);
           
	}

	public function actionLogout()
	{

	}

	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
}