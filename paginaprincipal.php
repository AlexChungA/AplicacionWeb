<?php
require_once("funciones.php");
 ?>
 <!DOCTYPE html>
 <head>
 <meta charset="utf-8"/>
 <title>Lista de colegios y centros ofreciendo lengua materna avanzada</title>
 </head>
 <body>
   <aside>
     <blockquote cite="file:///C:/Users/ALEX%20CHUNG/Desktop/AplicaciónWeb/paginaprincipal.html">
       List of schools and centres offering higher mother tongue
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
          </tr>
        <?php
         for($i=0;$i<sizeof($datos);$i++){?>
           <tr>
           <?php
           for($j=0;$j<sizeof($titulo);$j++){?>
             <td><?php echo $datos[$i][$titulo[$j]];?>
             </td>
            <?php }?>
            </tr>
          <?php }?>
       </table>
    </div>
</body>
