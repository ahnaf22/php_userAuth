<?php 

include "geo.php";

$getloc=new geo();
$userinfo=$getloc->request('103.78.163.81');

/*Print user loc info*/
echo "<pre>";
print_r($userinfo);
echo "<br>";


/*Get user IP*/
$user_ip =$getloc->getUserIP();
echo $user_ip;
echo "<br><br>";



/*Get the timezone using the ip and show time*/
$timezone=$userinfo['timezone'];
date_default_timezone_set($timezone);
echo "Timezone: ".$timezone."<br>";

echo "Date is ".date("d-m-y")."<br>";
echo "Time is ".date("h:i:sa")."<br>";



/*Get address*/
$lat=$userinfo['lat'];
$long=$userinfo['lon'];

$address=$getloc->addressrequest("23.7600244","90.4317562");
echo $address['results']['0']['formatted_address'];



//print_r($address);









 ?>