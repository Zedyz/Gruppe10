<?php
    require 'init.php';
    $general->logged_in_protect();


    // Sjekker om all logininfo stemmer

    if(empty($_POST) === false) {
        
        $brukernavn = trim($_POST['brukernavn']);
        $passord = trim($_POST['passord']);
        
        if(empty($brukernavn) === true || emtpy($passord) === true) {
            
            $errors[] = 'skriv inn brukernavn og passord';
        }   else if($brukere->user_exists($brukernavn) === false)   {
            
            $errors[] = 'brukernavnet finnes ikke';
        }   else {
            
            if(strlen($passord) > 5)   {
                
                $errors[] = 'passordet må være lengre enn 5 bokstaver';
            }
            
            $login = $brukere->login($brukernavn, $passord);
            if($login === false)    {
                
                $errors[] = 'brukernavn/passord funker ikke';
            }   else    {
                
                // Gir bruker id'en i databasen en aktiv session slik at den er logget inn til
                // den lukker browseren
                
                $_SESSION['id'] = $login;
                header('Location: hjem.php');
                exit();
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel"stylesheet" type"text/css" href="stylesheet.css">
        <title>loginside</title>
    </head>
    <body>
        <div>
            <ul>
                <li><a href="register.php">registrer</a></li>
                <li><a href="login.php">logg inn</a></li>
            </ul>
            <p>logg inn</p>
            
            <?php 
            
            if(empty($errors) === false)    {
                
                echo '<p>' . implode('</p><p>', $errors) . '</php>';
            }

            ?>
            
            <!-- lager logg inn "skjema" -->
            
            <form method="post" action="">
                <p>brukernavn:</p>
                <input type="text" name="brukernavn">
                <p>passord</p>
                <input type="passord" name="passord">
                <input type="submit" name="submit">
            </form>
        </div>
    </body>
</html>