<!Doctype html>
<html lang="en">
    
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
        <title>Ben's Form Assignment</title>

    </head>
    
    <body>

        <form method='POST'>
            <h3>Please input the following info:</h3>
            <label>First Name</label><input type="text" name="first_name"/><br>
            <label>Last Name</label><input type="text" name="last_name"/><br>
            <label>Postal Code</label><input type="text" name="postal_code"/><br>
            <label>Mother's Maiden Name</label><input type="text" name="maiden_name"/><br>
            <label>Favourite Colour</label><input type="text" name="favourite_color"/><br><br>
            <input type="Submit" value="Submit"/>
        </form>
        
        <?php 

            $color = array ("first_name", "last_name", "postal_code", "maiden_name", "favourite_color"); 

        ?> 
        
        <?php

            $var= ucfirst($_POST["first_name"]);
            $varb= ucfirst($_POST["last_name"]);
            $varc= strtoupper($_POST["postal_code"]);
            $vard= ucfirst($_POST["maiden_name"]);
            $vare= $_POST["favourite_color"];

    		echo "<h4>Hello $var! I find it interesting to think about how our identity might change if we had our mother's name. If your name wasn't $var $varb, but instead it was $vard, would your favourite colour still be $vare? Would you still live in $varc?</h4>";

        ?>

    </body>
</html>