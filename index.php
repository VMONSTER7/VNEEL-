
<!DOCTYPE html>
<html>
    <head>
        
   	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="REGISTRATION.css">
</head>
	<body style="background-image:url('background.jpg');background-repeat:no repeat;background-size:100%">
    <div class="form-group" style="border-radius: 7px;">
                 <div class="row" id="head" >
                 <div class="col-sm-1">        <div class="imgclass" >
            <img style="width: 10%;" src="PRO-JAL.bgphoto/10-removebg-preview.png" alt=""></div></div>
                 <div class="col-sm-10"style="font-size:30px;color:aliceblue;padding:2%;font-weight:bold;font-family:Verdana;display: flex;height:200px;text-align:left;">VNEEL</div>
                <div class="col-sm-1" ><a href="Home.html"><button>HOME</button></a></div>
               
    <?php
$server= "localhost";
$username= "root";
$password= "";
$dbname= "regform";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
 die("connection to this database failed due to " . mysqli_connect_error());
}
//echo "success cnnected to database";

$billno = $_POST['billno'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$aadhaar = $_POST['aadhaar'];
$father = $_POST['father'];
$address = $_POST['address'];
$office = $_POST['office'];
$password = $_POST['password'];

$SELECT = "select billno From register where billno = ? limit 1";
$sql= "INSERT INTO `register` ( `billno`, `fname`, `lname`, `email`, `phone`, 
`aadhaar`, `father`, `address`, `office`,  `password`, `date`) VALUES 
( '$billno', '$fname', '$lname', '$email', '$phone', '$aadhaar', 
'$father', '$address', '$office', PASSWORD('$password'), 
CURRENT_TIMESTAMP());";


if($con->query($sql) == true){
     echo " <h1>....registration succecssfull.... </h1>";
}
else{
    echo"<h1>.....registration unsuccessfull.... </h1>";
}

$con->close();
?>        
	</body>
</html> 