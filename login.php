<?php 

session_start();
if(isset($_SESSION['Msglogin']))
{
	echo $_SESSION['Msglogin'];
	unset($_SESSION['Msglogin']);
}



 ?>






<head>
    <style type="text/css">
        form{
            color: white;
            margin: auto;

        }
        fieldset{
            margin: auto;
        }

    </style>
</head>










<pre>


<form  action="loginprocess.php" method="post">
	<fieldset style="width:40%;background:green">

    <h1>LOG IN</h1>

	<label>Username/Email</label>
	<input type="text" name="userormail">

	<label>Password</label>
	<input type="password" name="pass"><br>

    <input type="submit" value="Login">
		
	</fieldset>		
</form>



</pre>