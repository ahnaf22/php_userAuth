<?php 

session_start();


class auth
{
	private $username,$password,$email;
	private $dbuser='root';
	private $dbpass='';

	public function setdata($data){
		$this->username=$data['name'];
		$this->password=$data['password'];
		$this->email=$data['email'];

		

		return $this;


	}

	public function getusers()
	{

      		$pdo = new PDO('mysql:host=localhost;dbname=info',$this->dbuser, $this->dbpass);

			$query="SELECT * FROM users";
			$stmt = $pdo->prepare($query);
			$stmt->execute();
			$userdata=$stmt->fetchall();

			return $userdata;
			

	}


	public function login($data)
	{
		     $user=$data['userormail'];
		     $password=md5($data['pass']);
	
			$pdo = new PDO('mysql:host=localhost;dbname=info',$this->dbuser, $this->dbpass);

			echo $query="SELECT * FROM users where (username='$user' or email='$user') and password='$password'";
			$stmt = $pdo->prepare($query);
			$stmt->execute();
			$userdata=$stmt->fetchall();

			if(!(empty($userdata)))
			{
				$_SESSION['loginuserinfo']=$userdata;
				header("location:see.php");

			}
			else
			{
				$_SESSION["Msglogin"]="Re - enter your userifo / password!";
				header("location:login.php");

			}

            
			//return $userdata;
			

	}




	public function store(){

		try {

			
			$pdo = new PDO('mysql:host=localhost;dbname=info',$this->dbuser, $this->dbpass);

			$query="INSERT INTO users(id,username,email,password,created_at) values(:i,:u,:e,:p,:cr)";
			$stmt = $pdo->prepare($query);
			
			

			$data=array(
				':i' => null,
				':u' => $this->username,
				':e' => $this->email,
				':p' => md5($this->password),
				':cr'=>date('y-m-d h:m:s')
				);

			$status=$stmt->execute($data);
            

            if($status)
            {
            	$_SESSION["Message"]="<h1>Successful</h1>";
                header('location:create.php');
            }




			}
	    catch(PDOException $e) {
				echo 'Error: ' . $e->getMessage();

			}

}



}




?>