<?php
namespace codeproduction\controls;

use \php\error as ERROR;
use \php\controls\AbstractController as AbstractController;

class LidController extends AbstractController {
    public function __construct($control, $action){
        parent::__construct($control, $action);
    }

// kan de defaultAction niet in de AbstractController gezet worden?
  public function defaultAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
    echo 'hello lid';
  }

  public function inschrijvenAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
    echo 'hello lid inschrijven';
  }

  public function lidBeheerAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
    echo 'hello lid lidbeheer';
  }

  public function overzichtAction() {
    $typegebruiker = $this->model->getGebruikerRecht();
    $this->view->set('typegebruiker', $typegebruiker);
    echo 'hello lid overzicht';
  }
}
