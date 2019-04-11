<?php 

//print_r($_POST);
$pdo = new PDO('mysql:host=localhost;dbname=bkdb','root','');



if(isset($_POST['done']))
{
	//echo "Button clicked";
     $file= $_FILES['icon'];
     echo "<pre>";
     //print_r($file);

     //category name and description variables
     $categoryname=$_POST['catname'];
     $description=$_POST['des'];


     //File  variables
     $filename=$file['name'];
     $filetype=$file['type'];
     $tmploc=$file['tmp_name'];
     $filesize=$file['size'];
     $filerror=$file['error'];


     //getting into pieces
     $filext=explode('.',$filename); //string k divide kore
     $actualext=strtolower(end($filext));
     $allowed=['jpg','jpeg','png'];

     if(in_array($actualext,$allowed))
     {
     	if($filerror===0)
     	{
     		if($filesize<5000000)
     		{
     			$newfilename=uniqid('',true).".".$actualext;
     			$filedest= "images/".$newfilename;
     			

     			$query="INSERT INTO categories(name,description,icon) values('$categoryname','$description','$filedest')";
                $stmt = $pdo->prepare($query);
                $status=$stmt->execute();

                if($status)
                {
                	move_uploaded_file($tmploc,$filedest);
                	header("Location:imgup.php?successfully_uploaded");

                }
                else
                {
                	header("Location:imgup.php?unsuccessful!");

                }

     			



     		}
     		else
     		{
     			echo "File is too big!";
     		}
     	}


     }
     else
     { 
     	echo "Only upload Image of jpg jpeg and png format";

     }



}




      /* $allowed=['jpg','jpeg','png'];
      for ($i=0; $i <count($allowed) ; $i++) { 
             echo $allowed[$i];
             echo "<br>";
      	
      }
     */


 ?>





