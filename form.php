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
                <input class="input" type="text" Name="Name" placeholder="write your name">
                <br>	 
                E-mail:<br>
                <input class="input" type="email" Name="Email" placeholder="write your Email">
                <br>
                Gender:<br>
                <input class="radio" type="radio" Name="Gender" value="Female">Female
                <input class="radio" type="radio" Name="Gender" value="Male">Male
                <br>		   
                Website:<br>
                <input class="input" type="text" Name="Website" placeholder="write your website address">
                <br>
                Comment:<br>
                <textarea Name="Comment" rows="5" cols="25"></textarea>
                <br>
                <br>
                <input type="Submit" Name="Submit" value="Submit Your Information">
           </fieldset>

    </form>
</body>
</html>