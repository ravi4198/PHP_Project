<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">Calculator</h1>
        <form  method="post">
            <input class="form-control" type="number" name="num1" placeholder="Number 1" required="required">
            <input class="form-control" type="number" name="num2" placeholder="Number 2" required="required">
            <select>
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button class="btn btn-primary mb-3 mt-3" type="submit" name="submit" value="submit">Calculate</button>
        </form>
    </div>


<?php
  if (isset($_POST['submit'])) {
     $result1 = $_POST['num1'];
     $result2 = $_POST['num2'];
     $result3 = $_POST['operator'];
     switch ($operator) {
         case 'None':
             echo "You need to select a operator!";
             break;
        case 'Add':
            echo $result1 + $result2;
            break;
        case 'Subtract':
            echo $result1 - $result2;
            break;
        case 'Multiply':
            echo $result1 * $result2;
            break;
        case 'Divide':
            if ($result2 == 0) {
                echo "ZeroDivisionError";
            } else{
                echo $result1 / $result2;
                break;
            }
           

     }

  }
?>
    
</body>
</html>