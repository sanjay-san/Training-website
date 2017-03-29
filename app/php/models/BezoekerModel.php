<?php
namespace php\models;

class BezoekerModel extends AbstractModel {
    private function controleerInloggen(){
        $usn=   filter_input(INPUT_POST,'usn');
        $ww=    filter_input(INPUT_POST,'ww');

        if( ($usn!==null) && ($ww!==null) ){
            $sql= "SELECT * FROM persons WHERE logginname = :usn AND password = :ww";
            $sth= $this->db->prepare($sql);
            $sth->bindParam(':usn',$usn);
            $sth->bindParam(':ww',$ww);
            $sth->execute();

            $result = $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Persoon');

            if(count($result)===1){
                $this->startSession();
                $_SESSION['gebruiker']=$result[0];
                return REQUEST_SUCCESS;
            }
            return REQUEST_FAILURE_DATA_INVALID;
        }
        return REQUEST_FAILURE_DATA_INCOMPLETE;
    }
}
