<?php
  require_once("funciones.php");
  if(isset($_GET["m"]) && $_GET["m"]==1){?>
  <body>
    <aside>
      <blockquote>
         <a href="paginaprincipal.php"> Go Back </a>
      </blockquote>
    </aside>
    <h2>  <div style='text-align:center;'>Schools added:</div></h2>
      <div style='text-align:center;'>
        <table style = 'text-align:center;'>
          <table style='margin: 0 auto;'>
            <?php
            $borrar_escuela = new Tabla("SELECT * FROM in_escuelas_auditoria;");
            $datos = $borrar_escuela->get_Table($borrar_escuela->get_Sql());?>
            <tr>
              <?php
                $titulo = $borrar_escuela->get_Table_Header($borrar_escuela->get_Sql());?>
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
            <?php }?>
          </table>
       </div>
    </body>
