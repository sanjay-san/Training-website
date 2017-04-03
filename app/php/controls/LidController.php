<?php
namespace php\controls;
use php\error as ERROR;

class LidController extends AbstractController{

// kan de defaultAction niet in de AbstractController gezet worden?
    public function defaultAction(){
      $typegebruiker = $this->model->getGebruikerRecht();
      $this->view->set("typegebruiker",$typegebruiker);
    }
}
