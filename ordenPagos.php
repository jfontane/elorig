<?php
// include database configuration file
include 'php/conexion.php';
// initializ shopping cart class
include 'carrito.php';
include 'userControl.php';
$cart = new Cart;
$paginaActivo='verCarrito';
// redirect to home if cart is empty
if($cart->total_items() <= 0){
  header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 2;

// get customer details by session customer ID
$query = $con->query("SELECT * FROM clientes WHERE id = ".$_SESSION['idCliente']);
$custRow = $query->fetch_assoc();

$cliente_id=$_SESSION['idCliente'];
$cliente_apellido=$custRow['apellido'];
$cliente_nombre=$custRow['nombre'];
$cliente_dni=$custRow['dni'];
$cliente_direccion=$custRow['direccion'];
$cliente_telefono=$custRow['telefono'];
$cliente_email=$custRow['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <?php include 'style.php'; ?>
  <!-- Custom styles for this template -->

  <style media="screen">
  /* Este es para los elementos en general */
  .navbar-light .navbar-nav .nav-link {
    font-family:'Helvetica','Verdana','Monaco',sans-serif;
    font-size: 12px;
  }
  /*  Este es para el elemento activo lo puedes omitir si asi deseas */
  .navbar-light .navbar-nav .active>.nav-link  {
    font-family:'Helvetica','Verdana','Monaco',sans-serif;
    font-size: 12px;
  }
</style>

</head>

<body>

  <!-- Navigation -->
  <?php include 'header.php'; ?>
  <!-- Header -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="verCarrito.php">Carrito</a></li>
      <li class="breadcrumb-item active" aria-current="page">Confirmar Pedido</li>
    </ol>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <h2 class="text-center">CONFIRMAR PEDIDO</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mb-5">
        <div class="row">
          <div class="col-md-12">
            <h3>Datos del Pedido</h3>
            <hr>

          </div>
        </div> <!-- END ROW -->

        <table class="table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Sub total</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if($cart->total_items() > 0){
              //get cart items from session
              $cartItems = $cart->contents();
              foreach($cartItems as $item){
                ?>
                <tr>
                  <td><?php echo $item["name"]; ?></td>
                  <td><?php echo '$'.number_format($item["price"],2,'.',',').' '; ?></td>
                  <td><?php echo $item["qty"]; ?></td>
                  <td><?php echo '$'.number_format($item["subtotal"],2,'.',',').' '; ?></td>
                </tr>
              <?php } }else{ ?>
                <tr><td colspan="4"><p>No hay articulos en tu carrito......</p></td>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3"></td>
                  <?php if($cart->total_items() > 0){ ?>
                    <td class="text-center"><strong>Total <?php echo '$'.number_format($cart->total(),2,'.',',').' '; ?></strong></td>
                  <?php } ?>
                </tr>
                <tr>
                  <td>
                    <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue comprando</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="#" class="btn btn-success orderBtn" data-clienteid='<?php echo$cliente_id;?>' id="btnPedido" >Finalizar pedido
                      <i class="glyphicon glyphicon-menu-right"></i>
                    </a>
                  </td>
                </tr>
              </tfoot>
            </table>


          </div>

          <div class="col-md-4 mb-5">
            <h3>Datos del Cliente</h3>
            <hr>
            <address>
              <strong>Nombre:</strong>
              <?=$cliente_apellido.','.$cliente_nombre?>
              <br><strong>Dni: </strong><?=$cliente_dni?>
              <br><strong>Telefono: </strong><?=$cliente_direccion?>
            </address>
            <address>
              <abbr title="Phone"><strong>P:</strong></abbr>
              <?=$cliente_telefono?>
              <br>
              <abbr title="Email"><strong>E:</strong></abbr>
              <?=$cliente_email?>
            </address>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

      <!-- Footer -->
      <?php include 'footer.php'; ?>
      <!-- Bootstrap core JavaScript -->

      <!-- ********************************************************************************* -->
      <!-- ************ JAVASCRIPT ********************************************************* -->
      <!-- ********************************************************************************* -->
      <?php
      include("scriptJs.php");
      ?>
      <script>
      $("document").ready(function(){
        $("#btnPedido").click(function(e){
          e.preventDefault();
          var idCliente = $(this).data('clienteid')
          console.log("valor:"+idCliente);
          url='accionCarrito.php?action=placeOrder'+'&idcliente='+idCliente;
          $(location).attr('href',url);
        });
      })
    </script>

  </body>

  </html>
