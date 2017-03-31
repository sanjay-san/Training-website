<?php
namespace php\controls;
use php\error as ERROR;

class InstructeurController extends AbstractController{
    public function defaultAction(){
        $typegebruiker = $this->model->getGebruikerRecht();
        $this->view->set("typegebruiker",$typegebruiker);
    }
}