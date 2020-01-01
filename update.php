<?php
require_once("funciones.php");
$ta=new Tabla("UPDATE escuelas SET y2020_school_centre = ?,offer_hcl=?,hcl_designated_centre=?,	offer_hml=?,	hml_designated_centre=?,	offer_htl=?,	htl_designated_centre=? WHERE school_id=?	");
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
  $ta->actualizar();
  exit;
}
$datos=$ta->get_school_by_id($_GET["school_id"]);
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>Update school</title>
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
        <h4 style="color: #AE0A0A;">Please, fill all the fields.</h4>
        <?php
        break;
      case '2':
          ?>
          <h4 style="color: green;">School's details updated succesfully!</h4>
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
          <input type="text" name="name" placeholder="school's name" value="<?php echo $datos[0]["y2020_school_centre"]; ?>" class="form-control">
          <input type="text" name="op1" placeholder="offer_hcl	" value="<?php echo $datos[0]["offer_hcl"]; ?>" class="form-control">
          <input type="text" name="op2" placeholder="hcl_designated_centre" value="<?php echo $datos[0]["hcl_designated_centre"]; ?>" class="form-control">
          <input type="text" name="op3" placeholder="offer_hml" value="<?php echo $datos[0]["offer_hml"]; ?>" class="form-control">
          <input type="text" name="op4" placeholder="hml_designated_centre" value="<?php echo $datos[0]["hml_designated_centre"]; ?>" class="form-control">
          <input type="text" name="op5" placeholder="offer_htl" value="<?php echo $datos[0]["offer_htl"]; ?>" class="form-control">
          <input type="text" name="op6" placeholder="htl_designated_centre" value="<?php echo $datos[0]["htl_designated_centre"]; ?>" class="form-control">
        </div>
        <input type = "hidden" name="grabar" value="si"/>
        <input type = "hidden" name= "school_id" value="<?php echo $_GET["school_id"];?>"/>
        <div class "add">
        <button type = "submit" class="btn btn2" class="btn btn-primary">
          Update new school
        </button></div>
      </form>
    </div>
  </div>
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
