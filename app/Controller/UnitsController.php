<?php
App::uses('AppController', 'Controller');
/**
 * Units Controller
 *
 */
class UnitsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	// public $scaffold;

	public function index() {
	
	$units = $this->Unit->find('all', array('limit'=>25));

	//	$this->set('locationGallery', $this->LocationGallery->find('first', $options));

	$this->set('units', $units) ;
	}
	 	 
}
