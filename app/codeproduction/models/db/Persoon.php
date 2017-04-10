<?php
/**
 * Created by S.A. RAgunath
 * Date: 29-3-2017
 * Time: 12:46
 */
namespace codeproduction\models\db;
use \php\models\db\Entiteit as Entiteit;
class Persoon extends Entiteit{
    protected $id;
    protected $loginname;
    protected $password;
    protected $firstname;
    protected $preprovision;
    protected $lastname;
    protected $dateofbirth;
    protected $gender;
    protected $emailaddress;
    protected $hire_date;
    protected $salary;
    protected $street;
    protected $postal_code;
    protected $place;
    protected $role;
    protected $lesson_id;
    protected $registration_id;
}