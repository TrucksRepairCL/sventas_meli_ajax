<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sisventas</title>    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--
    <link rel="stylesheet" href="../lib/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/css/bootstrap.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/themes/default.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../lib/alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="../com/funcionesAlmacen.js"></script>


  </head>
  <body>

<div id="navbar"></div>    
    
<div class="col-lg-8 mx-auto py-md-5">
  <header>
      <div id="categorias"></div>
    <hr>    
  </header>


  <main>
      <div class="row">
          <div id="tabla"></div>
          <div id="modal"></div>
      </div>
  </main>



</div>

  <footer class="pt-5 my-5 text-center text-muted border-top">
    Created by the Bootstrap team &middot; &copy; 2021
  </footer>


</body>
</html>


<script type="text/javascript">
  $(document).ready(function(){
    $('#navbar').load('../com/navbar.php');    
    $('#categorias').load('../com/listaCategorias.php');
    $('#modal').load('../com/modalAlmacen.php');
    llenarTablaAlmacen(0);
  });
</script>

