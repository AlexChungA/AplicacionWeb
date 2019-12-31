<?php
require_once("funciones.php");
 ?>
 <!DOCTYPE html>
 <head>
 <meta charset="utf-8"/>
 <title>Lista de colegios y centros ofreciendo lengua materna avanzada</title>
  <h1>  <div style='text-align:center;'>
 List of schools and centres offering higher mother tongue</div></h1>
 </head>
 <body>
   <?php
     if(isset($_GET["m"]) && $_GET["m"]==1)
     {
           ?>
           <h4 style="color: green;">School deleted. <style="color: blue;"><a href="delete.php?m=1";>(View deleted schools)</a></h4>
           <?php
     }
    ?>
    <aside>
      <blockquote>
         <a href="auditorias.php?m=1">Click here to view schools added.</a>
      </blockquote>
    </aside>
   <aside>
     <blockquote>
        <a href="add.php">Add School</a>
     </blockquote>
   </aside>
   <div style='text-align:center;'>
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
            <td><a href="update.php?school_id=<?php echo $datos[$i]["school_id"];?>">Update</a></td>
            <td><a href="delete.php?school_id=<?php echo $datos[$i]["school_id"];?>">Delete</a></td>
            </tr>
          <?php }?>
       </table>
    </div>
</body>
