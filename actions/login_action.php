<?php



class Login{

    private $error = "";

        public function evaluate($data)
    {
        $username = addslashes($data['username']);
        $password = addslashes($data['password']);

        $query = "select * from users where username = '$username' limit 1";

        
       $DB = new Database();
       $result = $DB->read($query);

       if ($result) 
       {

        $row = $result[0];

        if ($password == $row['password'])
        {
            //create session data
            $_SESSION['blare_userid'] = $row['userid'];

        }else{
            $this->error .= "Wrong password<br>";
        }
       }else{
        
            $this->error .= "No username was found<br>";
       }

        return $this->error;
       
    }

    public function check_login($id)
    {

        $query = "select userid from users where userid = '$id' limit 1";

        
       $DB = new Database();
       $result = $DB->read($query);

       if ($result) 
       {
            return true;
       }
       return false;

    }
}
