<?php

class Appointmentc
{

    private $id;
    private $appointmentdate;
    private $firstname;
    private $lastname;
    private $birthdate;



    function __construct($id, $appointmentdate, $firstname, $lastname, $birthdate)
    {

        $this->id = $id;
        $this->appointmentdate = $appointmentdate;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
    }


    public function __get($attr)
    {
        if (!isset($this->$attr))
            return "erreur";
        else
            return ($this->$attr);
    }
    public function __isset($attr)
    {
        return isset($this->$attr);
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }


    public function __toString()
    {
        $s = "connection avec l'utilisateur $this->appointmentdate est etablie avec succés ";
        return $s;
    }
    public static function AddAppointment($app)
    {
        include("../BD/Connexion.php");

        $nb = $conn->exec("insert into appointment (appointment_date,firstname,lastname,birthdate) values('$app->appointmentdate','$app->firstname','$app->lastname','$app->birthdate')")
            or die(print_r($conn->errorInfo()));



        return $nb;
    }
    public static function ShowAppointment()
    {
        include("../BD/Connexion.php");

        $resultat = $conn->query("select * from appointment");
        if ($resultat) {
            while ($row = $resultat->fetch()) {
                $id = $row['appointment_id'];
                $appdate = $row['appointment_date'];
                $fn = $row['firstname'];
                $ln = $row['lastname'];
                $bd = $row['birthdate'];
                echo '
                    <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $appdate . '</td>
                    <td>' . $fn . '</td>
                    <td>' . $ln . '</td>
                    <td>' . $bd . '</td>
                    </tr>';
            }
        }
    }
    public static function DeleteAppointment($id)
    {
        include("../BD/Connexion.php");
        $conn->exec("delete from appointment where appointment_id=$id")  or die(print_r("Patient not found"));
        return $id;
    }


    public static function UpdatePatient($id)
    {
        include("../BD/Connexion.php");
        $statement = $conn->prepare("UPDATE appointment 
            SET appointment_id = :id, appointment_date = :appdate, firstname = :fn, lastname=:ln,birthdate=:bd
             WHERE appointment_id = '$id->id'") or die(print_r($statement->errorInfo()));
        $statement->bindParam(':id', $id->id);
        $statement->bindParam(':appdate', $id->appointmentdate);
        $statement->bindParam(':fn', $id->firstname);
        $statement->bindParam(':ln', $id->lastname);
        $statement->bindParam(':bd', $id->birthdate);
        $statement->execute(); // or die(print_r($statement->errorInfo()));
        return $statement;
    }


    public static function getbyname($firstname)
    {
        include("../BD/Connexion.php");
        $resultat = $conn->query("select * from appointment where firstname = '$firstname' ") or die(print_r("Patient not found"));
        if ($resultat) {
            while ($ligne = $resultat->fetch()) {
                $idp = $ligne['appointment_id'];
                $appdate = $ligne['appointment_date'];
                $fn = $ligne['firstname'];
                $ln = $ligne['lastname'];
                $bd = $ligne['birthdate'];
                echo '<style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    
                  }
                  
                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }
                  
                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
                </style>
                <table>

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
                <tr>
                <th scope="row">' . $idp . '</th>
                <td>' . $appdate . '</td>
                <td>' . $fn . '</td>
                <td>' . $ln . '</td>
                <td>' . $bd . '</td>
                </tr>
            
                </tbody>
              </table>';
            }
        }
    }
    public static function Showappdate()
    {
        include("../BD/Connexion.php");

        $resultat = $conn->query("select * from appointment where appointment_date=CURRENT_DATE()");
        if ($resultat) {
            while ($row = $resultat->fetch()) {
                $id = $row['appointment_id'];
                $appdate = $row['appointment_date'];
                $fn = $row['firstname'];
                $ln = $row['lastname'];
                $bd = $row['birthdate'];
                echo '
                    <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $appdate . '</td>
                    <td>' . $fn . '</td>
                    <td>' . $ln . '</td>
                    <td>' . $bd . '</td>
                    </tr>';
            }
        }
    }
}
