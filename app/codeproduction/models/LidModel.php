<?php

namespace codeproduction\models;

use \php\models\AbstractModel as AbstractModel;

class LidModel extends AbstractModel {
    public function __construct($control, $action){
        parent::__construct($control, $action);
    }

    public function updateGebruiker()
    {
        $login = filter_input(INPUT_POST, 'usn');
        $password = filter_input(INPUT_POST, 'ww');
        $fname = filter_input(INPUT_POST, 'voornaam');
        $pname = filter_input(INPUT_POST, 'tussenvoegsel');
        $lastname = filter_input(INPUT_POST, 'achternaam');
        $dateofbirth = filter_input(INPUT_POST, 'geboortedatum');
        $gender = filter_input(INPUT_POST, 'formGender');
        $email = filter_input(INPUT_POST, 'email');
        $hire_date = filter_input(INPUT_POST, 'fwd');
        $salary = filter_input(INPUT_POST, 'salaris');
        $street = filter_input(INPUT_POST, 'straat');
        $postalcode = filter_input(INPUT_POST, 'postcode');
        $place = filter_input(INPUT_POST, 'stad');
        /*$role = filter_input(INPUT_POST, 'rol');*/

        $sql = " UPDATE `persons` SET `loginname` =:login,
                                    password=:password,
                                    firstname=:fname,
                                    preprovision=:pname,
                                    lastname=:lastname,
                                    dateofbirth=:dateofbirth,
                                    gender=:gender,
                                    emailaddress=:email,  
                                    hire_date=:hire_date,
                                    salary=:salary, 
                                    street=:street,
                                    postal_code=:postalcode,
                                    place=:place
                                    /*,role=:role*/
                               WHERE `persons`.`id` = :id";
        $stmnt = $this->dbh->prepare($sql);
        $gebruiker = $this->getGebruiker();
        $id=$gebruiker->getId();
        $stmnt->bindParam(':id', $id);
        $stmnt->bindParam(':login', $login);
        $stmnt->bindParam(':password', $password);
        $stmnt->bindParam(':fname', $fname);
        $stmnt->bindParam(':pname', $pname);
        $stmnt->bindParam(':lastname', $lastname);
        $stmnt->bindParam(':dateofbirth', $dateofbirth);
        $stmnt->bindParam(':gender', $gender);
        $stmnt->bindParam(':email', $email);
        $stmnt->bindParam(':hire_date', $hire_date);
        $stmnt->bindParam(':salary', $salary);
        $stmnt->bindParam(':street', $street);
        $stmnt->bindParam(':postalcode', $postalcode);
        $stmnt->bindParam(':place', $place);
        /*$stmnt->bindParam(':role',$role);*/

        try {
            $stmnt->execute();
        } catch (\PDOEXception $e) {
            echo "<pre>";
            echo $e;
            return REQUEST_FAILURE_DATA_INVALID;
            echo "</pre>";
        }

    }

    public function getGebruikerById(){
        $gebruiker = $this->getGebruiker();
        $id=$gebruiker->getId();

        /*$id= filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);*/

        $sql= "SELECT * FROM persons WHERE id=:id";
        $sth= $this->dbh->prepare($sql);
        $sth->bindParam(':id',$id);
        $sth->execute();
        $gebruiker = $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');
        return  $gebruiker[0];
    }
}
