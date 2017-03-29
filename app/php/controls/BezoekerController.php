<?php
namespace php\controls;
use php\error as ERROR;

class BezoekerController extends AbstractController {
  protected $control;
  protected $action;
  protected $view;
  protected $model;

  public function defaultAction(){
    if($this->model->isPostLeeg()){
        $this->view->set("note","vul uw gegevns in");
    }
    else{
        $resultInlog=$this->model->controleerInloggen();
        switch($resultInlog){
            case REQUEST_SUCCESS:
                $this->view->set("note","Welkom ".$_SESSION['gebruiker']->getNaam());
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
}
