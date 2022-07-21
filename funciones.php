<?php 
function obtenerTokenAleatorio(){        
    $fech=explode("-",date("Y-m-d-H-i-s"));
    $code="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $uno=$fech[2]+$fech[3]+$fech[4]."";
    $mod=number_format(strlen($code)%$fech[0]+$fech[1],0,'','');
    return base64_encode($fech[5].$fech[3].$code[$uno[0]].$fech[2].$code[$uno[strlen($uno)-1]].$mod);
}
function obtenerUltimasFacturas(){
    require "ws_conexion.php";
    $cliente=$_COOKIE['global_cliente_id'];
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"listadoFacturasCliente","cliente"=>$cliente);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_obtener_factura.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}

function obtenerXmlPdfFactura($codVenta,$ciudad){
    require "ws_conexion.php";
    $cliente=$_COOKIE['global_cliente_id'];
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"obtenerFacturaXmlPdf","codVenta"=>$codVenta,"sucursal"=>$ciudad);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_obtener_factura.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}

function loginClienteDatos($user,$clave){
    require "ws_conexion.php";    
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"login","usuario"=>$user,"clave"=>$clave);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_cliente.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}

function updateContraNueva($cliente,$contra){
    require "ws_conexion.php";    
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"update","cliente"=>$cliente,"clave"=>$contra);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_cliente.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);  
}


function obtenerFacturasBusqueda($nro,$del,$al){
    require "ws_conexion.php";
    $cliente=$_COOKIE['global_cliente_id'];
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"listadoFacturasClienteBuscar","cliente"=>$cliente,"nro"=>$nro,"del"=>$del,"al"=>$al);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_obtener_factura.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}

function loginClienteDatosRecuperar($user,$clave){
    require "ws_conexion.php";    
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"login","usuario"=>$user,"clave"=>$clave);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_cliente.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}


function obtenerProductosComprados(){
    require "ws_conexion.php";
    $cliente=$_COOKIE['global_cliente_id'];
    $direccion=$urlLine;    
    $sIde = "farma_online";
    $sKey = "RmFyYl9pdF8wczIwMjI=";
    //PARAMETROS PARA LA OBTENCION DEL SERVICIO
    $parametros=array("sIdentificador"=>$sIde,"sToken"=>obtenerTokenAleatorio(), "sKey"=>$sKey, "accion"=>"listadoProductosFacturasCliente","cliente"=>$cliente);
    $parametros=json_encode($parametros);
    // abrimos la sesión cURL
    $ch = curl_init();
    // definimos la URL a la que hacemos la petición
    curl_setopt($ch, CURLOPT_URL,$direccion."ws_productos_cliente.php"); 
    // indicamos el tipo de petición: POST
    curl_setopt($ch, CURLOPT_POST, TRUE);
    // definimos cada uno de los parámetros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    // recibimos la respuesta y la guardamos en una variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    // cerramos la sesión cURL
    curl_close ($ch);
    return json_decode($remote_server_output);
}