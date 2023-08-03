<?php
    require 'config.php';//Linking the configuration file
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
                <option>Argentina</option> <option>America</option> <option>Bangaladesh</option> <option>Brazil</option>
                <option>Canada</option> <option>Cuba</option> <option>Denmark</option> <option>Dominican Republic</option>
                <option>Equador</option> <option>Egypt</option> <option>France</option> <option>Finland</option>
                <option>Germany</option> <option>Greenland</option> <option>Hugary</option> <option>Haiti</option>
                <option>Sri Lanka</option> <option>India</option>
            </select> 
            <br/><br/>

            NIC or Passport:<br/><br/>
            <input type="text" name="identy" required><br/><br/>

            
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
                <input type="submit" value="Submit" id="subbmttn" name="bttnsubmit" disabled>
                <button class="cancel"><a href="experience.php">Cancel</a></button>
            </center>

        </form> 
        
    </div> 

    
<?php

if(isset($_POST["bttnsubmit"])){
  
    $firstName = $_POST["firstName"]; 
    $lastName = $_POST["lastName"]; 
    $identy = $_POST["identy"];
    $country = $_POST["country"];
    
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $activity = $_POST["activity"];
    $membr = $_POST["membr"];
    $signupw = $_POST["signupw"];
    $psswd = $_POST["psswd"];
    $repsswd = $_POST["repsswd"];
    $tcheckbx = $_POST["tcheckbx"];
   
    $sql = "INSERT INTO experience(firstName, lastName,  identy, country , email, gender, activity, membr,  signupw, psswd, repsswd, tcheckbx)
    VALUES('$firstName', '$lastName', '$identy', '$country', '$email', '$gender', '$activity', '$membr', '$signupw', '$psswd', '$repsswd', '$tcheckbx')";

    if($con->query($sql)){

        echo "Inserted Successflly";
    }

    else
    {
        echo "Error: ".$con->error; 
    }
}
    $con->close();
?>
</body>
</html>

