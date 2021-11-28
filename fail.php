<?php
if(isset($_GET["error"])){
    $fail = htmlspecialchars($_GET["error"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topup App with FlutterWave(Airtime Sales App)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container">
        <header>
            <h1>Error!</h1>
      <p id="errors"><?php echo $fail; ?></p>
        </header>
      
    </section>
</body>
</html>