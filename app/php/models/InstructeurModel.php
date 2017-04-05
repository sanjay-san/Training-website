<?php
/**
 * Created by PhpStorm.
 * User: Sasagar BV
 * Date: 30-3-2017
 * Time: 12:27
 */

namespace php\models;


class InstructeurModel extends AbstractModel {
    public function getGebruikers(){

        $sql= "SELECT * FROM persons";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return  $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');
    }

    public function verwijderGebruiker(){

    }
}
