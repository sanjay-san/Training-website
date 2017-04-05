<?php
namespace php\controls;
use php\error as ERROR;

class InstructeurController extends AbstractController{
    public function defaultAction(){
        $typegebruiker = $this->model->getGebruiker();
        $this->view->set('typegebruiker', $typegebruiker);
    }

    public function beheerGebruikersAction(){
        $typegebruiker = $this->model->verwijderGebruiker();
        $this->view->set('typegebruiker', $typegebruiker);
        $gebruikers = $this->model->getGebruikers();
        $this->view->set('gebruikers', $gebruikers);
    }

    public function verwijderGebruikerAction(){
        $typegebruiker = $this->model->verwijderGebruiker();
        $this->view->set('typegebruiker', $typegebruiker);
        $this->model->verwijderGebruiker();
        $this->forward('beheerGebruikers.php');
    }

}
