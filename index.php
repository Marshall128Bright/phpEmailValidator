

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Email Validator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='css/main.css'>
</head>
<body>

    <?php 
    include("emailValidator.php");
    
    ?>
     
    <section id="container">
    <h1>Enter an email Below</h1>
    <form method="post">
        <label>Email</label><input type="text" name="email">
        <input type="submit" class="button"  name="submit" value="submit">
    </form>
    
    
    <?php
        
        if(array_key_exists("submit", $_POST)) {
            echo "<div id='result'>";
            isEmailValid($_POST["email"]);
            echo "</div>";
        }
       
       
    ?>

</section>
   

    
</body>
</html>
