<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Application {

	
	public function index()
	{
		$this->data['pagebody'] = 'features';
                $this->render();
	}
}
