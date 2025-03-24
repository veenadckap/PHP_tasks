<!-- ------------------------------------------------------1. Leap Year-------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
    <title>Leap Years</title>
</head>
<body><br>
      <form method="post">
        <label for="startYear">Start Year:</label>
        <input type="number" id="startYear" name="startYear" required><br><br>
        
        <label for="endYear">End Year:</label>
        <input type="number" id="endYear" name="endYear" required><br><br>
        
        <input type="submit" name="submit" value="Leap Years">
    </form> 

    <?php
    if(isset($_POST['submit'])) {
        function Leapyears($startYear, $endYear) {
            $leapYears = array();

            for ($year = $startYear; $year <= $endYear; $year++) {
                if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                    $leapYears[] = $year;
                }
            }

            return $leapYears;
        }

        $startYear = $_POST['startYear'];
        $endYear = $_POST['endYear'];

        $leapYears = Leapyears($startYear, $endYear);

        echo "<h3>Leap years between $startYear and $endYear are: </h3>";
        echo implode(", ", $leapYears);
    }  
    ?>
</body>
</html>

<!-- ------------------------------------------------------2.Swap array------------------------------------------------------------------------------------ -->

<!DOCTYPE html>
<html>
<body><br><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
        <label for="fruit1">Select Fruit 1:</label> 
       <select name="fruit1" id="fruit1">
           <option value="Mango">Mango</option>
           <option value="Banana">Banana</option>
           <option value="Apple">Apple</option>
           <option value="Orange">Orange</option>
           <option value="Guava">Guava</option>
           <option value="Grapes">Grapes</option>
       </select>
       <br>
       <label for="fruit2">Select Fruit 2:</label>
       <select name="fruit2" id="fruit2">
           <option value="Mango">Mango</option>
           <option value="Banana">Banana</option>
           <option value="Apple">Apple</option>
           <option value="Orange">Orange</option>
           <option value="Guava">Guava</option>
           <option value="Grapes">Grapes</option>
       </select>
       <br>
       <input type="submit" name="submit" value="Swap">
   </form>  
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
       $selectedFruit1 = $_POST['fruit1'];
       $selectedFruit2 = $_POST['fruit2'];
       $fruits = array("Mango", "Banana", "Apple", "Orange", "Guava", "Grapes");
       $key1 = array_search($selectedFruit1, $fruits);
       $key2 = array_search($selectedFruit2, $fruits);
       if ($key1 !== false && $key2 !== false) {
           $temp = $fruits[$key1];
           $fruits[$key1] = $fruits[$key2];
           $fruits[$key2] = $temp;
       }
       echo "<br><br>Array after swapping $selectedFruit1 and $selectedFruit2:<br>";
       print_r($fruits);
   }
?>
</body>
</html>

<!-- ---------------------------------------------------3.Positive Number----------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
<br><br>
<form method="post">
    <label for="input1">Number 1:</label>
    <input type="text" id="input1" name="input1"><br><br>

    <label for="input2">Number 2:</label>
    <input type="text" id="input2" name="input2"><br><br>

    <input type="submit" name="submit" value="Submit">
</form> 

<?php
if(isset($_POST['submit'])){
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    for ($i = $input1 ; $i <= $input2 ; $i++) {
        if ($i % 3 != 0) { 
            if ($i % 5 == 0) {
                echo "*";
            } else {
                echo $i; 
            }
            if ($i != 50) { 
                echo ", ";
            }
        }
    }
}
?>

</body>
</html>

<!-- --------------------------------------------------------4.Calculate----------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
    <title>Calculation</title>
</head>
<body>
<br><br>
    <h2>Calculation</h2>
    <form method="post" name="calculationForm">
        <label for="a">a:</label>
        <input type="number" id="a" name="a" required value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>">
        <br><br>
        <label for="b">b:</label>
        <input type="number" id="b" name="b" required value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>">
        <br><br>
        <label for="c">c:</label>
        <input type="number" id="c" name="c" required value="<?php echo isset($_POST['c']) ? $_POST['c'] : ''; ?>">
        <br><br>
        <label for="d">d:</label>
        <input type="number" id="d" name="d" required value="<?php echo isset($_POST['d']) ? $_POST['d'] : ''; ?>">
        <br><br>
        <label for="e">e:</label>
        <input type="number" id="e" name="e" required value="<?php echo isset($_POST['e']) ? $_POST['e'] : ''; ?>">
        <br><br>
        <input type="submit" name="submit" value="Calculate"><br><br>
    </form> 
    <?php
function Calculation($a, $b, $c, $d, $e ) {
    return (($a + $b) * ($c - $d)) / $e;
}
if(isset($_POST['submit'])){ 
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];
        echo Calculation($a, $b,$c,$d,$e);
    }else{
        echo "is empty" ;
     }
  ?>
</body>
</html> 

<!-- -------------------------------------------------------5.Current Date----------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Color</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a day of the week: <input type="text" name="dayOfWeek">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dayOfWeek = $_POST['dayOfWeek'] ?? '';

    switch ($dayOfWeek) {
        case 'monday':
            $favoriteColor = 'Blue';
            break;
        case 'tuesday':
            $favoriteColor = 'Green';
            break;
        case 'wednesday':
            $favoriteColor = 'Yellow';
            break;
        case 'thursday':
            $favoriteColor = 'Red';
            break;
        case 'friday':
            $favoriteColor = 'Orange';
            break;
        case 'saturday':
            $favoriteColor = 'Purple';
            break;
        case 'sunday':
            $favoriteColor = 'Pink';
            break;
        default:
            $favoriteColor = 'Unknown';
    }

    echo "On $dayOfWeek, my favorite color is $favoriteColor.";
}
?>


</body>
</html>


