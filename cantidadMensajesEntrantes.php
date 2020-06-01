<?php
include_once 'config/conexion.php';
function cantidadMensajesEntrantes($db) {
  $sql="SELECT * FROM mp WHERE leido='no' and receptor='".$_SESSION['usuario']."'";
  $result=$db->query($sql);
  $row_cnt = $result->num_rows;
  return $row_cnt;
};
?>
