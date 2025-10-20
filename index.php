<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
     <form method="post" action="submit.php">
        <label for="fnumber">Enter your first number</label>
        <input type="text" name="fnumber" id="fnumber">
        <br><br>

         <label for="second_number">Enter your second number</label>
        <input type="text" name="second_number" id="second_number">
          <br><br>

        <button type="submit">submit</button>
        <br><br>

        <!-- radio button -->
          <input type="radio" id="addition" name="calculator" value="addition">
         <label for="addition">addition</label> <br>
         
          <input type="radio" id="subtraction" name="calculator" value="subtraction">
         <label for="subtraction">subtraction</label> <br>
        
          <input type="radio" id="multiplication" name="calculator" value="multiplication">
         <label for="multiplication">multiplication</label> <br>

       

        
     </form>
</body>
</html>