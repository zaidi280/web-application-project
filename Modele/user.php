<?php
class User
{
    private $userid;
    private $username;
    private $psw;
    //private $role;



    function __construct($userid, $username, $psw)
    {
        $this->userid = $userid;
        $this->username = $username;
        $this->psw = $psw;
    }


    public function __get($attr)
    {
        if (!isset($this->$attr))
            return "erreur";
        else
            return ($this->$attr);
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }


    public function __toString()
    {
        $s = "connection avec l'utilisateur $this->username est etablie avec succés ";
        return $s;
    }

    public  function connect($username, $psw, $userid)
    {

        include('../BD/Connexion.php');
        $sql = $conn->query("SELECT * FROM user where username='$username' and psw='$psw' and user_id=$userid");

        if ($sql->rowCount() > 0) {
            if ($this->username == 'admin' && $this->psw == 'admin' && $this->userid == 1) {
                $_SESSION['nom'] = $this->$username;
                return 1;
            } else
                $_SESSION['nom'] = $this->$username;
            return 0;
        }
    }
}
