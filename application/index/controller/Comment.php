<?php
namespace app\index\controller;
use Think\Controller;
class Comment extends Controller {
	public function index(){

		return $this->fetch ();
	}

}