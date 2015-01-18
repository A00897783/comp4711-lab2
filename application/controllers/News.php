<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Application {

	
	public function index()
	{
		$this->data['pagebody'] = 'news';
                $this->render("News");
	}
}
