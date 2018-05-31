<!DOCTYPE html>
<html>

<head>
  <title>All-Purpose Flour Nutrition Facts</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Bootstrap DEPENDENCIES-->
  <!-- JQUERY IS A JAVASCRIPT FRAMEWORK THAT BOOTSTRAP NEEDS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme THAT ENABLES DROPDOWN MENUS AND OTHER FEATURES-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- END OF BOOTSTRAP DEPENDENCIES-->


  <link rel="stylesheet" href="./style.css">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="container">
  <!-- BEGINNING OF NAVBAR -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Pawsitively Delicious</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="About Us.html">About Us</a></li>

        <?php                include("includes/navbar.php");
   ?> 

  <!-- Beginning of content -->
  <div class="row ">

    <div class="col-md-12 ">
      <h2> Nutrition Facts</h2>
      <hr>

      <div class="col-md-8">
        <img class="img-responsive" src="./Assets/Flour.jpg" alt="Glass Jar of Flour on its side with a small mound of flour on the table">
      </div>
    </div>
    <h2>
          <b>All-Purpose Flour</b>
        </h2>

    <div class="row">
      <div class="col-md-4">
        <img class="img-responsive" src="./Assets/wheat.jpg" alt="#">
      </div>
    </div>
    <br><br>
    <hr><br>
  </div>
  <!-- End of content -->
  </div>
  <!-- End of row -->

        <?php include("includes/Footer.php"); ?>
  </div>
</body>
</html>