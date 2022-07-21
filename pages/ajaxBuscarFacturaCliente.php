<?php 
session_start();
if(isset($_SESSION["captcha_text"])&&$_SESSION["captcha_text"]==strtoupper($_GET['cp'])){


	require "../funciones.php";
	$nro_factura_modal = $_GET["nro_factura_modal"];
	$del_fecha_modal = $_GET["del_fecha_modal"];
	$al_fecha_modal = $_GET["al_fecha_modal"];


	  $datos=obtenerFacturasBusqueda($nro_factura_modal,$del_fecha_modal,$al_fecha_modal);
	  //print_r($datos);
	  $index=1;
	  if(isset($datos->estado)&&$datos->estado==1){
	     foreach ($datos->lista as $li) {
	        $estiloFila="";
	        $inicioAnulada="";
	        $finAnulada="";
	        if($li->salida_anulada==1){
	           $estiloFila="color:red;";
	           $inicioAnulada="<strike>";
	           $finAnulada="</strike>";
	        }
	        $codVenta=$li->cod_salida_almacenes;
	        $ciudad=$li->cod_ciudad;
	        $cuf=$li->siat_cuf;
	        $htmlBoton='<a onclick="descargarDocumento('.$codVenta.','.$ciudad.',\''.$cuf.'\',1);return false;" href="#" class="btn btn-success"><i class="fa fa-download"></i> XML</a><a onclick="descargarDocumento('.$codVenta.','.$ciudad.',\''.$cuf.'\',2);return false;" href="#" class="btn btn-danger"><i class="fa fa-download"></i> PDF</a>';
	        if($index==1){
	           // $estiloFila="color:white;background:#87CB16;";
	           // $li->razon_social.=" (ÚLTIMA FACTURA)";
	        }
	      ?>
	    <tr style="<?=$estiloFila?>">
	     <td><?=$inicioAnulada?><?=$index?><?=$finAnulada?></td>
	     <td><?=$inicioAnulada?>F-<?=$li->nro_correlativo?><?=$finAnulada?></td>
	     <td><?=$inicioAnulada?><?=$li->razon_social?><?=$finAnulada?></td>
	     <td><?=$inicioAnulada?><?=number_format($li->monto_final,2,'.',',')?><?=$finAnulada?></td>
	     <td><?=$inicioAnulada?><?=date("d/m/Y H:m:s",strtotime($li->siat_fechaemision))?><?=$finAnulada?></td>
	     <td><?=$inicioAnulada?><?=$li->descripcion?><?=$finAnulada?></td>
	     <td style="background: white !important;"><?=$inicioAnulada?><?=$htmlBoton?><?=$finAnulada?></td>                                             
	  </tr><?php
	  $index++;                                                
	     }
	  }
	  echo "#####1";
}else{	
	echo "#####0";
}
