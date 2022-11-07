<?php 
    class UserModel extends DB
    {
        public function insertNewUser($username, $password)
        {
            $query = "insert into users values(null,'$username', '$password' )";
            $result = false;

            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }
    }

?>