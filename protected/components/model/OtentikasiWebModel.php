<?php
class OtentikasiWebModel extends CApplicationComponent
{
	private $_id;
	private $username;
	public $connection;
	public function __construct()
	{
		$this->connection = Yii::app()->db;
	}

	//login ke dalam aplikasi web
	public function Authenticate($data)
	{
		//echo '<pre>'; var_dump($data);die;
		$user = Users::model()->find('LOWER(username)=?',array($data['username']));
		//jika terdapat user
		if ($user != null)
		{
			if ($user->password == $data['password'])
			{
				$this->_id = $user->id;
				$this->username = $user->username;
				Yii::app()->user->setFlash('berhasil','Login Berhasil');
				return true;
			}
			else
			{
				Yii::app()->user->setFlash('gagal','Password Anda Salah');
				return false;
			}
		}
		else
		{
			Yii::app()->user->setFlash('tidak_ditemukan','Username Tidak Ditemukan');
			return false;
		}
		//echo "<pre>";var_dump($user);die;;
	}
}