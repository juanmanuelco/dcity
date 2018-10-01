<!DOCTYPE html>
<html lang="en">

<head>
   <title>D-CITY</title>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">
   <link rel="stylesheet" href="../css/bootstraps.css">

</head>

<body>
   <nav class="navbar fixed-top navbar-expand-lg nav-negro tope" id="nav-menu">
      <h3 id="logo"><a class="navbar-brand" href="#"></a></h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
         <div id="navigation">
            <ul class="navbar-nav mr-auto ">
               <li class="nav-item"><a href="#">LOGIN</a></li>
               <li class="nav-item"><a href="#">REGISTRO</a></li>
               <li class="nav-item"><a href="#">CONTACTO</a></li>
               <li class="nav-item last"><a href="#">ACERCA DE</a></li>
            </ul>
         </div>
      </div>
   </nav>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="../css/images/slide1.jpg" alt="First slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
   <nav class="nav-negro tope">
      <div id="navigation2">
         <ul class="nav justify-content-end">
            <li class="nav-item "><a href="#" class="item-activo">ALEATORIO</a></li>
            <li class="nav-item"><a href="#">POPULAR</a></li>
            <li class="nav-item"><a href="#">ALFABÉTICO</a></li>
            <li class="nav-item"><a href="#">CERCANO</a></li>
         </ul>
      </div>
   </nav>


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
   <script>
      window.addEventListener('load', () => {
         var tamano = $('#nav-menu').height()
         document.getElementById('carouselExampleIndicators').style.marginTop = tamano + "px";
      })
   </script>
</body>

</html>