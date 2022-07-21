<?php
if($_COOKIE['nuevo']==1){
    include "cpass.php";
}else{
   ?>
   <script type="text/javascript">
      function descargarDocumento(codVenta,ciudad,cuf,tipo){ 
         document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();        
         $("#captcha_modal").val("");
         $("#mensaje_error_modal").html("");
         $("#mensaje_error_global").html("");
         $("#modalDescargar").modal("show");
         if(tipo==1){
            $("#boton_descargar").attr("class","btn btn-success");
            $("#boton_descargar").html("Descargar Documento XML");
            $("#title_descargar").html("Descargar XML");
            var url="descargarFacturaXml.php?codVenta="+codVenta+"&ciudad="+ciudad+"&cuf="+cuf;
         }else{
            $("#boton_descargar").attr("class","btn btn-danger");
            $("#boton_descargar").html("Descargar Documento PDF");
            $("#title_descargar").html("Descargar PDF");
            var url="descargarFacturaPDF.php?codVenta="+codVenta+"&ciudad="+ciudad+"&cuf="+cuf;   
         }
         $("#url_modal").val(url);

      }
      function descargarDocumentoSuccess(){
         var captcha=$("#captcha_modal").val();
         if(captcha.length!=6){
            $("#mensaje_error_modal").html("El captcha debe tener 6 digitos!");
         }else{
            window.open($("#url_modal").val()+"&cp="+captcha);  
            $("#modalDescargar").modal("hide");               
         }
      }
      
      function buscarFacturaCliente(){         
         document.querySelector(".captcha-image2").src = 'captcha.php?' + Date.now();
         $("#captcha_modal_buscar").val("");
         $("#modalSearch").modal("show");   
      }
      function buscarFacturaClienteForm(){
         var nro_factura_modal=$("#nro_factura_modal").val();
         var del_fecha_modal=$("#del_fecha_modal").val();
         var al_fecha_modal=$("#al_fecha_modal").val();
         var cp=$("#captcha_modal_buscar").val();
         if(cp.length!=6){
           $("#mensaje_error_modal_buscar").html("El captcha debe tener 6 digitos!");    
         }else{
            if(nro_factura_modal==""&&del_fecha_modal==""&&al_fecha_modal==""){
                 $("#mensaje_error_modal_buscar").html("Debe ingresar un parametro de búsqueda!");
            }else{            
                 var parametros={"nro_factura_modal":nro_factura_modal,"del_fecha_modal":del_fecha_modal,"al_fecha_modal":al_fecha_modal,"cp":cp};
                 $.ajax({
                    type: "GET",
                    dataType: 'html',
                    url: "pages/ajaxBuscarFacturaCliente.php",
                    data: parametros,
                    success:  function (resp) {  
                       var r=resp.split("#####");                                                                               
                       if(r[1]==1){
                           $("#datos_tabla").html(r[0]);
                           $("#modalSearch").modal("hide"); 
                       }else{
                           $("#mensaje_error_modal_buscar").html("El captcha es incorrecto!");         
                       }                                      
                    }
                  });
            }
         }
      }
   </script>
<?php 
require "db.inc";
$sqlUpdate="UPDATE visitas SET nro_visitas=nro_visitas+1 where id_pagina=1";      
mysqli_query($enlaceCon,$sqlUpdate);
$sql="select nro_visitas from visitas where id_pagina=1";      
$resp=mysqli_query($enlaceCon,$sql);
$visitas=mysqli_result($resp,0,0);
if($visitas>1000&&$visitas<10000){
   $visitas=number_format(($visitas/1000),1,'.','')."K";
}
if($visitas>1000000){
   $visitas=number_format(($visitas/1000000),1,'.','')."M";
}
?>

   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mis Facturas - Farmacias Bolivia (Documentos Electrónicos)</h4>
                                <p class="category">Últimas 15 Facturas</p>
                                <p class="category"><i class="fa fa-eye"></i> <?=$visitas?></p>
                                <div id="mensaje_error_global"></div>
                            </div>
                            <div class="row">
                               <a href="#" onclick="buscarFacturaCliente(); return false;" class="btn btn-info" style="position: absolute;right: 25px;"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="content table-responsive table-full-width">                              
                                <table class="table table-hover table-striped">                                    
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>N° Factura</th>
                                             <th>Modalidad</th>
                                             <th>Nombre/Razón Social</th>
                                             <th>Monto</th>
                                             <th>Fecha Emisión</th>
                                             <th>Sucursal</th>
                                             <th>Opcion</th>
                                          </tr>
                                       </thead>
                                       <tbody id="datos_tabla">
                                          <?php
                                          require "funciones.php";
                                          $datos=obtenerUltimasFacturas();
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
                                                $tituloEmision="<span style='background:green;color:#fff;padding:5px;font-size:11px'>ONLINE</span>";
                                                if($li->siat_codigotipoemision==2){
                                                   $tituloEmision="<span style='background:yellow;color:#000;padding:5px;font-size:11px'>OFFLINE</span>";
                                                }
                                                $codVenta=$li->cod_salida_almacenes;
                                                $ciudad=$li->cod_ciudad;
                                                $cuf=$li->siat_cuf;
                                                $htmlBoton='<a onclick="descargarDocumento('.$codVenta.','.$ciudad.',\''.$cuf.'\',1);return false;" href="#" class="btn btn-success"><i class="fa fa-download"></i> XML</a><a onclick="descargarDocumento('.$codVenta.','.$ciudad.',\''.$cuf.'\',2);return false;" href="#" class="btn btn-danger"><i class="fa fa-download"></i> PDF</a>';
                                                if($index==1){
                                                   $estiloFila="color:white;background:#87CB16;";
                                                   $li->razon_social.=" (ÚLTIMA FACTURA)";
                                                }
                                              ?>
                                            <tr style="<?=$estiloFila?>">
                                             <td><?=$inicioAnulada?><?=$index?><?=$finAnulada?></td>                                             
                                             <td><?=$inicioAnulada?>F-<?=$li->nro_correlativo?><?=$finAnulada?></td>
                                             <td><?=$inicioAnulada?><?=$tituloEmision?><?=$finAnulada?></td>
                                             <td><?=$inicioAnulada?><?=$li->razon_social?><?=$finAnulada?></td>
                                             <td style="text-align: right;"><b><?=$inicioAnulada?><?=number_format($li->monto_final,2,'.',',')?><?=$finAnulada?> Bs</b></td>
                                             <td><?=$inicioAnulada?><?=date("d/m/Y H:m:s",strtotime($li->siat_fechaemision))?><?=$finAnulada?></td>
                                             <td><?=$inicioAnulada?><?=$li->descripcion?><?=$finAnulada?></td>
                                             <td style="background: white !important;"><?=$inicioAnulada?><?=$htmlBoton?><?=$finAnulada?></td>                                             
                                          </tr><?php
                                          $index++;                                                
                                             }
                                          }?>                                          
                                       </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div> 



     
   <?php
}
?>


               