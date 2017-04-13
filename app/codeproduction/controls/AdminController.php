<?php
namespace codeproduction\controls;

use \php\error as ERROR;
use \php\controls\AbstractController as AbstractController;

class AdminController extends AbstractController {
  public function __construct($control, $action){
    parent::__construct($control, $action);
    var_dump($this->control);
    var_dump($this->action);
  }

  public function defaultAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
  }

  public function instructeursAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
  }

  public function ledenAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
  }

  public function trainingsvormenAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
  }
}
