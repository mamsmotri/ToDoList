<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{

		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];
			

			if($login=="admin" && $password=="123")
			{
				$data["login_status"] = "access_granted";
				
				session_start();
				$_SESSION['admin'] = $password;
				header('Location:/');
			}
			else
			{
				$data["login_status"] = "access_denied";
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}

    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}
