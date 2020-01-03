<link rel = "stylesheet" href="estilos.css">
<?php
  require_once("funciones.php");
  if(isset($_GET["m"])){
    switch ($_GET["m"]) {
      case '1':?>
      <body>
        <div class="back">
             <input type="button"  class= "btn btn4" value="Go Back" onclick="window.location='paginaprincipal.php'"/>
        </div>
        <h2>  <div style='text-align:center;'>Schools added:</div></h2>
          <div style='text-align:center;'>
            <table style = 'text-align:center;'>
              <table style='margin: 0 auto;'>
                <?php
                $insertar_escuela = new Tabla("SELECT * FROM in_escuelas_auditoria;");
                $datos = $insertar_escuela->get_Table($insertar_escuela->get_Sql());?>
                <tr>
                  <?php
                    $titulo = $insertar_escuela->get_Table_Header($insertar_escuela->get_Sql());?>
                  <?php
                     for($i=0;$i<sizeof($titulo);$i++){
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
        <?php
        break;
        case '2':?>
      <body>
        <div class="back">
             <input type="button"  class= "btn btn4" value="Go Back" onclick="window.location='paginaprincipal.php'"/>
        </div>
      <h2>  <div style='text-align:center;'>Schools updated:</div></h2>
        <div style='text-align:center;'>
          <table style = 'text-align:center;'>
            <table style='margin: 0 auto;'>
              <?php
              $actualizar_escuela = new Tabla("SELECT * FROM up_escuelas_auditoria;");
              $datos = $actualizar_escuela->get_Table($actualizar_escuela->get_Sql());?>
              <tr>
                <?php
                   $titulo = $actualizar_escuela->get_Table_Header($actualizar_escuela->get_Sql());?>
                <?php
                   for($i=0;$i<sizeof($titulo);$i++){
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
      </body><?php
        break;
        case '3':
        ?>
        <body>
          <div class="back">
               <input type="button"  class= "btn btn4" value="Go Back" onclick="window.location='paginaprincipal.php'"/>
          </div>
          <h2>  <div style='text-align:center;'>Schools deleted:</div></h2>
            <div style='text-align:center;'>
              <table style = 'text-align:center;'>
                <table style='margin: 0 auto;'>
                  <?php
                  $borrar_escuela = new Tabla("SELECT * FROM del_escuelas_auditoria;");
                  $datos = $borrar_escuela->get_Table($borrar_escuela->get_Sql());?>
                  <tr>
                    <?php
                      $titulo = $borrar_escuela->get_Table_Header($borrar_escuela->get_Sql());?>
                    <?php
                       for($i=0;$i<sizeof($titulo);$i++){
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
          </body><?php
         }
    }?>
