<?php 

include("auth.php");


$object=new auth();
$data=$object->getusers();

echo "<pre>";



if(empty($_SESSION['loginuserinfo']))
{
    $_SESSION['Msglogin']="Please login first!";
    header("location:login.php");
}


    echo "<pre>";
    print_r($_SESSION['loginuserinfo']);
    //echo "Username: ".$_SESSION['loginuserinfo'][0]['username'];





 ?>




<a href="create.php">add more user</a>
<a href="login.php">Logout</a>



 <table border="1px">
 	<tr>
 		<th>ID</th>
 		<th>Username</th>
 		<th>Email</th>
 		<th>Details</th>
 	</tr>

     <?php  foreach ($data as $val) {
     	
     ?>

    
    <tr>
    	<td><?php echo $val['id'] ?></td>
    	<td><?php echo $val['username'] ?></td>
    	<td><?php echo $val['email'] ?></td>
    	<td>
    		<a  href="userdetails.php?shontu=<?php echo $val['id']?>">View details</a>
    	</td>
    	<td>
    		EDIT | DELETE
    	</td>

    	
    </tr>
    
    <?php } ?>


 </table>