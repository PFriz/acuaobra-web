

<!DOCTYPE html>
<html>
<head>
	<title>AcuaObra</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/full-slider.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/fluid-gallery.css">

	<link href="css/acua.css" rel="stylesheet"/>
	
</head>
<body class="bg-primary">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 60px">
	    <div class="container">

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: auto;margin-right: auto;">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarResponsive">
	        <ul class="nav navbar-nav navbar-center">
	          <li class="nav-item active">
	            <a class="nav-link" href="/">
	              <i class="far fa-arrow-alt-circle-left"></i>
	                Volver a AcuaObras
	              <span class="sr-only">(current)</span>
	            </a>
	          </li>

	        </ul>
	      </div>
	      <div class="logo-div" STYLE="position:absolute; top:75px; left:0px; visibility:visible "> 
	        <IMG class="logo-img" SRC="img/acuarobra.png" width="350"/> 
	      </div>
	      <div class="logo-div" STYLE="position:absolute; top:75px; right:0px; visibility:visible "> 
	        <IMG class="logo-img" SRC="img/acuarubber.png" width="350"/> 
	      </div> 
	    </div>
	  </nav>
	<header>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-10" style="margin-left: auto;margin-right: auto;">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>


<?php

if(isset($_POST['email'])) {

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['asunto']) ||
!isset($_POST['detalle'])) {

echo "<div class='alert alert-danger' role='alert'>";
echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
echo "</div>";

die();
}



$email_to = "contacto@Acuaobra.cl";
$email_subject = "Contacto desde Acuaobra";
$email_from = "contacto@Acuaobra.cl";

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Correo: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
$email_message .= "Detalle: " . $_POST['detalle'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

//enviar correo a remitente

$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($_POST['email'], $email_subject, $email_message, $headers);

echo "<div class='alert alert-success' role='alert'>";
echo "  Correo enviado exitosamente, se enviará una copia a su correo como respaldo.";
echo "</div>";

}
?>



			</div>
		</div>
	</div>

	


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/autoscroll.js"></script>


<script type="text/javascript">
  // var height1 = document.getElementById('mov-tie-1').offsetHeight;
  // var div2 = document.getElementById('mov-tie-2').offsetHeight;
  // alert("el valor de div2"+div2);
  // div2.setAttributes(height, div2);

if($(window).width()<500)
          {
            jQuery('.logo-img')
                .css({'width':'200px', 'height':'100px'});

            
          }


  jQuery(function(){
    jQuery(window).scroll(function(){
        if(jQuery(this).scrollTop() > 200) {
            jQuery('.logo-img')
                .css({'width':'120px','height':'60px'})
                //class="logo-div"
                jQuery('.logo-div')
                .css({'top':'0px'})
        }
        if(jQuery(this).scrollTop() < 200) {
          if($(window).width()<500)
          {

            jQuery('.logo-img')
                .css({'width':'200px', 'height':'100px', 
                  'top':'0px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'
                  });   
                //class="logo-div"
            jQuery('.logo-div')
                .css({'top':'75px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'});

          }
          else{

            jQuery('.logo-img')
                .css({'width':'350px', 'height':'170px', 
                  'top':'0px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'
                  });   
                //class="logo-div"
            jQuery('.logo-div')
                .css({'top':'75px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'});

          }
        }
    });
  }
);
</script>
</body>
</html>
