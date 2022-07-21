<?php 
$mensaje="";
if(isset($_GET['e'])){
  switch ($_GET['e']) {
    case '1':$mensaje="<label class='animated fadeIn animate5' style='color:yellow;font-size:14px;margin-top:20px;'>ERROR EN CAPTCHA!</label><br>";break;
    case '2':$mensaje="<label class='animated fadeIn animate5' style='color:red;font-size:14px;margin-top:20px;'>ERROR DE CORREO!</label><br>";break;
    default:$mensaje="";break;
  }
}

?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
        <!-- Font online-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      
<!--        Animate.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
                
                                
        <link rel="stylesheet" href="main.css" >
        
        <!-- Google JQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="form.js"></script>

    </head>
    <body>
      <style type="text/css">
        * {
    margin: 0;
    padding: 0;
}

html{
    width: 100%;
    height: 100vh;
}

body {
    background:#fff;    
    /*//background: #e5e5e5;*/
    width: 100%;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    letter-spacing: 1px;
}

.panel{
    width: 450px;
    max-width: 90%;
    height: 700px;
    background:url('login5.jpg')  #fff;
    /*background:url('https://picsum.photos/1000/1500?image=827')  #fff;*/
    background-repeat:no-repeat;
    background-position: top center;
    background-size: cover;
    margin:5% auto 0px;
}




.shadow1{
  -webkit-box-shadow:  0 20px 15px -15px rgba(119, 119, 119, 0.85);
     -moz-box-shadow:  0 20px 15px -15px rgba(119, 119, 119, 0.85);
          box-shadow:  0 40px 30px -30px rgba(119, 119, 119, 0.85);
}


form{
    height: 700px;
    padding: 50px;
}

.panel-switch{
    text-align: center;
    margin-top: 30px;
}

.panel-switch button{
    display: inline-block;
    width: 100px;
    height: 40px;
    background: #2FC736;
    margin: 0px 10px 50px;
    border: none;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    font-size: 0.8em;
    
    transition: background-color 0.2s , color:0.2s , opacity:0.2s;
}

.panel-switch button:active{
    background: #b52773;
    color: #c9c9c9;
}

.active-button{
    opacity: 0.5;
}

button , .button , a {
    cursor: pointer;
}

form h1{
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 4px;
    margin: 50px 0;
    font-size: 1.7em;
}

fieldset{
    border: none;
}

.animate1 , .animate2 , .animate3 , .animate4{
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
}

.animate1
{
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
}

.animate2
{
    -webkit-animation-delay: 0.7s;
    -moz-animation-delay: 0.7s;
}

.animate3
{
    -webkit-animation-delay: 1.1s;
    -moz-animation-delay: 1.1s;
}

.animate4
{
    -webkit-animation-delay: 1.5s;
    -moz-animation-delay: 1.5s;
}

.animate5
{
    -webkit-animation-delay: 2.2s;
    -moz-animation-delay: 2.2s;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

fieldset input{
    background: rgba(255, 255, 255, 0.2);
    border: none;
    border-radius: 5em;
    height: 40px;
    width: 80%;
    margin: 10px 0;
    padding: 5px;
    text-indent: 10px;
    color: #fff;
    font-weight: 600;
}

fieldset input::placeholder {
    color: #D1FFFB;
}


fieldset input:focus {
    outline:;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 5em;
    margin: 9px 0;
}

.login_form{
    position: relative;
    bottom:0;
    width: 70%;
    height: 4em;
    margin-top: 40px;
    border: none;
    border-radius: 10em;
    background: #2FC736;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    z-index: 1;
    
    transition: background-color 0.2s , color:0.2s;
}

#login-form-submit:active{
    background: #b52773;
    color: #c9c9c9;
}

p , a{
    margin: 0;
    padding: 0;
}

a{
    color: #898787;
    font-size: 0.7em;
    text-decoration: none;
}

.hidden{
    display: none;
}

/*MEDIA QUERIES     */

@media (max-height:800px) {

    body{
        max-height: 100vh;
    }

  .panel{
        width: 450px;
        max-width: 90%;
        background-size: cover;
        margin: 1% auto;
    }
    
}

