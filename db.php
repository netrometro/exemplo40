<?php
function banco($sql) {
  $conn = pg_connect(getenv("DATABASE_URL"));
  if (!$conn) 
    die("Erro conexão com o banco.<br />");

  $resultado = pg_query($conn, $sql);
  if (!$resultado)
    die("Erro no SQL.<br />");

  pg_close($conn);
  return $resultado;
}
?>