<?php
session_start();
/* Llamar la Cadena de Conexion*/
include ("../config/conexion.php");

$tables="promociones";
$sWhere=" ";
$sWhere.=" order by promociones.descripcion";


include 'pagination.php'; //include pagination file

//pagination variables
$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
$per_page = intval($_REQUEST['per_page']); //how much records you want to show
$adjacents  = 4; //gap between pages after number of adjacents
$offset = ($page - 1) * $per_page;

//Count the total number of row in your table*/
$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables  $sWhere ");
if ($row= mysqli_fetch_array($count_query))
{
	$numrows = $row['numrows'];
}
else {echo mysqli_error($con);}
$total_pages = ceil($numrows/$per_page);
//$reload = './banner_ajax.php';
//main query to fetch the data

$sql="SELECT * FROM  $tables  $sWhere LIMIT $offset,$per_page";
//die($sql."entroooo");
$query = mysqli_query($con,$sql);

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
							<p><a href="accionCarrito.php?action=addToCart&id=<?php echo $articulo_id; ?>" class="btn btn-success" role="button"><i class="fa fa-shopping-cart fa-lg">&nbsp;</i>Agregar</a> <a href="#" class="btn btn-primary" role="button">Ver Detalle</a></p>
						</div>
					</div>
				</div>
				<?php
			} // END WHILE
			?>

			<div class="row">
				<?php echo paginate($page, $total_pages, $adjacents);?>
			</div>

			<div class="clearfix"></div>
			<br><br>


<?php
	} // END IF
?>
