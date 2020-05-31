<?php
session_start();
/* Llamar la Cadena de Conexion*/
include ("../php/conexion.php");
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
$query=(isset($_REQUEST['query'])&& $_REQUEST['query'] !=NULL)?$_REQUEST['query']:'';
if($action == 'ajax'){
	//Elimino producto
	if (isset($_REQUEST['id'])){
		$id_banner=intval($_REQUEST['id']);
		if ($delete=mysqli_query($con,"delete from promociones where id='$id_banner'")){
			$message= "Datos eliminados satisfactoriamente";
		} else {
			$error= "No se pudo eliminar los datos";
		}
	}

	$tables="promociones";
	$sWhere=" where promociones.descripcion LIKE '%".$query."%' or promociones.titulo LIKE '%".$query."%'";
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
	     $cadena=strtoupper($_REQUEST['query']);
		?>
		<div class="row">
			<?php
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
			    if ($cadena!="" && strlen($cadena)>1) {
						$prod_titulo_patron=str_replace($cadena, "<span title class='highlight'>".$cadena."</span>", strtoupper($titulo));
						$prod_descripcion_patron=str_replace($cadena, "<span title class='highlight'>".$cadena."</span>", strtoupper($descripcion));
				}
				
				
				?>


				<div class="col" style="top: 20px;margin-top: 20px;">

					<div class="card border border-primary" style="width: 18rem;">
							<img class="img-thumbnail" src="img/banner/<?php echo $url_image;?>" alt="Another alt text">
					  <div class="card-body">
					    <p class="box"><small><?php echo $prod_titulo_patron; ?></small></p>
							<p><?php echo "<font color=red><b>$ ".number_format($prod_precio_oferta,2,',','.')."</b></font>"; ?></p>
							<p class="tachado"><small><?php echo "$ ".number_format($prod_precio_regular,2,',','.'); ?></small></p>
					    <p><small>
					        <a href="detalle.php?idArticulo=<?=$articulo_id?>">
					            Ver Detalle
					        </a></small></p>
					    <a href="accionCarrito.php?action=addToCart&id=<?php echo $articulo_id; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;Agregar</a>
					  </div>
					</div>

				</div>
				<div class="clearfix"></div>

				<?php
			}
			?>
		</div> <!-- END ROW-->
        <div class="clearfix"></div>
        <br><br>
		<div class="pagination">
			<?php echo paginate($page, $total_pages, $adjacents);?>
		</div>
		<?php
	}
}
?>
