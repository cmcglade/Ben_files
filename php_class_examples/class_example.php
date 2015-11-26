<!DOCTYPE html>
<html>
    <head>
        <title>Array Functions </title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    </head>
 
    <body>
        
        <?php
            $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

            
            //asort ($ceu);
            ksort ($ceu);

            foreach ($ceu as $country_name => $city_name)
                { 
                echo "The capital of $country_name is $city_name<br>";
                }

        ?>
        
        
    </body>

</html>