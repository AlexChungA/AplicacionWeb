<?php
  require_once("funciones.php");
    $ta=new Tabla("DELETE FROM escuelas WHERE y2020_school_centre=?;");
    $ta->borrar($_GET["school_name"],$ta->get_Sql());
    $ta1=new Tabla("DELETE FROM escuelas_id WHERE y2020_school_centre=?;");
    $ta1->borrar($_GET["school_name"],$ta1->get_Sql());
 ?>
