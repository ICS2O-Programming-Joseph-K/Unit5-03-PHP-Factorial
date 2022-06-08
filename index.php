<!DOCTYPE html>
<html>
  <head>
    <!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Factorials in JS">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="fav/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- title -->
    <title>Factorials</title> 
  </head>
  <body>
    <h1>Factorials using Do While Loops</h1>
    <?php echo "<p>Enter the required information below: </p>" ?>
    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- function -->
    <form action="./results.php" method="post" target="result">
      <!-- text-field -->
      <label for="number">Number: </label>
      <input type="number" step="1" min="0" max="10000" name="number" id="number" placeholder="Enter number"><br><br>
      <input type="submit" value="Calculate">
    </form> <br>
    <!-- Create a space where the information will be displayed -->
    
		<!-- result frame centered -->
    <div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>