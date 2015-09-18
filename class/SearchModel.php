<?php
include_once 'Connect.php';

class SearchModel extends Connect {
    
    public function findLerningObject($grade,$matter,$keyword,$level){
        $cond = '';
        if(!empty($level))
            $cond .= "And level='".$level."' ";
        if(!empty($grade))
            $cond .= "And grade='".$grade."' ";
        if(!empty($matter))
            $cond .= "And matter='".$matter."' ";
        if(!empty($keyword))
            $cond .= "And name_lo like '%".$keyword."%' ";
        
        $cond = substr($cond, 4);
        
        $sql = 'select * from learning_object where '.$cond.' ';
        $rs = $this->executeQuery($sql);
        return $rs;
    }

}

