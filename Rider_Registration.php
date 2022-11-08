<?php 

if(isset($_GET['err'])){
    if($_GET['err'] == 'null'){
        echo "<center><p style='color:black; background-color:red;'>Error!! Please Enter the Information </p></center>";
    }

    if($_GET['err'] == 'invalid'){
        echo "<center><p style='color:black; background-color:red;'>invalid username/password </p></center>";
    }

    if($_GET['err'] == 'bad_request'){
        echo "<center><p style='color:black; background-color:red;'>Please login first </p></center>";
    }
}

?>

<!DOCTYPE html>
<html>

  <body style="background-image: url('rider_registration.jfif');">
  <form action="Rider_Registration_Validation.php" method="post" style="display:inline-block; text-align: center; width: 50%; margin-left : 25% ;background-color: powderblue;" >
        <fieldset>
            <legend >RIDER REGISTRATION</legend>
            Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <input type="text" name="name" value="" /> <br>
            <hr />
            Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; : <input type="email" name="email" value="" /> <br>
            <hr />
            Phone Number: &nbsp; &nbsp;   : <input type="number" name="phone_number" value="" /> <br>
            <hr />
            Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <input type="password" name="password" value="" /> <br>
            <hr />
            Confirm Pasword &nbsp;&nbsp;: <input type="password" name="confirm_password" value="" /> <br>
            <hr />
            Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <textarea name="address" form="address">Enter text here...</textarea> <br>
            <hr />

            <form action="Rider_Registration_Validation.php" method="post" style="display:inline-block;">
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="" /> Male
                    <input type="radio" name="gender" value="" /> Female
                    <input type="radio" name="gender" value="" /> Other

                </fieldset>
            </form>

           <!-- <form style="display:inline-block;">
                <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="text" name="day" value="" /> /
                    <input type="text" name="month" value="" /> /
                    <input type="text" name="year" value="" /> /
                    &nbsp;(dd/mm/yyyy)

                </fieldset>
            </form>
-->
            <br />
            <hr />

            <form action="Rider_Registration_Validation.php" method="post" style="display:inline-block;">
                <fieldset>
                    <legend>Your Vehicle Type</legend>
                    <input type="radio" name="vehicle" value="" /> E-Bike
                    <input type="radio" name="vehicle" value="" /> Cycle
                    <input type="radio" name="vehicle" value="" /> Motor-Bike
                    <input type="radio" name="vehicle" value="" /> Walker

                </fieldset>
            </form>
            <br />
            <hr />
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>

        </fieldset>

    </form>
</body>
</html>