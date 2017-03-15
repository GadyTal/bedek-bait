<?php
/**
 * Created by IntelliJ IDEA.
 * User: mrkayo
 * Date: 2/23/2017
 * Time: 06:51 م
 */
class database {
    private $host , $db , $user , $password , $link;
    public function __construct() {
        $this->host     = "localhost";
        $this->db       = "form";
        $this->user     = "root";
        $this->password = "";
    }

    /* db_connection */
    public function db_connect () {
        $link = mysqli_connect($this->host , $this->user , $this->password , $this->db);
        if ($link) {
            $this->link = $link;
        } else throw new Exception("Error In DB Connection");
    }

    /* Insert */
    public function insert($name_table, $array) {
        $sql = "INSERT INTO $name_table";

        // implode keys of $array...
        $sql .= " (`" . implode("`, `", array_keys($array)) . "`)";

        // implode values of $array...
        $sql .= " VALUES ('" . implode("', '", $array) . "') ";

        // execute query...
        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        $id = mysqli_insert_id($this->link);
        if ($result) return $id;
        else return FALSE;
    }
    public function select ($tableName ,$col , $val){
        $query ="Select * FROM ".$tableName." WHERE ".$col."= ".$val;
        if(!$sql =  mysqli_query($this->link,$query))
            throw new Exception("Error : Can not Execute Query");
        else{
            $num = mysqli_num_rows($sql);
            if($num>0){
                for($i=0; $i<$num; $i++){
                    $data[] = mysqli_fetch_array($sql);
                }
            } else throw new Exception("Num Of Rows Eq 0");
        }
        return $data;
    }
    public function close() {
        mysqli_close($this->link);
    }
}