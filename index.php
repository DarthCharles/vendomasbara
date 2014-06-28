      <?php
      include ("libMenu.php");
      session_start();
      $login= "";
      $loginResult = "";
      if (isset($_SESSION["loginStatus"])){
        $loginResult = $_SESSION["loginStatus"];
      } elseif (isset($_GET['login'])) {
       $login= $_GET['login'];
     }
     ?>

     <!DOCTYPE html>
     <html lang="es">
     <head>
      <meta charset="utf-8">
      <title></title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img src="img/logo.png" alt=""></a>
          </div>

          <div class="navbar-collapse collapse">

            <?php if ($loginResult == "true") {
             registrado();

           } else {
            noRegistrado();
          }?>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" >
           <?php printCategorias(); ?>
         </ul>


       </div>

       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >

        <?php if ($login == "incorrect") {
         loginErrMess();
       }?>

     </div>








   </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
      </body>
      </html>
