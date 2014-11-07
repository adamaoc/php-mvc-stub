<?php

class Home extends Controller 
{
	// public function index($name = "", $paramtwo = "")
	// {
	// 	echo 'home/index - name = ';
	// 	echo $name;
	// 	echo "<br>";
	// 	echo $paramtwo;
	// }
	public function index()
	{
		$this->model('User');
		$user->name = "Alex";
		// echo $user->name;

		$this->view('home/index', ['name' => $user->name]);
	}
}