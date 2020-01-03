<?php

class Tabla{
  private $dbh;
  private $n;
  private $sql;

  public function __construct($sql)
  {
    $this->dbh = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=postgres',"postgres","amigos");
    $this->n = array();
    $this->sql = $sql;
  }
  public function set_Sql($sql){
    $this->sql=$sql;
    return $this->sql;
  }
  public function get_Sql()
  {
    return $this->sql;
  }
  public function get_Table_Header($sql)
  {
    $dbconn = pg_connect("host=127.0.0.1 port=5432 dbname=postgres user=postgres password=amigos")
        or die('No se ha podido conectar: ' . pg_last_error());
    $result = pg_query($sql) or die('La consulta fallo: ' . pg_last_error());
    $num_columns = pg_num_fields($result);
    $fieldname = array();
    for($i = 0; $i < $num_columns; $i++){
      $fieldname[$i] = pg_field_name($result, $i);
    }
    pg_free_result($result);
    pg_close($dbconn);
    return $fieldname;
  }
  public function get_Table($sql)
  {
    foreach ($this->dbh->query($sql) as $row) {
      $this->n[] = $row;
    }
      return $this->n;
      $this->dbh=null;
  }
  public function get_school_by_name($school_name)
  {
    $sql2 = "SELECT * FROM escuelas WHERE y2020_school_centre=?;";
    $stmt = $this->dbh->prepare($sql2);
    if($stmt->execute( array($school_name) ))
    {
      while($row = $stmt->fetch())
      {
        $this->n[]=$row;
      }
      return $this->n;
      $this->dbh=null;
    }
  }
  public function send_sequence()
  {
    $stmt=$this->dbh->exec($this->sql);
    //$this->dbh=null;
  }
  public function insertar()
  {
    if(empty($_POST["name"]) or empty($_POST["op1"]) or empty($_POST["op2"]) or empty($_POST["op3"]) or empty($_POST["op4"]) or empty($_POST["op5"]) or empty($_POST["op6"]))
    {
      header("Location: add.php?m=1");
      exit;
    }
    $stmt=$this->dbh->prepare($this->sql);
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$op1);
    $stmt->bindParam(3,$op2);
    $stmt->bindParam(4,$op4);
    $stmt->bindParam(5,$op3);
    $stmt->bindParam(6,$op5);
    $stmt->bindParam(7,$op6);

    $name=strip_tags($_POST["name"]);
    $op1=strip_tags($_POST["op1"]);
    $op2=strip_tags($_POST["op2"]);
    $op3=strip_tags($_POST["op3"]);
    $op4=strip_tags($_POST["op4"]);
    $op5=strip_tags($_POST["op5"]);
    $op6=strip_tags($_POST["op6"]);

    $stmt->execute();
    $this->dbh=null;
    header("Location: add.php?m=2");
  }
  public function obtener_ultimo_id()
  {
    $sth = $this->dbh->prepare("SELECT COUNT(y2020_school_centre) FROM escuelas_id ");
    $sth->execute();
    $result = $sth->fetchColumn()+1;
    return $result;
  }
  public function insertar1()
  {
    $stmt=$this->dbh->prepare($this->sql);
    $stmt->bindValue(1,$_POST["name"], PDO::PARAM_STR);
    $stmt->execute();
    $this->dbh=null;
  }

  public function actualizar()
  {
    if(empty($_POST["name"]) or empty($_POST["op1"]) or empty($_POST["op2"]) or empty($_POST["op3"]) or empty($_POST["op4"]) or empty($_POST["op5"]) or empty($_POST["op6"]))
    {
      header("Location: update.php?m=1&school_name=".$_POST["name"]);
      exit;
    }
    $stmt=$this->dbh->prepare($this->sql);
    $stmt->bindValue(1,$_POST["name"], PDO::PARAM_STR);
    $stmt->bindValue(2,$_POST["op1"], PDO::PARAM_STR);
    $stmt->bindValue(3,$_POST["op2"], PDO::PARAM_STR);
    $stmt->bindValue(4,$_POST["op3"], PDO::PARAM_STR);
    $stmt->bindValue(5,$_POST["op4"], PDO::PARAM_STR);
    $stmt->bindValue(6,$_POST["op5"], PDO::PARAM_STR);
    $stmt->bindValue(7,$_POST["op6"], PDO::PARAM_STR);
    $stmt->bindValue(8,$_POST["name"], PDO::PARAM_STR);
    $stmt->execute();
    $this->dbh=null;
    header("Location: update.php?m=2&school_name=".$_POST["name"]);
  }
  public function actualizar1()
  {
    $stmt=$this->dbh->prepare($this->sql);
    $stmt->bindValue(1,$_POST["school_name"], PDO::PARAM_STR);
    $stmt->execute();
    $this->dbh=null;
  }
  public function borrar($school_name,$sql)
  {
    $stmt = $this->dbh->prepare($sql);
    $stmt->bindParam(1,$school_name);
    $stmt->execute();
    $this->dbh=null;
    header("Location: paginaprincipal.php?m=1");
  }
}

 ?>
