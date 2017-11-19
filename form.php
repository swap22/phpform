<?php
$error_name="";
$error_email="";
$error_Gender="";
$error_Website="";
if(isset($_POST['Submit'])){
    if(empty($_POST['Name'])){
        $error_name="Name field is empty";
    }else{
        // post variable assign value to name or other variable
        $Name=assign($_POST['Name']);
        // check Name only contains letters and whitespace
        if(!preg_match("/^[A-Za-z\. ]*$/",$Name)){
        $error_name="Only Letters and white sapace are allowed";
        }
    }

    if(empty($_POST['Email'])){
        $error_email="Email field is empty";
    }else{
        // post variable assign value to Email or other variable
        $Email=assign($_POST['Email']);
        // check if e-mail address syntax is valid or not
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
        {
        $error_email="Invalid Email Format";
        }

    }

    if(empty($_POST['Gender'])){
        $error_Gender="Gender field is empty";
    }else{
        // post variable assign value to Email or other variable
        $Gender=assign($_POST['Gender']);
    }
    
    if(empty($_POST['Website'])){
        $error_Website="Website field is empty";
    }else{
        // post variable assign value to Email or other variable
        $Website=assign($_POST['Website']);
         // check Website address syntax is valid or not
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
        $error_Website="Invalid Webside Address Format";	
        }

    }
    if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Gender"])&&!empty($_POST["Website"])){
    if((preg_match("/^[A-Za-z\. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true))
        {
        echo "<h2>Your Submit Information</h2> <br>";
        echo "Name:".ucwords ($Name)."<br>";
        echo "Email: {$Email}<br>";
        echo "Gender: {$Gender}<br>";
        echo "Website: $Website<br>";
        echo "Comments: {$_POST["Comment"]}<br>";
        }
        else{
            echo '<span class="Error">* Please Complete & Correct your Form & Try Again *</span>';
        }
    }
}
// function just return value it receive
function assign($inp){
    return $inp;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Form</title>

    <style type="text/css">
    input[type="text"], input[type="email"],textarea{
        border: 1px solid black;
        background-color: rgb(221,216,212);
        width: 600px;
        padding: .5em;
        font-size: 1.0em;
        } 
        .error{
            color: red;
        }
    
    </style>
</head>
<body>
    <form action="form.php" method="post">
        			
            <fieldset><legend>* Please Fill Out the following Fields.</legend>
                Name:<br>
                <input class="input" type="text"  Name="Name" placeholder="write your name">
            <span class="error"><?php echo "$error_name"; ?></span>
                <br>	 
                E-mail:<br>
                <input class="input" type="email"  Name="Email" placeholder="write your Email">
                <span class="error"><?php echo "$error_email"; ?></span>
                <br>
                Gender:<br>
                <input class="radio" type="radio" Name="Gender" value="Female">Female
                <input class="radio" type="radio" Name="Gender" value="Male">Male 
                <span class="error"><?php echo "   $error_Gender"; ?></span>
                <br>		   
                Website:<br>
                <input class="input" type="text"  Name="Website" placeholder="write your website address">
                <span class="error"><?php echo "$error_Website"; ?></span>
                <br>
                Comment:<br>
                <textarea Name="Comment" rows="5" cols="35"></textarea>
                <br>
                <br>
                <input type="Submit" Name="Submit" value="Submit Your Information">
           </fieldset>

    </form>
</body>
</html>