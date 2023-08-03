<?php
//Linking the configuration file
require 'config.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>

    <script src="https://kit.fontawesome.com/7a5b2ee4ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/formp.css">
    <script src="../js/userpass.js"></script>
   

</head>
<body>
    <div class="formhead">
  
        <h4><span>The Kingsman Hotel</span></h4><h1>Just Relax And Enjoy</h1>
        <h2>Registration Form</h2>
    </div>
<div class="formlft">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return checkPassword()">

            <legend><h1>Book Experiences</h1></legend>
            <h2>Personal Information</h2>
            
            First Name:<br/><br/>
            <input type="text" name="firstName" placeholder="First Name" required><br/><br/>

            Last Name:<br/><br/>
            <input type="text" name="lastName" placeholder="Last Name" required><br/><br/>

            Passport Country:
            <select name="country" id="Passport">
                <option value="arg">Argentina</option> <option value="america">America</option> <option value="ban">Bangaladesh</option> 
                <option value="braz">Brazil</option><option value="cnd">Canada</option> <option value="cub">Cuba</option> <option value="denm">Denmark</option> 
                <option value="dom">Dominican Republic</option> <option value="equd">Equador</option> <option value="egyp">Egypt</option> 
                <option value="frn">France</option> <option value="fin">Finland</option> <option value="ger">Germany</option> <option value="green">Greenland</option>
                 <option value="hug">Hugary</option> <option value="hat">Haiti</option> <option value="sri">Sri Lanka</option> <option value="ind">India</option>
            </select>

            NIC or Passport:<br/><br/>
            <input type="text" name="identy" required><br/><br/>

            Registration Number:<br/><br/>
            <input type="number" name="regNumber"  required><br/><br/>
            
            E-mail:<br/><br/>
            <input type="email" name="email" placeholder="ex: abc123@gmail.com" 
            pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}" required> <br/><br/>

            Gender:<br/><br/>
            <input type="radio" name="gender" value="m"> Male
            <input type="radio" name="gender" value="f"> Female <br/><br/>   

            <h2>Activities Information</h2>

            Select Avtivities:<br/><br/>
            
            1.Surfing  <br/>    
            2.Kite surfing <br/>    
            3.Scuba Diving <br/>
            4.Wind surfing <br/> 
            5.Dolphin Cruise <br/>
            6.Coral Reef Explorer<br/>
            7.Sunrise Breakfast <br/>
            8.Family Castway Picnic <br/>
            9.Sailing Lessons <br/><br/>

            <textarea name = "activity" rows="7" cols="30" placeholder="Type activity numbers."></textarea>

            <br/><br/>
            Number Of Members:
            <input type="number" name="membr" placeholder="ex: 1" required> <br/><br/>
            
            Signup to our website:
            <input type="checkbox" id="signupw" name="signupw" required> 
            <label for="signupw">Yes</label>   <br/><br/>

            Password:<br/>
            <input type="password" id="pwd" name="psswd" required pattern="{5,15}"><br/><br/>
            
            Re-enter password:<br/>
            <input type="password" id="repwd" name="repsswd" required pattern="{5,15}"><br/><br/>

            <input type="checkbox" class="inputstyle" name="tcheckbx"  id="checkbox" required onclick="enableButton ()"> 
            <label for="checkbox"> Accept privacy policy and terms </label> <br/><br/>

            <center>
                <input type="submit" value="Update" id="subbmttn" name="bttnsubmit" disabled>
                <button class="cancel"><a href="experience.php">Cancel</a></button>
            </center>

        </form> 
        
    </div> 
</body>
</html>

<?php

    $firstName = $_POST["firstName"]; 
    $lastName = $_POST["lastName"]; 
    $identy = $_POST["identy"];
    $country = $_POST["country"];
    $regNumber = $_POST["regNumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $activity = $_POST["activity"];
    $membr = $_POST["membr"];
    $signupw = $_POST["signupw"];
    $psswd = $_POST["psswd"];
    $repsswd = $_POST["repsswd"];
    $tcheckbx = $_POST["tcheckbx"];

    session_start();

function ($bttnsubmit = 'Update')
{
    $sql = "UPDATE experience SET firstName = '$firstName',lastName = '$lastName', identy = '$identy',country ='$country',regNumber = '$regNumber',
    email ='$email', gender ='$gender',activity '$activity', membr = '$membr',  signupw = '$signupw', psswd = '$psswd',
    repsswd = '$repsswd', tcheckbx ='$tcheckbx', WHERE regNumber= '$regNumber'";
       
       if(mysqli_query($con, $sql))
       {
           echo "Updated Successfully!";
       }

       else
       {
           echo "Error : ".$con->error;
       }
       $con->close();    
}
?>




