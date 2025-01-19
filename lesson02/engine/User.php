<?php

class User
{
    public $name = '';
    public $pass = '';
    public $role =  '';

    public function __construct($name, $pass, $role = 'user') {
        $this->name = $name;
        $this->pass = $pass;
        $this->role = $role;
    }

    public function check_pass()
    {
        global $db; //from dbconnect.php

        $query = "SELECT `pass` , `name`, `role` FROM `users` WHERE `name` = '$this->name' AND `pass`='$this->pass'";  //request string

        $request = @mysqli_query($db, $query);    // request to base

        $result = mysqli_fetch_all($request, MYSQLI_ASSOC);   //extract result

        if (!empty($result) && $this->name == $result[0]["name"] && $this->pass == $result[0]["pass"]) {

            $this->role = $result[0]["role"]; // set role
            return true;
        }
        return false;
    }

    public function get_role() {
        return $this->role;
    }
}
