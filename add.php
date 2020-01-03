<?php
require_once("funciones.php");
$ta=new Tabla("INSERT INTO escuelas VALUES (?,?,?,?,?,?,?)");
$last_id=$ta->obtener_ultimo_id();
$ta1=new Tabla("INSERT INTO escuelas_id VALUES ($last_id,?)");

if (isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
  $ta->insertar();
  $ta1->insertar1();
  exit;
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>Add a new school to the list</title>
<link rel = "stylesheet" href="estilos.css">
</head>
<body>
  <body>
    <div class="back">
         <input type="button"  class= "btn btn4" value="Go Back" onclick="window.location='paginaprincipal.php'"/>
    </div>
<?php
  if(isset($_GET["m"]))
  {
    switch ($_GET["m"]) {
      case '1':
        ?>
        <h4 style="color: #AE0A0A;">Please, fill all the fields.<?php echo $ta->obtener_ultimo_id(); ?></h4>
        <?php
        break;
      case '2':
          ?>
          <h4 style="color: green;">School added succesfully!<?php echo $ta->obtener_ultimo_id(); ?></h4>
          <?php
          break;
    }
  }
 ?>
<div class="col-md-5">
  <div class="card">
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="name" placeholder="school's name" class="form-control">
          <input type="text" name="op1" placeholder="offer_hcl	" class="form-control">
          <input type="text" name="op2" placeholder="hcl_designated_centre" class="form-control">
          <input type="text" name="op3" placeholder="offer_hml" class="form-control">
          <input type="text" name="op4" placeholder="hml_designated_centre" class="form-control">
          <input type="text" name="op5" placeholder="offer_htl" class="form-control">
          <input type="text" name="op6" placeholder="htl_designated_centre" class="form-control">
        </div>
          <button type = "submit" class= "btn btn2" name="grabar" value="si" class="btn btn-primary">
            Add new school
          </button>
      </form>
    </div>
  </div>
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
