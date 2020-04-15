<html>
<head>
<!-- <link src = "style.css"> -->
<!-- <link src="nav.css"> -->
<link rel="stylesheet" href="form_style.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

<?php
$myfile = fopen("f5.txt", "r") or die("Error");
$a = array();
 for ($i=0;;$i++)
{
 $temp=fgets($myfile);
 if ($temp == FALSE){
 break;
 }
 else {
 array_push($a,$temp);
 }
}

?>
<!-- <div class="color"> -->
<div class="block">
<?php
    echo '<h1 class="heading">'.$a[0].'</h1>'; 
?> 
<!-- <div class ="main" style="padding-left:500px" > -->

<?php
echo '<form action="thanks.html" method= "GET" target="_self">' ;
$x="Gender";
for ($b=1;$b < $i;$b++){
    // echo $a[$b];
    // echo strcmp($a[$b],$x);
    if( $a[$b] == "Name\n"){
    echo '<div class="div">';
    echo "<h3>First Name: </h3>";
    echo '<input type = "text" name= "firstname" class="input" placeholder=first '.$a[$b].' required=" required" >';
    echo '<input type= "text" name="lastname" class="input" placeholder=last '.$a[$b].' required= "required" ><br>';
    echo '</div>';
}

elseif( strcmp($a[$b],($x."\n"))==0 ){
    echo '<div class="left">';
    echo '<h3 id="set"> Gender</h3>';
    echo '<input type="radio" class="g" placeholder="first" name="gender id="radio" >';
    echo '<h4 name="gender">Male</h4>';
    echo '<input type="radio" class="g" placeholder="first" name="gender id="radio" >';
    echo '<h4 name="gender">Female</h4>';
    // echo "<input type="radio" name="gender" value="male">Other<br><br>";
}

elseif($a[$b]=="Email\n"){
    echo '<div class="div">';
    echo "<h3> Email id: </h3>";
    echo '<input type="email" class="input" id="mail" placeholder='.$a[$b].' ><br>';
    echo '</div>';
}
elseif($a[$b]=="DOB\n"){
    echo '<div class="div">';
    echo '<h3>DOB </h3>(dd/mm/yyyy)';
    echo '<input type =" text" class="input" id="mail" name = "firstname" placeholder='.$a[$b].' required = "required" ><br>';
    echo '</div>';
}
elseif($a[$b]=="Number\n"){
    echo '<div class="div">';
    echo "<h3>Mobile </h3>";
    echo '<input type="text" name="phone" class="input" id="mail" placeholder="99825*****" pattern="[0-9]{10}"><br>';
    echo '</div>';
}
// elseif($a[$b]=="Password"){
//     echo "Password"
//     echo " <h5>password must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter</h5>";
//     echo "<input type="password" name="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">";
// }    
// elseif($a[$b]=="Confirm Password"){
//     echo "Confirm Password"
//     echo " <h5>password must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter</h5>";
//     echo "<input type="password" name="cpassword" placeholder="Enter your confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}<br><br>">";
// }
elseif($a[$b]=="Address\n"){
    echo '<div class="div" id="address">';
    echo "<h3> Address </h3>";
    echo '<input type = " text " name = " address " class="input id="mail" placeholder = ' .$a[$b]. ' > ';
    echo '</div>';
}
elseif($a[$b]=="Submit\n"){
    echo '<div class="div" id="address">';
    // echo "Submit";
    echo '<input type="submit" class="Submit" placeholder="Address">';
    echo '</div>'; 
}
else{ 
   echo '<div class="div">' ;  
echo '<h3>'.$a[$b].'</h3>';
echo '<input type="text" class="input" id="mail" placeholder ='. $a[$b].'>';
echo "<br>";
echo '</div>';
}
}
fclose($myfile);

?>
</form>
</body>
</html>