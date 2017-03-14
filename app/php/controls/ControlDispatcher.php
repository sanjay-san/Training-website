<?php
namespace php\controls;

class ControlDispatcher {
  private $control;
  private $action;

  public function __construct($control, $action) {
    $this->control = $control;
    $this->action = $action;
  }

  public function dispatch() {
    $klasseNaam = BASE_NAMESPACE.'controls\\'.ucFirst($this->control).'Controller';

    if(!class_exists($klasseNaam)) {
      throw new \php\error\FrameworkException("controller $klasseNaam bestaat niet!");
    }

    if(!is_subclass_of($klasseNaam,'\php\\controls\\AbstractController')) {
      throw new \php\error\FrameworkException("klas $klasseNaam implementeert overerft niet van framework AbstractController. dat is verplicht");
    }

    $controller = new $klasseNaam($this->control,$this->action);
    $controller->execute();
  }
}
