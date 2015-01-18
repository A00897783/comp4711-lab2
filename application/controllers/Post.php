<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Application {

	
	public function index()
	{
		$this->data['pagebody'] = 'post';
                $this->render();
	}
}
