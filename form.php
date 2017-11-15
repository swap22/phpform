<?php
$error_name="";
if(isset($_POST['Submit'])){
    if(empty($_POST['Name'])){
        $error_name="Name field is empty";
    }else{
        // post variable assign value to name or other variable
        $name=assign($_POST['Name']);
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
</head>
<body>
    <form action="form.php" method="post">
        			
            <fieldset><legend>* Please Fill Out the following Fields.</legend>
                Name:<br>
                <input class="input" type="text"  Name="Name" placeholder="write your name">
                <br>	 
                E-mail:<br>
                <input class="input" type="email"  Name="Email" placeholder="write your Email">
                <br>
                Gender:<br>
                <input class="radio" type="radio" Name="Gender" value="Female">Female
                <input class="radio" type="radio" Name="Gender" value="Male">Male
                <br>		   
                Website:<br>
                <input class="input" type="text"  Name="Website" placeholder="write your website address">
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