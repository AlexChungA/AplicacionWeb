<?php
require_once("funciones.php");
 ?>
 <!DOCTYPE html>
 <head>
 <meta charset="utf-8"/>
 <link rel = "stylesheet" href="estilos.css">
 <title>App Web Crud</title>
  <h1>  <div style='text-align:center;'>
 List of schools and centres offering higher mother tongue</div></h1>
 </head>
 <body>
   <?php
     if(isset($_GET["m"]) && $_GET["m"]==1)
     {
           ?>
           <h3 style="color: #286832  ;">School deleted.</h3>
           <?php
     }
    ?>
    <?php
    $escuelas = new Tabla("");
    $secuencia = $escuelas->set_Sql("UPDATE escuelas_id SET school_id=10000+nextval('escuelas_id_school_id_seq');");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("ALTER SEQUENCE escuelas_id_school_id_seq RESTART WITH 1;");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("UPDATE escuelas_id SET school_id=col_serial FROM
(SELECT school_id, row_number() OVER ( ORDER BY y2020_school_centre) AS col_serial FROM escuelas_id ORDER BY y2020_school_centre) AS t1
WHERE escuelas_id.school_id=t1.school_id;");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("SELECT nextval('escuelas_id_school_id_seq');");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("UPDATE escuelas_id SET school_id=10000+nextval('escuelas_id_school_id_seq');");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("ALTER SEQUENCE escuelas_id_school_id_seq RESTART WITH 1;");
    $escuelas->send_sequence();
    $secuencia = $escuelas->set_Sql("UPDATE escuelas_id SET school_id=col_serial FROM
(SELECT school_id, row_number() OVER ( ORDER BY y2020_school_centre) AS col_serial FROM escuelas_id ORDER BY y2020_school_centre) AS t1
WHERE escuelas_id.school_id=t1.school_id;");
    $escuelas->send_sequence();
    $escuelas->set_Sql("SELECT school_id,y2020_school_centre,offer_hcl,hcl_designated_centre,offer_hml,hml_designated_centre,offer_htl,htl_designated_centre FROM escuelas_id natural join escuelas ORDER BY school_id;");
    $datos = $escuelas->get_Table($escuelas->get_Sql());?>
<div class="auditorias">
           <input type="button"  class= "btn btn4" value="Home Page" onclick="window.location='paginaprincipal.php'"/>
         <input type="button"  class= "btn btn3" value="Click here to view schools added" onclick="window.location='auditorias.php?m=1'"/>
         <input type="button" class= "btn btn3" value="Click here to view schools updated" onclick="window.location='auditorias.php?m=2'"/>
      <input type="button" class= "btn btn3" value="Click here to view schools deleted" onclick="window.location='auditorias.php?m=3'"/>
</div>
    <div class="add">
        <input type="button" class= "btn btn2" value="Add School" onclick="window.location='add.php'"/></div>
   <div style='text-align:center;' class = "tabla">
     <table style = 'text-align:center;'>
       <table style='margin: 0 auto;'>

         <tr>
           <?php
              $titulo = $escuelas->get_Table_Header($escuelas->get_Sql());?>
              <th></th>
           <?php
              for($i=1;$i<sizeof($titulo);$i++){
                echo "<th> $titulo[$i] </th>";
              }
            ?>
              <th>Update</th>
              <th>Delete</th>
          </tr>
        <?php
         for($i=0;$i<sizeof($datos);$i++){?>
           <tr>
           <?php
           for($j=0;$j<sizeof($titulo);$j++){?>
             <td><?php echo $datos[$i][$titulo[$j]];?>
             </td>
            <?php }?>
            <td ><input type= "button" class="btn btn1" value="Update" onclick="window.location='update.php?school_name=<?php echo $datos[$i][$titulo[1]];?>'"/></td>
            <td ><input type= "button" class="btn btn1" value="Delete" onclick="window.location='delete.php?school_name=<?php echo $datos[$i][$titulo[1]];?>'"/></td>
            </tr>
          <?php }?>
       </table>
    </div>
</body>
