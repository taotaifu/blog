<?php
namespace app\index\controller;
use Think\Controller;
class MoodList extends Controller {
	public function index(){
		return $this->fetch ();
	}

}