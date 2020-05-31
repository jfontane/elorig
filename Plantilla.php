<?php
// initializ shopping cart class
include 'carrito.php';
$cart = new Cart;
$paginaActivo='verCarrito';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>El Original</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Fontawesome core CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!--Slide Show Css -->
  <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
  <!-- custom CSS here -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><strong>El Original</strong> Online</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Track Order</a></li>
          <li><a href="#">Carrito</a></li>
          <li><a href="#">Ingresa</a></li>
          <li><a href="#">Registrate</a></li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><strong>Call: </strong>+09-456-567-890</a></li>
              <li><a href="#"><strong>Mail: </strong>info@yourdomain.com</a></li>
              <li class="divider"></li>
              <li><a href="#"><strong>Address: </strong>
                <div>
                  234, New york Street,<br />
                  Just Location, USA
                </div>
              </a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
          </div>
          &nbsp;
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>


  <div class="container">
    <!-- /.row -->
    <div class="row">
      <div class="col-md-3">
        <div>
          <a href="#" class="list-group-item active">Electronics
          </a>
          <ul class="list-group">

            <li class="list-group-item">Mobile
              <span class="label label-primary pull-right">234</span>
            </li>
            <li class="list-group-item">Computers
              <span class="label label-success pull-right">34</span>
            </li>
            <li class="list-group-item">Tablets
              <span class="label label-danger pull-right">4</span>
            </li>
            <li class="list-group-item">Appliances
              <span class="label label-info pull-right">434</span>
            </li>
            <li class="list-group-item">Games & Entertainment
              <span class="label label-success pull-right">34</span>
            </li>
          </ul>
        </div>
        <!-- /.div -->
        <div>
          <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
          </a>
          <ul class="list-group">

            <li class="list-group-item">Men's Clothing
              <span class="label label-danger pull-right">300</span>
            </li>
            <li class="list-group-item">Women's Clothing
              <span class="label label-success pull-right">340</span>
            </li>
            <li class="list-group-item">Kid's Wear
              <span class="label label-info pull-right">735</span>
            </li>

          </ul>
        </div>
        <!-- /.div -->
        <div>
          <a href="#" class="list-group-item active">Accessaries & Extras
          </a>
          <ul class="list-group">
            <li class="list-group-item">Mobile Accessaries
              <span class="label label-warning pull-right">456</span>
            </li>
            <li class="list-group-item">Men's Accessaries
              <span class="label label-success pull-right">156</span>
            </li>
            <li class="list-group-item">Women's Accessaries
              <span class="label label-info pull-right">400</span>
            </li>
            <li class="list-group-item">Kid's Accessaries
              <span class="label label-primary pull-right">89</span>
            </li>
            <li class="list-group-item">Home Products
              <span class="label label-danger pull-right">90</span>
            </li>
            <li class="list-group-item">Kitchen Products
              <span class="label label-warning pull-right">567</span>
            </li>
          </ul>
        </div>
        <!-- /.div -->
        <div>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
            <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
            <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
            <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
          </ul>
        </div>
        <!-- /.div -->
        <div class="well well-lg offer-box offer-colors">


          <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT

          <br />
          <br />
          <div class="progress progress-striped">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
            style="width: 70%">
            <span class="sr-only">70% Complete (success)</span>
            2hr 35 mins left
          </div>
        </div>
        <a href="#">click here to know more </a>
      </div>
      <!-- /.div -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Electronics</li>
        </ol>
      </div>


      <!-- /.row -->
<div class="row" id="resultado">
<h4>Carrito de Compras</h4>
<br>
        <table class="table">
          <thead>
            <tr>
              <th class="text-left">Producto</th>
              <th class="text-center">Precio</th>
              <th class="text-center">Cantidad</th>
              <th class="text-center">Sub total</th>
              <th>&nbsp;</th>
            </tr>
          </thead>

          <tbody>
            <?php
            //echo $cart->total_items();
            if($cart->total_items() > 0){
              //get cart items from session
              $cartItems = $cart->contents();
              //var_dump($cartItems);
              foreach($cartItems as $item){
                ?>
                <tr>
                  <td><?php echo $item["name"]; ?></td>
                  <td><?php echo '$'.number_format($item["price"],2,'.',',').' '; ?></td>
                  <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>"
                    onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" style="padding-top: 0px;height: 28px;"
                    ></td>
                    <td class="text-right"><?php echo '$'.number_format($item["subtotal"],2,'.',',').' '; ?></td>
                    <td style="width: 20px;">
                      <p class="text-center" style="width: 20px;">
                        <a href="accionCarrito.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" onclick="return confirm('Confirma eliminar?')">
                          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                        </a>
                      </p>
                    </td>
                  </tr>
                <?php } }else{ ?>
                  <tr><td colspan="5"><p>Tu carrito esta vacio.....</p></td>
                  <?php } ?>
                </tbody>

                <tfoot>


                  <tr>
                    <td></td>
                    <td colspan="2"></td>
                    <?php if($cart->total_items() > 0){ ?>
                      <td class="text-center"><strong>Total <?php echo '$'.number_format($cart->total(),2,'.',',').' '; ?></strong></td>
                      <td></td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
                    <td></td>
                    <td></td>
                    <td colspan="2">


                      <a href="<?php echo ($usuario=="")?"login.php?target=ordenPagos":"ordenPagos.php"; ?>" id="btnConfirmarPedido" class="btn btn-success orderBtn" >
                        Confirmar Pedido<i class="glyphicon glyphicon-menu-right"></i>
                      </a>
                    </td>
                  </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.row -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

      </div>

      <!--Footer -->
      <div class="col-md-12 footer-box">


        <div class="row small-box ">
          <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
          <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>
        <div class="row small-box ">
          <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
          <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
        </div>
        <div class="row small-box ">
          <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> |
          <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> |
          <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items

        </div>
        <div class="row small-box pad-botom ">
          <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
          <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
          <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>
        <div class="row">
          <div class="col-md-4">
            <strong>Send a Quick Query </strong>
            <hr>
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Email address">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4">
            <strong>Our Location</strong>
            <hr>
            <p>
              234, New york Street,<br />
              Just Location, USA<br />
              Call: +09-456-567-890<br>
              Email: info@yourdomain.com<br>
            </p>

            2014 www.yourdomain.com | All Right Reserved
          </div>
          <div class="col-md-4 social-box">
            <strong>We are Social </strong>
            <hr>
            <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
            </p>
          </div>
        </div>
        <hr>
      </div>
      <!-- /.col -->
      <div class="col-md-12 end-box ">
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us: info@yourdomain.com
      </div>
      <!-- /.col -->
      <!--Footer end -->
      <!--Core JavaScript file  -->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!--bootstrap JavaScript file  -->
      <script src="assets/js/bootstrap.js"></script>
      <!--Slider JavaScript file  -->
      <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
      <script src="assets/ItemSlider/js/jquery.catslider.js"></script>

      <script>

      function updateCartItem(obj,id){
        console.log('qty: '+obj.value+' id: '+id);
        $.get("accionCarrito.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
          //alert(data)
          if(data == 'ok'){
            location.reload();
          }else{
            alert('Cart update failed, please try again.');
          }
        });
      }

    </script>

  </body>
  </html>
