<?php
/**
 * Created by PhpStorm.
 * User: sanjay
 * Date: 30-3-2017
 * Time: 12:27
 */

namespace codeproduction\models;

use \php\models\AbstractModel as AbstractModel;

class InstructeurModel extends AbstractModel {
    public function __construct($control, $action){
        parent::__construct($control, $action);
    }
    public function getGebruikers(){
        $sql= "SELECT * FROM persons";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return  $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');
    }

    public function getGebruikerById(){
        $id= filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

        $sql= "SELECT * FROM persons WHERE id=:id";
        $sth= $this->dbh->prepare($sql);
        $sth->bindParam(':id',$id);
        $sth->execute();
        $gebruiker = $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');
        return  $gebruiker[0];
    }
    public function verwijderGebruiker(){
        $id= filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

        if($id===null) {
            return REQUEST_FAILURE_DATA_INCOMPLETE;
        }
        if($id===false) {
            return REQUEST_FAILURE_DATA_INVALID;
        }

        $sql= "DELETE FROM persons WHERE id=:id";
        $sth= $this->dbh->prepare($sql);
        $sth->bindParam(':id',$id);
        $sth->execute();


    }

    public function addGebruiker(){
        $login   = filter_input(INPUT_POST, 'usn');
        $password  = filter_input(INPUT_POST, 'ww');
        $fname = filter_input(INPUT_POST, 'voornaam');
        $pname = filter_input(INPUT_POST, 'tussenvoegsel');
        $lastname = filter_input(INPUT_POST, 'achternaam');
        $dateofbirth  = filter_input(INPUT_POST, 'geboortedatum');
        $gender = filter_input(INPUT_POST, 'formGender');
        $email = filter_input(INPUT_POST, 'email');
        $hiredate = filter_input(INPUT_POST, 'fwd');
        $salary  = filter_input(INPUT_POST, 'salaris');
        $street = filter_input(INPUT_POST, 'straat');
        $postalcode = filter_input(INPUT_POST, 'postcode');
        $place = filter_input(INPUT_POST, 'stad');
        $role = filter_input(INPUT_POST, 'rol');

        $sql="INSERT INTO `persons` ( `loginname`, `password`, `firstname`, `preprovision`, `lastname`, `dateofbirth`, `gender`, `emailaddress`, `hire_date`, `salary`, `street`, `postal_code`, `place`, `role`) 
                   VALUES ( :login, :password, :fname, :pname, :lastname, :dateofbirth, :gender, :email, :hiredate, :salary, :street, :postalcode, :place, :role)";

        $stmnt = $this->dbh->prepare($sql);
        $stmnt->bindParam(':login', $login);
        $stmnt->bindParam(':password', $password);
        $stmnt->bindParam(':fname', $fname);
        $stmnt->bindParam(':pname',$pname);
        $stmnt->bindParam(':lastname',$lastname);
        $stmnt->bindParam(':dateofbirth',$dateofbirth);
        $stmnt->bindParam(':gender',$gender);
        $stmnt->bindParam(':email',$email);
        $stmnt->bindParam(':hiredate',$hiredate);
        $stmnt->bindParam(':salary',$salary);
        $stmnt->bindParam(':street',$street);
        $stmnt->bindParam(':postalcode',$postalcode);
        $stmnt->bindParam(':place',$place);
        $stmnt->bindParam(':role',$role);

        $stmnt->execute();
       /* return  $stmnt->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');*/
    }

    public function updateGebruiker(){
        $id= filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

        $login   = filter_input(INPUT_POST, 'usn');
        $password  = filter_input(INPUT_POST, 'ww');
        $fname = filter_input(INPUT_POST, 'voornaam');
        $pname = filter_input(INPUT_POST, 'tussenvoegsel');
        $lastname = filter_input(INPUT_POST, 'achternaam');
        $dateofbirth  = filter_input(INPUT_POST, 'geboortedatum');
        $gender = filter_input(INPUT_POST, 'formGender');
        $email = filter_input(INPUT_POST, 'email');
        $hire_date = filter_input(INPUT_POST, 'fwd');
        $salary  = filter_input(INPUT_POST, 'salaris');
        $street = filter_input(INPUT_POST, 'straat');
        $postalcode = filter_input(INPUT_POST, 'postcode');
        $place = filter_input(INPUT_POST, 'stad');
        /*$role = filter_input(INPUT_POST, 'rol');*/

        $sql=" UPDATE `persons` SET `loginname` =:login,
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
        $stmnt->bindParam(':id',$id);
        $stmnt->bindParam(':login', $login);
        $stmnt->bindParam(':password', $password);
        $stmnt->bindParam(':fname', $fname);
        $stmnt->bindParam(':pname',$pname);
        $stmnt->bindParam(':lastname',$lastname);
        $stmnt->bindParam(':dateofbirth',$dateofbirth);
        $stmnt->bindParam(':gender',$gender);
        $stmnt->bindParam(':email',$email);
        $stmnt->bindParam(':hire_date',$hire_date);
        $stmnt->bindParam(':salary',$salary);
        $stmnt->bindParam(':street',$street);
        $stmnt->bindParam(':postalcode',$postalcode);
        $stmnt->bindParam(':place',$place);
        /*$stmnt->bindParam(':role',$role);*/

        try {
            $stmnt->execute();
        }
        catch(\PDOEXception $e) {
            echo "<pre>";
            echo $e;
            return REQUEST_FAILURE_DATA_INVALID;
            echo "</pre>";
        }

        $aantalGewijzigd = $stmnt->rowCount();
        if($aantalGewijzigd===1) {
            return REQUEST_SUCCESS;
        }
        return REQUEST_NOTHING_CHANGED;


    }
}
