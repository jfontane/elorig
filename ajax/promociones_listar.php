<?php
session_start();
/* Llamar la Cadena de Conexion*/
include ("../config/conexion.php");

$tables="promociones";
$sWhere=" ";
$sWhere.=" order by promociones.descripcion";


$sql="SELECT * FROM  $tables  $sWhere  LIMIT 0,3";

$query = mysqli_query($con,$sql);

$numrows=mysqli_num_rows($query);

	//loop through fetched data
	if ($numrows>0)	{
			$cant=0;
			while($row = mysqli_fetch_array($query)){
                $cant++;
				$id=$row['id'];
				if ($row['url_image']=="demo.png") {
					$url_image="demo_thumb.png";
				} else {
				$imgUrl=explode(".",$row['url_image']);
				$imagen_nombre=$imgUrl[0];
				$imagen_extension=$imgUrl[1];
				$thumbnail=$imagen_nombre.'_thumb.'.$imagen_extension;
				$url_image=$thumbnail;
				};

				$titulo=$row['titulo'];
				$id_slide=$row['id'];
				$descripcion=$row['descripcion'];
				$articulo_id=$row['articulo_id'];
				$prod_precio_regular=$row['precio']*1.65;
				$prod_precio_oferta=$row['precio']*$row['porcentajeRecargo'];
				$prod_titulo_patron=$titulo;
				$prod_descripcion_patron=$descripcion;

				?>
				<div class="col-md-4 text-center col-sm-6 col-xs-6">
					<div class="thumbnail product-box">
						<img src="img/banner/<?php echo $url_image;?>" alt="" />
						<div class="caption">
							<h3><a href="#"><?php echo $prod_titulo_patron; ?></a></h3>
							<p>Price : <strong><?php echo "<font color=red><b>$ ".number_format($prod_precio_oferta,2,',','.')."</b></font>"; ?></strong>  </p>
							<p><a href="#">Optional dismiss button </a></p>
							<p>Ptional dismiss button in tional dismiss button in   </p>
							<p><a href="accionCarrito.php?action=addToCart&id=<?php echo $articulo_id; ?>" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
						</div>
					</div>
				</div>
				<?php
			} // END WHILE
	} // END IF
?>
