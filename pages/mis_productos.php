<?php 
require "db.inc";
$sqlUpdate="UPDATE visitas SET nro_visitas=nro_visitas+1 where id_pagina=2";      
mysqli_query($enlaceCon,$sqlUpdate);
$sql="select nro_visitas from visitas where id_pagina=2";      
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
                                <h4 class="title">Productos Adquiridos</h4>
                                <p class="category">Listado de Productos</p>
                                <p class="category"><i class="fa fa-eye"></i> <?=$visitas?></p>
                                <div id="mensaje_error_global"></div>
                            </div>
                            <div class=" content row">                              
                                 <div class="card-group" id="productos_mas_vendidos">                                   
                                 </div>
                            </div>
                            <div class="content table-responsive table-full-width">                              
                                <table class="table table-hover table-striped">                                    
                                       <thead>
                                          <tr>
                                             <th>#</th>                                             
                                             <th>Producto</th>
                                             <th>Proveedor</th>
                                             <th>Cantidad</th>                                             
                                             <th>Opcion</th>
                                          </tr>
                                       </thead>
                                       <tbody id="datos_tabla">
                                          <?php
                                          require "funciones.php";
                                          $datos=obtenerProductosComprados();
                                          //print_r($datos);
                                          $index=1;$htmlTresMas='';
                                          if(isset($datos->estado)&&$datos->estado==1){
                                             foreach ($datos->lista as $li) {
                                                $codMaterial=$li->codigo_material;
                                                $nombreMaterial=$li->descripcion_material;
                                                $nombreProveedor=$li->nombre_proveedor;
                                                $cp=$li->cantidad_presentacion;
                                                $cantidadCompra=$li->compra_cantidad;
                                                $cantidadCompraCaja=$li->compra_cantidad_caja;                                                
                                                $estiloFila="";
                                                $htmlBoton="";
                                                if($index==1){
                                                   $estiloFila="color:white;background:#3498DB;";
                                                   $nombreMaterial.=" (PRODUCTO MÁS COMPRADO)";
                                                }
                                              ?>
                                            <tr style="<?=$estiloFila?>">
                                             <td><?=$index?></td>
                                             <td><?=$nombreMaterial?></td>
                                             <td><?=$nombreProveedor?></td>
                                             <td><?=number_format($cantidadCompra,0,'.',',')?></td>
                                             <td style="background: white !important;"><?=$htmlBoton?></td>                                             
                                          </tr><?php

                                          if($index<=3){
                                             $htmlTresMas.='<div class="card col-sm-4">'.
                                                                '<center><img class="card-img-top" width="100" src="assets/img/farma.png" alt="Producto"></center>'.
                                                                '<div class="card-body">'.
                                                                  '<h5 class="card-title" style="font-size:16px;color:#898989">'.$nombreMaterial.'</h5>'.
                                                                  '<center><p class="card-text btn btn-primary" style="font-size:45px">'.number_format($cantidadCompra,0,'.',',').' u.</p></center>'.
                                                                '</div>'.
                                                                '<div class="card-footer">'.
                                                                  '<small class="text-muted">'.$nombreProveedor.'</small>'.
                                                                '</div>'.
                                                              '</div>';
                                          }
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
                    <script type="text/javascript">document.getElementById('productos_mas_vendidos').innerHTML='<?=$htmlTresMas?>';</script>
<?php