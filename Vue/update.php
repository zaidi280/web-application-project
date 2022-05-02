<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Patient</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <?php
  include '../Modele/Appointmentc.php';
  ?>
  <form action="../Controlleur/AppointmentControlleur.php" method="GET">
    <div class="container my-5">

      <div class="mb-3">
        <label class="form-label">Id</label>
        <input type="text" class="form-control" name="id">
      </div>
      <div class="mb-3">
        <label class="form-label">Appointment Date</label>
        <input type="date" class="form-control" name="appdate">

      </div>
      <div class="mb-3">
        <label class="form-label"> Firstname</label>
        <input type="text" class="form-control" name="fn">

      </div>
      <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" class="form-control" name="ln">

      </div>
      <div class="mb-3">
        <label class="form-label">Birth Date</label>
        <input type="date" class="form-control" name="bd">

      </div>

      <button class="btn btn-primary" name="update">Update</button>
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>