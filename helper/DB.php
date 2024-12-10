<?php
function DB($table,$pk='id'){
    return new class($table,$pk) extends mysqli{
       private $table,$pk;
        public function __construct($table,$pk)
        {
            parent::__construct('localhost','root','','catering');    
            $this->table=$table;
                $this->pk=$pk;
        }
        public function save(array|object $data,$id=null){
            $sql = "insert into $this->table set ";
            $wh = "";
            if($id){
                $sql = "update $this->table set";
                $wh = " where $this->pk=$id";
            }
            foreach($data as $colname=>$value){
                $sql.="$colname='".addslashes($value)."',";
            }
               $sql=substr($sql,0,-1).$wh;
             
               if($this->query($sql)){
                return $id??$this->insert_id;
               }
        }
        public function all($cols="*",$order=""){
            if(!$order){
                $order="$this->pk desc";
            }
            $sql="select $cols from $this->table order by $order";
            return $this->query($sql)?->fetch_all(MYSQLI_ASSOC);
        }
        public function find($id,$cols="*")
        {    
            $sql="select $cols from $this->table where $this->pk=$id";
            return $this->query($sql)?->fetch_assoc();
        }
             public function delete($ids) {
                $sql="delete from $this->table where $this->pk in($ids)";
            return $this->query($sql);
             }
    };
}


?>