<!DOCTYPE html>
<html>
<body>

<?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     $operator = $_POST['operator'];

     if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+': 
                $result = $num1 + $num2; 
                break;
            case '-': 
                $result = $num1 - $num2; 
                break;
            case '*': 
                $result = $num1 * $num2; 
                break;
            case '/': 
                $result = ($num2 == 0) ? "Cant divide by zero" : $num1 / $num2;
                break;
            default: 
                $result = "Invalid input ";
        }
    } else {
        $result = "Please enter numbers only.";
    }
}

 
?>
<html>
<body> 
    <form method="post">
        <input type="text" name= "num1" required placeholder="First number"/> <br>
        <input type="text" name="operator" required placeholder="Operator"/> <br>
        <input type="text" name= "num2" required placeholder="Second number"> <br>
        <button type="submit">Submit</button> 
    </form>
    
    <?php if (isset($result)) 
    echo "<p>Result: $result</p>"; ?>

</body>
</body>
</html>
