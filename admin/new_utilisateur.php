<?php
session_start();
if ($_SESSION["autoriser"] != "oui") {
  session_destroy();
  header("location:../user/guest/adminAuthForm.php");
}
?>
<!DOCTYPE html>

<head>
  <title>Welcome to TechPlus</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include "./templates/admin_header.php" ?>

  <div class="for">
    <h1 class="link">New user </h1>
    <div style="text-align: right;">
      <a href="./all_users.php"><button class="btn btn-default btn-danger">Return</button></a>
    </div>
    <form class="form" method="post" action="./queries/add/add_User.php">
      <div class="row mx-md-n5">
        <div class="col px-md-2">
          <input type="text" class="form-control" name="firstname" placeholder="First name" required>
        </div>
        <div class="col px-md-2">
          <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
        </div>
      </div>

      <div class="row mx-md-n5">
        <div class="col px-md-2">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col px-md-2">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
      </div>


      <div class="row mx-md-n5 ">
        <div class="col px-md-2">
          <input type="tel" class="form-control" id="inputAddress" name="tel" placeholder="Phone number" required>
        </div>
      </div>

      <div class="row mx-md-n5 ">
        <div class="col px-md-2">
          <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="Address (Main)" required>
        </div>
      </div>

      <div class="row mx-md-n5 form-group">
        <div class="col px-md-2">
          <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Address 2">
        </div>
      </div>

      <div class="row mx-md-n5 form-group">
        <div class="form-group col px-md-2">
          <input type="text" class="form-control" id="inputCity" name="city" placeholder="City" required>
        </div>
        <div class="form-group col-md-4 px-lg-4">
          <select id="inputState" name="state" class="form-control" required>
            <option selected>State</option>
            <option>Tunis</option>
            <option>Ariana</option>
            <option>Ben Arous</option>
            <option>Nabeul</option>
            <option>Sousse</option>
            <option>Sfax</option>
            <option>Gabes</option>

          </select>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" name="zip" id="inputZip" placeholder="Zip" required>
        </div>
      </div>
      <button type="submit" class="btn btn-danger">Add User</button>
    </form>
  </div>

  <br><br>
  <?php include "./templates/admin_footer.php" ?>
</body>