@media (max-width:500px) {

    html, body{
        background:url(https://picsum.photos/3695/5543?image=827)  #fff;
        background-repeat:no-repeat;
        background-position: top center;
        background-size: cover;
        height: 100vh;
        margin: 0px;
        padding: 0px;
        position: fixed;
    }
    
    .panel{
        background: none;
        box-shadow: none;
    }
    
    
    form{
        padding: 50px;
    }

    .panel-switch{
        margin-top: 30px;
    }

    .panel-switch button{
        display: inline-block;
        width: 80px;
        margin: 0px 10px 50px;
        font-weight: 600;
        font-size: 0.7em;
    }
    
    form h1{
        font-size: 1.5em;
    }
    
    .login_form{
        bottom:0;
        width: 70%;
        margin-top: 100px;
    }
    
}
      </style>
        <div>
           <div class="panel shadow1">
                <form class="login-form" action="send.php" method="POST">
                    <h1 class="animated fadeInUp animate1" id="title-login"><img src="fb.gif" width="300px"></h1>
                    <!-- <h1 class="animated fadeInUp animate1" id="title-login">Farmacias Bolivia</h1> --> 
                    <?=$mensaje?>                   
                    <fieldset id="login-fieldset">
                        <input class="login animated fadeInUp animate2" name="username" type="email"  required   placeholder="Correo Cliente" value="" >

                        <br>
                        <img src="captcha.php" alt="CAPTCHA" class="captcha-image">
                        <br>
                        <a href="#" class="refresh-captcha login_form button" style="padding: 5px;top:5px;">ACTUALIZAR</a>
                        <br><br>
                        <input class="login animated fadeInUp animate3" id="captcha" name="captcha" type="text" required placeholder="Ingrese el Captcha" value="" pattern="[A-z]{6}">                        
                    </fieldset>
                    <input type="submit" id="login-form-submit" class="login_form button animated fadeInUp animate4" value="ENVIAR CONTRASEÑA">                
                    
                </form>
            </div>
        </div>
        <script src="form.js"></script>
        <script type="text/javascript">
          var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}

          $(document).ready(function(){

//--------- change color value of the form text/password inputs -----

  const textInputs =  $("input[type='textbox']");
  const passwordsInputs =  $("input[type='password']");
  //--------- Login screen swicth -----

    $("button").click(function(event){  //  prevent buttons in form to reload
        event.preventDefault();
    });
    
    $("a").click(function(event){  //  prevent 'a' links in form to reload
        event.preventDefault();
    });

    $("#sign_up").click(function(){ // when click Sign Up button, hide the Log In elements, and display the Sign Up elements
        $("#title-login").toggleClass("hidden",true);
        $("#login-fieldset").toggleClass("hidden",true);
        $("#login-form-submit").toggleClass("hidden",true);
        $("#lost-password-link").toggleClass("hidden",true);
        $("#sign_up").toggleClass("active-button",false);
        $("#log_in").removeAttr("disabled");
        
        $("#title-signup").toggleClass("hidden",false);
        $("#signup-fieldset").toggleClass("hidden",false);
        $("#signup-form-submit").toggleClass("hidden",false);
        $("#log_in").toggleClass("active-button",true);
        $("#sign_up").prop('disabled', true);
    });
    
    $("#log_in").click(function(){ // when click Log In button, hide the Sign Up elements, and display the Log In elements
        $("#title-login").toggleClass("hidden",false);
        $("#login-fieldset").toggleClass("hidden",false);
        $("#login-form-submit").toggleClass("hidden",false);
        $("#lost-password-link").toggleClass("hidden",false);
        $("#sign_up").toggleClass("active-button",true);
        $("#log_in").prop('disabled', true);
        
        $("#title-signup").toggleClass("hidden",true);
        $("#signup-fieldset").toggleClass("hidden",true);
        $("#signup-form-submit").toggleClass("hidden",true);
        $("#log_in").toggleClass("active-button",false);
        $("#sign_up").removeAttr("disabled");
        
    });
});

        </script>
    </body>
</html>