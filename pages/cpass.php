<?php 
   $mensaje="";
   if(isset($_GET['e'])){
      switch ($_GET['e']) {
         case 1: $mensaje="Las contraseñas no coinciden!"; break;         
         case 2: $mensaje="Ocurrio un error al modificar los datos!"; break; 
         case 0: $mensaje="Error en Captcha!"; break;         
      }
   }
?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar Perfil</h4>
                            </div>
                            <div class="content">
                                <form action="cc.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nueva Contraseña</label>
                                                <input type="text" class="form-control" name="contra" placeholder="" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Repetir Contraseña</label>
                                                <input type="text" class="form-control" name="contra2" placeholder="" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <center>
                                             <img src="" alt="CAPTCHA" class="captcha-image"><br><br>
                                             <a href="#" class="refresh-captcha btn btn-danger btn-sm" style="padding: 5px;top:5px;">ACTUALIZAR</a>
                                          </center>                                             
                                          <div class="form-group">
                                             <label>Ingrese el Captcha</label>
                                             <input id="captcha" class="form-control" name="captcha" type="text" required value="" pattern="[A-z]{6}">
                                         </div>                                 
                                       </div>                                       
                                    </div>


                                    <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
                                    <div class="clearfix"></div>
                                    <p class="text-muted"><?=$mensaje?></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            // $(document).ready(function(){
            //     document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
            // });          
        </script>