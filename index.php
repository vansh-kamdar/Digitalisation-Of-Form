<html>
<head>
<!-- <link src = "style.css"> -->
<link rel="stylesheet" href="styles.css">
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
<?php
    echo $a[0] 
?> 
<div class ="main" style="padding-left:100px" >

<?php
echo '<form action="thank.html" method= "GET" target="_self">' ;
$x=" Gender";
for ($b=1;$b < $i;$b++){
    // echo $a[$b];
    // echo strcmp($a[$b],$x);
    if( $a[$b] == "First Name"){
    echo "First Name: ";
    echo '<input type = "text" name= "firstname" placeholder='.$a[$b].' required=" required" ><br>';

}
if($a[$b]=="Last Name"){
    echo "Last Name: ";
    echo '<input type= "text" name="lastname" placeholder='.$a[$b].' required= "required" ><br>';
    
}

elseif( strcmp($a[$b],$x)==0 ){
   
    echo "Gender";
    echo '<input type="radio" name="gender" value="male">M';
    echo '<input type="radio" name="gender" value="female">F';
    // echo "<input type="radio" name="gender" value="male">Other<br><br>";
}

elseif($a[$b]=="E-Mail"){
    echo "Email id";
    echo '<input type="text" name="email" placeholder='.$a[$b].' ><br>';
}
elseif($a[$b]=="DOB"){
    echo "DOB";
    echo "(dd/mm/yyyy)";
    echo '<input type =" text" name = "firstname" placeholder='.$a[$b].' required = "required" ><br>';
}
elseif($a[$b]=="Mobile"){
    echo "Mobile";
    echo '<input type="text" name="phone" placeholder="99825*****" pattern="[0-9]{10}"><br>';
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
elseif($a[$b]=="Address"){
    echo "Address";
    echo ' < input type = " text " name = " address " placeholder = ' .$a[$b]. ' > ';
}
elseif($a[$b]=="Submit"){
    echo "Addres";
    echo '<input type="text" name="address" placeholder='.$a[$b].'>';
}
else{    
echo $a[$b];
echo '<input type="text" placeholder ='. $a[$b].'>';
echo "same<br>";
}
}
fclose($myfile);

?>
</form>
</div>
</body>
</html>