<?php 
class register extends Controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }
    function sayHi()
    {
        $this->view("layoutView", [
            "page"=>"registerView",
        ]);
    }
    
    function dangky()
    {
       if( isset($_POST["btnRegister"]) ){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);

            $kq = $this->userModel->insertNewUser($username, $password);
            
            $this->view("layoutView", [
                "page"=> "registerView",
                "result" => $kq
            ]);
       }
    }

}
?>