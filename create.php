<?php 
    
    session_start();
    if(isset($_SESSION["Message"]))
    {
        echo $_SESSION["Message"];
        unset($_SESSION["Message"]);
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




<a href="see.php">See Users</a>
<a href="login.php">Have account? log in here</a>



<pre>

    <form action="store.php" method="POST">


    <fieldset style="width:40%;background:green">
            <h1> Register Here</h1>
            <!-- <legend>user registration</legend> -->


            <label for="name" >Name: </label>
            <input type="text" name="name"><br>

            <label for="mail" >Email: </label>
            <input type="email" name="email"><br>

            <label for="pass" >Password: </label>
            <input type="password" name="password"><br>


            <!-- <label for="id" >Id: </label>
            <input type="number" name="id"><br>

            <label for="date" >DOB: </label>
            <input type="date" name="date"><br>

            <label for="gender" >gender: </label>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="female">Female<br><br>

            <select name="dist">
                <option value="dhaka">Dhaka</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="barisal">Barisal</option>
                <option value="khulna">BKhulna</option>

            </select><br><br>
 -->

            <input type="reset" value="Clear">
            <input type="submit" value="GO">






        </fieldset>
    </form>






</pre>




