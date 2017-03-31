<?php
namespace php\controls;
use php\error as ERROR;

class BezoekerController extends AbstractController {
    public function defaultAction() {
      if($this->model->isPostLeeg()) {
        $this->view->set("note","vul uw gegevns in");
      } else {
        $this->login();
      }
    }

    public function registerAction() {
      if($this->model->isPostLeeg()) {
        $this->view->set("note","vul uw gegevns in");
      } else {
        $this->login();
      }
    }

    public function trainingsAction() {
      if($this->model->isPostLeeg()) {
        $this->view->set("note","vul uw gegevns in");
      } else {
        $this->login();
      }
    }

    public function gedragsregelsAction() {
      if($this->model->isPostLeeg()) {
        $this->view->set("note","vul uw gegevns in");
      } else {
        $this->login();
      }
    }

    public function contactAction() {
      if($this->model->isPostLeeg()) {
        $this->view->set("note","vul uw gegevns in");
      } else {
        $this->login();
      }
    }

    public function login() {
      $resultInlog=$this->model->controleerInloggen();
      var_dump($resultInlog);
      switch($resultInlog){
          case REQUEST_SUCCESS:
              $this->view->set("note","Welkom ".$_SESSION['gebruiker']->getFirstname());
              $recht = $this->model->getGebruikerRecht();
              $this->forward("default",$recht);
              break;
          case REQUEST_FAILURE_DATA_INVALID:
              $this->view->set("note","Gegevens kloppen niet, probeer het opnieuw");
              break;
          case REQUEST_FAILURE_DATA_INCOMPLETE:
              $this->view->set("note","Gebruikersnaam en of wachtwoord zijn niet ingevuld");
              break;

      }
    }
}
