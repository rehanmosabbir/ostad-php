<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid mt-5">
      <div class="row">
        <div  class="col-sm-5 bg-light p-4 mx-2 border border-1">
          <form action="index.php" method="post">
            <div class="row mb-3">
              <label for="name" class="col-sm-3 col-form-label">Name: </label>
              <div class="col-sm-9">
                <input type="text" name="name" id="name" class="form-control"/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="email" class="col-sm-3 col-form-label">Email Address: </label>
              <div class="col-sm-9">
                <input type="email" name="email" id="email" class="form-control"/>
              </div>
            </div>

            <input type="submit" value="submit" class="btn btn-info text-white" />
          </form>
        </div>
        <?php
include "person.php";
$person = new Person( "Md. Mosabbir Hossain", "rehanmosabbir@gmail.com" );
$person->setName( "Rezwana Sarmin" );
$person->setEmail( "rokti.red@gmail.com" );
?>
        <div class="col-md-5 bg-dark text-white p-4 mx-2">
          <h1 class="h1">Person's Information</h1>
          <hr>
          <p>Name: <?php echo $person->getName(); ?></p>
          <p>Email: <?php echo $person->getEmail(); ?></p>
        </div>
      </div>
      <?php

if ( !empty( $_POST ) ) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $personNew = new Person( $name, $email );
    $personNew->setName( $name );
    $personNew->setEmail( $email );

}

?>
      <div class="row">
        <div class="col-md-5 mx-2 mt-5 bg-dark text-white p-4">
            <h1 class="h1">Person's Information</h1>
            <hr>
            <p>Name: <?php

if ( !empty( $_POST ) ) {
    echo $personNew->getName();
}

?></p>
            <p>Email: <?php

if ( !empty( $_POST ) ) {
    echo $personNew->getEmail();
}

?></p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
