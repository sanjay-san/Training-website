<?php
namespace php\controls;
use php\error as ERROR;

class LidController extends AbstractController{

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
