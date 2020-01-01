<?php
  require_once("funciones.php");
    $ta=new Tabla("DELETE FROM escuelas WHERE school_id=?;");
    $ta->borrar($_GET["school_id"],$ta->get_Sql());
 ?>
