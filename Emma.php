<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <?php  
   
   $a = 42; 
   $b = 20; 
    
   $c = $a + $b; 
   echo "Addition Operation Result: $c <br/>"; 
   $c = $a - $b; 
   echo "Subtraction Operation Result: $c <br/>"; 
   $c = $a * $b; 
   echo "Multiplication Operation Result: $c <br/>"; 
   $c = $a / $b; 
   echo "Division Operation Result: $c <br/>"; 
   $c = $a % $b; 
   echo "Modulus Operation Result: $c <br/>"; 
   $c = $a++;  
   echo "Increment Operation Result: $c <br/>"; 
   $c = $a--;  
   echo "Decrement Operation Result: $c <br/>"; 


   
   
   
   
   
   ?>

   <form action="<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="post"> What is your first name? <input type="text" name="first_name" /> <input type="submit" value="Say Hello" /> </form> Here’s the form processing logic:
Hello, <?= $_POST['first_name'] ?> ! And here’s the logic that decides what to do:
if ($_SERVER['REQUEST_METHOD'] == 'GET') {    include __DIR__ . '/getpost-get.php'; } else {    include __DIR__ . '/getpost-post.php'; }
 <div> </div>
</body>
</html>