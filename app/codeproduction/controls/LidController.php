<?php
namespace codeproduction\controls;

use \php\error as ERROR;
use \php\controls\AbstractController as AbstractController;

class LidController extends AbstractController {
    public function __construct($control, $action){
        parent::__construct($control, $action);
    }
    public function gebruikerrecht(){
        $typegebruiker = $this->model->getGebruikerRecht();
        $this->view->set('typegebruiker', $typegebruiker);
    }

// kan de defaultAction niet in de AbstractController gezet worden?
    public function defaultAction() {
        $this->gebruikerrecht();
        echo 'hello lid';
    }

    public function inschrijvenAction() {
        $this->gebruikerrecht();




    }

    public function lidBeheerAction() {
        $this->gebruikerrecht();

        if($this->model->isPostLeeg()){
            echo 'vul de gegevens in';
        }
        else{
            $result = $this->model->updateGebruiker();
            switch($result){
                case REQUEST_SUCCESS:
                    $this->forward('default');
                    echo 'succes?';
                    break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    echo "De gegevens waren incompleet. Vul compleet in!";
                    break;
                case REQUEST_NOTHING_CHANGED:
                    echo "Er was niets te wijzigen";
                    break;
                case REQUEST_FAILURE_DATA_INVALID:
                    echo "Vul een correcte datum/tijd in.";
                    break;
            }
        }
        $gebruiker= $this->model->getGebruikerById();
        $this->view->set('gebruiker',$gebruiker);
    }

    public function overzichtAction(){
        $this->gebruikerrecht();;
        echo 'hello lid overzicht';

        $lessen = $this->model->lessonOverzicht();
        $this->view->set('lessen',$lessen);

        $islesaangemeld = $this->model->islesaangemeld();
        $this->view->set('islesaangemeld',$islesaangemeld);
    }

    public function  deelnemenAction(){
        $this->model->deelnemerAanmelden();
        $this->forward('overzicht');
    }

}
