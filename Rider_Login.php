<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid'){
            echo "<center><p style='color:black; background-color:red;'>invalid username/password </p></center>";
        }  

        if($_GET['err'] == 'null'){
            echo "<center><p style='color:black; background-color:red;'> username/password not found</p></center>";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>



<!DOCTYPE html>
<html>

  <body style="background-image: url('rider_registration.jfif');">
  <form action="Rider_Login_Validation.php" method="post" style="display:inline-block; text-align: center; width: 50%; margin-left : 25% ;background-color: powderblue;">
        <fieldset>
            <legend >Login</legend>
            Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; : <input type="email" name="email" value="" /> <br>
            <hr />
            Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    : <input type="password" name="password" value="" /> <br>
            <hr />

            <button type="submit">Submit</button>
            <hr/>

            <a href="">Forgotten password?</a>
            <hr/>

            <a href="Rider_Registration.php">Create New Account</a>

           <hr/>
           <a href="../Master_Home.php">Go to Home Page</a>

        </fieldset>

    </form>
</body>
</html>