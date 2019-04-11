<?php 
$pdo = new PDO('mysql:host=localhost;dbname=bkdb','root','');
 $query="SELECT * from categories";
 $statement=$pdo->prepare($query);
 $statement->execute();
 $data=$statement->fetchall();
 
$colcount=0;
$maxcol=4;

 ?>










<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="code/shoumik.css">
    
    </head>
    
    
    <body>
        <div class="container">
            <div class="row">
                <div class="row-center-content">
                    <div class="col-lg-8 col-md-8 col-sm-8 heading1">
                        <h1>how are you shoumik !</h1>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 heading2">
                        <a href="facebook.com" class="facebook"><img src="facebook.png" alt="facebook" height="52" width="52">Like us on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
        
        


        <div class="container row1">
            
            <div class="row">

                <?php foreach ($data as $item) { ?>
                
                    <div class="col-lg-3 col-md-3 col-sm-3 column1">
                        <img src="<?php echo $item['icon']; ?>" alt="icon" height="45" width="45">
                        <h4><?php echo $item['name'];?></h4>
                        <p>(23456)</p>
                        <p><?php echo $item['description'];?></p>
                    </div>

                <?php 
                  $colcount++;
                  if($colcount==$maxcol)
                  {
                  	$colcount=0;
                  	echo '</div><div class="row">';

                  }


                }?>


            </div>
        </div>
            
            
           
        
    </body>

</html>