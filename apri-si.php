
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
<body>
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
	                VOLVER A LA PAGINA PRINCIPAL
	              <span class="sr-only">(current)</span>
	            </a>
	          </li>

	        </ul>
	      </div>
	      <div class="logo-div logotipos izq mt-5" STYLE="left:40px;"> 
        <IMG class="logo-img" SRC="img/acuarobra.png" width="350"/> 
      </div>
      <div class="logo-div logotipos der mt-5" STYLE="right:50px;"> 
        <IMG class="logo-img" SRC="img/acuarubber.png" width="350"/> 
      </div> 
	    </div>
	  </nav>


    <header>
      
    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	          
	          <div class="carousel-item active" style="background-image: url('img/cinemagraph/acuaobra-04.gif')">
	            <div class="carousel-caption d-none d-md-block">
	              <a href="#galeria" class="text-white">
	                <h1 class="text-uppercase">VER GALERIA DE FOTOS</h1>
	                
	              </a>
	            </div>
	          </div>

	        </div>
	        
	      </div>


    </header>

    <section class="bg-primary" id="galeria">
      <h3 class="text-uppercase text-center text-white">SISTEMA DE AGUA POTABLE INDIVIDUAL “APRI”</h3>
      <h4 class="page-description text-center text-uppercase">MODELO: ACUAUTOPRESS</h4>

      <p class="text-center">Junta de vecinos Nº 27 sector Paso Las Huertas<br/>
        Ilustre municipalidad de San Ignacio.
        </p>
    
      <div class="tz-gallery">
        <div class="row">


<?php

    $folder_path = 'img/APRI/'; //image's folder path

    $dirint = dir($folder_path);

	$list=array();
    while (($archivo = $dirint->read()) !== false)
    {
    	
        if ( strpos($archivo, 'jpeg') !== false){

        	//echo $folder_path."".$archivo."<br>";

            $list[]=$folder_path."".$archivo;

        }
        
    }
    
    $dirint->close();

    sort($list);

    foreach($list as $fileName)
    {
        

?>

			<div class="col-sm-12 col-md-4">
                
<?php 
			echo "<a class='lightbox' href='$fileName'>";
			echo "<img src='$fileName' alt=''/>"

?>
                    

                </a>
            </div>

<?php

    }

?>
          
          

        </div>
      </div>
      <div class="container">
        

      </div>
    </section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/autoscroll.js"></script>


<script type="text/javascript">
  // var height1 = document.getElementById('mov-tie-1').offsetHeight;
  // var div2 = document.getElementById('mov-tie-2').offsetHeight;
  // alert("el valor de div2"+div2);
  // div2.setAttributes(height, div2);

jQuery('.postula')
.css({'height':'75px'});

if($(window).width()<500)
          {
            jQuery('.logo-img')
                .css({'width':'200px', 'height':'100px'});

            
          }


  jQuery(function(){
    jQuery(window).scroll(function(){
        if(jQuery(this).scrollTop() > 100) {
            jQuery('.logo-img')
                .css({'width':'120px','height':'60px'})
                
                //class="logo-div"
                jQuery('.logo-div')
                .css({'top':'0px'});
                jQuery('.der')
                .css({'right':'200px'})
                .removeClass( "mt-5" );
                jQuery('.izq')
                .css({'left':'200px'})
                .removeClass( "mt-5" );
                

        }
        if(jQuery(this).scrollTop() < 100) {
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
                  })
                ;   
                //class="logo-div"
            jQuery('.logo-div')
                .css({'top':'75px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'});
            jQuery('.der')
                .css({'right':'0px'}); 
            jQuery('.izq')
                .css({'left':'0px'});
                

          }
          else{
            //pantalla myor a 500
            if($(window).width()>2000){
               jQuery('.logo-img')
                .css({'width':'350px', 'height':'170px', 
                  'top':'0px',                  
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'
                  })
                ;   
                //class="logo-div"
            jQuery('.logo-div')
                .css({'top':'400px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'});

                jQuery('.der')
                .css({'right':'50px'})
                .addClass("mt-5"); 
                jQuery('.izq')
                .css({'left':'40px'})
                .addClass("mt-5");

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
                  })
                ;   
                //class="logo-div"
            jQuery('.logo-div')
                .css({'top':'240px',
                  '-webkit-transition':'all 0.5s ease',
                  '-moz-transition':'all 0.5s ease',
                  '-ms-transition':'all 0.5s ease',
                  '-o-transition':'all 0.5s ease',
                  'transition':'all 0.5s ease'});

                jQuery('.der')
                .css({'right':'50px'})
                .addClass("mt-5"); 
                jQuery('.izq')
                .css({'left':'40px'})
                .addClass("mt-5");
            }
           
          }
        }
    });
  }
);
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>