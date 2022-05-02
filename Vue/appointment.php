

<?php
//admin page 
include('../Modele/Appointmentc.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php session_start(); ?>
<h1>bienvenue <?php echo $_SESSION['nom']; ?></h1>

<body>
  <div class="container-fluid navbar navbar-expand-lg  mt-3">
    <form class="d-flex" action="../Controlleur/AppointmentControlleur.php">
      <button class="btn btn-primary" type="submit" name="cherch">Search</button>
      <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" name="search">

    </form>
  </div>

  <table class="table mt-5">

    <thead>

      <tr>
        <th scope="col">Appointment id</th>
        <th scope="col">Appointment date</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">birth date</th>


      </tr>

    </thead>
    <tbody>
      <?php
      Appointmentc::ShowAppointment();

      ?>

    </tbody>
  </table>



  <button class="btn btn-primary" name="update"><a href="update.php" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete.php" class="text-light">Delete</a></button>
  <button class="btn btn-primary my-5"><a href="newAppointment.php" class="text-light">Add Patient</a>
  </button>


  <?php
  if (isset($_SESSION['nom'])) {
    echo ' <a href="../Session/deconnexion.php" class="btn btn-primary">Deconnexion</a>';
  }
  ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>