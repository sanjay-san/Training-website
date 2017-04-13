<?php
namespace codeproduction\models;

use \php\models\AbstractModel as AbstractModel;

class AdminModel extends AbstractModel{
  public function __construct($control, $action){
    parent::__construct($control, $action);
  }
}
