<?php

$user1 = ["ali", "ali@gmail.com", "team-leader"];
$user2 = ["mark", "mark@gmail.com", "designer"];
$user3 = ["ivan", "ivan@gmail.com", "backend-developer"];
$user4 = ["yashwa", "yashwa@gmail.com", "front-developer"];


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>


        <div class="container p-3">
            <div class="content p-3 bg-secondary row d-flex justify-content-center align-items-center">

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-1</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user1[0]?></b></p>
                        <p>email: <b><?php echo $user1[1]?></b></p>
                        <p>status: <b><?php echo $user1[2]?></b></p>
                </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-2</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user2[0]?></b></p>
                        <p>email: <b><?php echo $user2[1]?></b></p>
                        <p>status: <b><?php echo $user2[2]?></b></p>

                </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-3</u></b></h3>
                        <br>
                       <p>Name: <b><?php echo $user3[0]?></b></p>
                        <p>email: <b><?php echo $user3[1]?></b></p>
                        <p>status: <b><?php echo $user3[2]?></b></p>
          </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-4</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user4[0]?></b></p>
                        <p>email: <b><?php echo $user4[1]?></b></p>
                        <p>status: <b><?php echo $user4[2]?></b></p>

                </div>
                


            </div>
        </div>

 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>