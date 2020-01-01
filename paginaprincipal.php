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
         <?php
         $escuelas = new Tabla("SELECT * FROM escuelas ORDER BY school_id;");
         $datos = $escuelas->get_Table($escuelas->get_Sql());?>
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
            <td ><input type= "button" class="btn btn1" value="Update" onclick="window.location='update.php?school_id=<?php echo $datos[$i]["school_id"];?>'"/></td>
            <td ><input type= "button" class="btn btn1" value="Delete" onclick="window.location='delete.php?school_id=<?php echo $datos[$i]["school_id"];?>'"/></td>
            </tr>
          <?php }?>
       </table>
    </div>
</body>
