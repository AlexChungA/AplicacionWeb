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
  <?php
  // Conectando y seleccionado la base de datos
  $dbconn = pg_connect("host=127.0.0.1 port=5432 dbname=postgres user=postgres password=amigos")
      or die('No se ha podido conectar: ' . pg_last_error());

  // Realizando una consulta SQL
  $query = 'SELECT * FROM escuelas ORDER BY school_id';
  $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

  // Imprimiendo los resultados en HTML
  echo "<table>\n";
  while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
      echo "\t<tr>\n";
      foreach ($line as $col_value) {
          echo "\t\t<td>$col_value</td>\n";
      }
      echo "\t</tr>\n";
  }
  echo "</table>\n";

  // Liberando el conjunto de resultados
  pg_free_result($result);

  // Cerrando la conexión
  pg_close($dbconn);
  ?>
</body>
