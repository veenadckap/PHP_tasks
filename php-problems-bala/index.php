<?php 

//-----------------------swap two array variable-------------------------

// $fruits = array('Mango', 'Banana', 'Apple', 'Orange', 'Guava', 'Grapes');


// $bananaKey = array_search('Banana', $fruits);
// $orangeKey = array_search('Orange', $fruits);

// if ($bananaKey !== false && $orangeKey !== false) {
//     $temp = $fruits[$bananaKey];
//     $fruits[$bananaKey] = $fruits[$orangeKey];
//     $fruits[$orangeKey] =$temp;
// }

//  print_r($fruits);

// $fruits = array('Mango', 'Banana', 'Apple', 'Orange', 'Guava', 'Grapes');

// if (in_array('Banana', $fruits) && in_array('Orange', $fruits)) {
//     $bananaKey = array_search('Banana', $fruits);
//     $orangeKey = array_search('Orange', $fruits);
//     [$fruits[$bananaKey], $fruits[$orangeKey]] = [$fruits[$orangeKey], $fruits[$bananaKey]];
// }

// print_r($fruits);

// calculation

// $a=20;
// $b=10;
// $c=9;
// $d=12;
// $e=1;
// $output = (($a+$b)*($c-$d))/$e;

// echo $output


//---------------------------- 1 to 50----------------------


// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 == 0) {
//      continue;
//     } elseif ($i % 5 == 0) {

//         echo '* ';
//     } else {
//         echo $i . ' ';
//     }

// }


//-------------------------------------------- Get the current day fav color---------

// $currentDay = date("l");

// // Define favorite colors for each day
// $favoriteColors = array(
//     "Monday" => "Blue",
//     "Tuesday" => "Green",
//     "Wednesday" => "Red",
//     "Thursday" => "Yellow",
//     "Friday" => "Purple",
//     "Saturday" => "Orange",
//     "Sunday" => "Pink"
// );


// echo "Your favorite color for $currentDay is: " . $favoriteColors[$currentDay];

// Get the current day
// $currentDay = date("l");

// $favoriteColor = "";
// switch ($currentDay) {
//     case "Monday":
//         $favoriteColor = "Blue";
//         break;
//     case "Tuesday":
//         $favoriteColor = "Green";
//         break;
//     case "Wednesday":
//         $favoriteColor = "Red";
//         break;
//     case "Thursday":
//         $favoriteColor = "Yellow";
//         break;
//     case "Friday":
//         $favoriteColor = "Purple";
//         break;
//     case "Saturday":
//         $favoriteColor = "Orange";
//         break;
//     case "Sunday":
//         $favoriteColor = "Pink";
//         break;
//   
//     }
// echo "Your favorite color for $currentDay is: " . $favoriteColor;


// -----------find leap range---------------

$year_1 = 1980;
$year_2 = 2030;

$leap_year = FindLeapYear($year_1, $year_2);

function FindLeapYear($year_1, $year_2)
{
    $leapyear = array();
    for ($i = $year_1; $i <= $year_2; $i++) {
        if (($i % 400 == 0) || ($i % 100 !== 0 && $i % 4 == 0)) {
            $leapyear[] = $i;
        }
    }
    return $leapyear;
}

echo implode(",",$leap_year);

?>