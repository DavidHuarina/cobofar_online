<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/FarmaciasBolivia/" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                YouTube
                            </a>
                        </li>
                        <li>
                            <a href="http://www.farmaciasbolivia.com.bo" target="_blank">
                                Web
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.farmaciasbolivia.com.bo" target="_blank">Corporación Boliviana de Farmacias</a>
                </p>
            </div>
        </footer>


    </div>
</div>


        <!-- small modal -->
<div class="modal" tabindex="-1" id="modalDescargar" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_descargar">Descargar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Su documento está listo.</p>
        <input type="hidden" id="url_modal">
         <div class="row">
           <div class="col-sm-12">
              <center>
                 <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><br><br>
                 <a href="#" class="refresh-captcha btn btn-primary btn-sm" style="padding: 5px;top:5px;">ACTUALIZAR</a>
              </center>                                             
              <div class="form-group">
                 <label>Ingrese el Captcha</label>
                 <input id="captcha_modal" class="form-control" type="text" required value="" pattern="[A-z]{6}">
             </div>                                 
           </div>                                       
        </div>
      </div>
      <div class="modal-footer">
        <label id="mensaje_error_modal"></label>
        <button type="button" id="boton_descargar" class="btn btn-primary" onclick="descargarDocumentoSuccess();return false;">Descargar</button>
      </div>
    </div>
  </div>
</div>
<!--    end small modal -->


        <!-- small modal -->
<div class="modal" tabindex="-1" id="modalSearch" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #07CDC4;color:white;">
        <h5 class="modal-title">Buscar Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Encuentre su factura</p> 
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nro. Factura</label>
                    <input type="number" id="nro_factura_modal" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Del</label>
                    <input type="date" id="del_fecha_modal" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Al</label>
                    <input type="date" id="al_fecha_modal" class="form-control">
                </div>
            </div>
        </div>       
         <div class="row">
           <div class="col-sm-12">
              <center>
                 <img src="captcha.php" alt="CAPTCHA" class="captcha-image2"><br><br>
                 <a href="#" class="refresh-captcha2 btn btn-primary btn-sm" style="padding: 5px;top:5px;">ACTUALIZAR</a>
              </center>                                             
              <div class="form-group">
                 <label>Ingrese el Captcha</label>
                 <input id="captcha_modal_buscar" class="form-control" type="text" required value="" pattern="[A-z]{6}">
             </div>                                 
           </div>                                       
        </div>
      </div>
      <div class="modal-footer">
        <label id="mensaje_error_modal_buscar"></label>
        <button type="button" class="btn btn-success" onclick="buscarFacturaClienteForm();return false;">Buscar</button>
      </div>
    </div>
  </div>
</div>
<!--    end small modal -->

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>
  <script type="text/javascript">
      var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}
var refreshButton = document.querySelector(".refresh-captcha2");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image2").src = 'captcha.php?' + Date.now();
}
  </script>


</html>
