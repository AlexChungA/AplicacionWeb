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
}

 ?>
