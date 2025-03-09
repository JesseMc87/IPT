<!DOCTYPE html>
<html lang="en">


    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="test.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="live.js" type="text/Javascript">

        <div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis">Basic jumbotron</h1>
    <p class="lead">
      This is a simple Bootstrap jumbotron that sits within a <code>.container</code>, recreated with built-in utility classes.
    </p>
  </div>
</div>
    </head>


 <body>
    <?php include 'navbar.php';?>
    <div class=" text-center text-emphasis">
    <?php include 'carousel.php';?>
    </div>
    <?php include 'radio.php';?>
    <br>
    <?php include 'body.php';?>
    
<br>
<div class="text-center">
 <a href="#" class="btn btn-danger text-center"> Load More..</a>
<br><br><br><br><br><br><br><br><br><br>
<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis">Basic jumbotron</h1>
    <p class="lead">
      This is a simple Bootstrap jumbotron that sits within a <code>.container</code>, recreated with built-in utility classes.
    </p>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
    <?php include 'radio2.php';?>
    <?php include 'body2.php';?>

</div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
<br><br><br><br><br><br><br><br>
 <?php include 'footer.php'?>
</html>