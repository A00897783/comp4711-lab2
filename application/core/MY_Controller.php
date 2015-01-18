<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;		  // identifier for our content
    protected $choices = array(// our menu navbar
        'Home' => '/', 'Features'=>'/features', 'News' => '/news',
        'About'=>'/about', 'Contact' => '/contact'
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct()
    {
	parent::__construct();
	$this->data = array();
    }

    /**
     * Render this page
     */
    function render($pagetitle)
    {
        $this->data['menubar'] = build_menu_bar($this->choices, $pagetitle);
        if(strcmp($pagetitle,"Home") == 0 ){
            $pagetitle = "";
        }else{ 
            $pagetitle .=" - ";
        }
        $this->data['pagetitle'] = $pagetitle.'Zerotype Website Template';
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
	$this->parser->parse('template', $this->data);
    }
    
    
}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */