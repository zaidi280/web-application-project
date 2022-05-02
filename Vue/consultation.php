<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <?php
  include '../Modele/Appointmentc.php';
  ?>
  <form action="../Session/session.php" method="GET">
    <div class="container my-5">


      <div class="mb-3">
        <label class="form-label">Patient Height</label>
        <input type="text" class="form-control" name="ph">

      </div>
      <div class="mb-3">
        <label class="form-label"> Patient Weight</label>
        <input type="text" class="form-control" name="pw">

      </div>
      <div class="mb-3">
        <label class="form-label">Pressure Level</label>
        <input type="text" class="form-control" name="pl">

      </div>
      <div class="mb-3">
        <label class="form-label">Sugar Level</label>
        <input type="text" class="form-control" name="sl">

      </div>
      <div class="mb-3">
        <label class="form-label">Appointment Id</label>
        <input type="texts" class="form-control" name="ai">

      </div>
      <button type="submit" class="btn btn-primary mt-2" name="valider">Submit</button>
    </div>



    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>