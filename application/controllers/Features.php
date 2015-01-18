<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Application {

	
	public function index()
	{
            $ids = array(2,3);
            
            foreach($ids as $id){
                $pic = $this->images->getImg($id);
                $pic = reset($pic)->filename;
                $img = "<img src='images/".$pic."' alt='".$pic."'>";
                $urls[] = $img;
            }
            
            $this->data['img1'] = $urls[0];
            $this->data['img2'] = $urls[1];

            $this->data['pagebody'] = 'features';
            $this->render("Features");
	}
}
