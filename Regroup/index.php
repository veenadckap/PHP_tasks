<?php
// -----------------------heredoc-(double quote action)---------------------------------------------------
// $a=2;
// $b=3;

// $name=<<<HI
// line 1 $b
// line 2 $a
// line 3
// HI;

// echo nl2br($name);
// echo $name;
// --------------------------------nowdoc-(single quote action)--------------------------------------------------
// $x=2;

// $name=<<<'HI'
// line 1
// line 2 $x
// line 3
// HI;

// echo nl2br($name);
// echo $name;


//-----------------------example-1-----------------------



// $name = "John";
// $age = 30;

// $paragraph = <<<'HTML'
// <p>Hello, my name is $name 
// and I am $age years old.</p>
// HTML;

// echo nl2br($paragraph);




//---------------------------------example-3---------------------------------
// $html = <<<HTML
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Example</title>
//     <style>
//         body {
//             font-family: Arial, sans-serif;
//             background-color: #f0f0f0;
//             margin: 0;
//             padding: 0;
//         }
//         h1 {
//             color: #333;
//             text-align: center;
//         }
//     </style>
// </head>
// <body>
//     <h1>Welcome to My Website</h1>
//     <p>This is a paragraph within a PHP variable.</p>
// </body>
// </html>
// HTML;

// echo $html;

// -----------------------------------example-4----------------------------

// $paragraph = <<<HTML
// <p>This is a paragraph of 
// text within a PHP variable. 
// It can contain <strong>HTML</strong> markup and be easily
//  inserted into an HTML page.</p>
// HTML;

// echo nl2br($paragraph);




// function romanToDecimal($roman) {
    // $romanNumerals = [
    //     'I' => 1,
    //     'V' => 5,
    //     'X' => 10,
    //     'L' => 50,
    //     'C' => 100,
    //     'D' => 500,
    //     'M' => 1000
    // ];

    // $decimal = 0;

    // for ($i = 0; $i < strlen($roman); $i++) {
    //     if ($i > 0 && $romanNumerals[$roman[$i]] > $romanNumerals[$roman[$i - 1]]) {
    //         $decimal += $romanNumerals[$roman[$i]] - 2 * $romanNumerals[$roman[$i - 1]];
    //     } else {
    //         $decimal += $romanNumerals[$roman[$i]];
    //     }
    // }

    // return $decimal;
// // Example usage:
// echo romanToDecimal("MM") . "\n";      
// echo romanToDecimal("MDCLXVI") . "\n";
// echo romanToDecimal("M") . "\n";      
// echo romanToDecimal("CD") . "\n";    
// echo romanToDecimal("XC") . "\n";     
// echo romanToDecimal("XL") . "\n";   
// echo romanToDecimal("I") . "\n";       

//------------------------------------------------------------------------------
    // function smash(array $words) {

    // // print_r($words);
    // $new= implode(" ", $words);
    // echo $new;

  
// }


    // $words=['hello', 'world', 'this', 'is', 'great'];
    // smash($words);


//----------------------------------------------------------------------------------------

//function solution($str, $ending) {
   
//    echo $str;
//    echo "<br>";
//    echo $ending;

//   for ($i=0; $i <strlen($str); $i++) {
//     for ($k=$ending-1; $k <0 ; $k++) {
//         echo $ending[$k];
//     }
//
//   }
//}
//solution('abc', 'bc');

//echo(mt_rand() . "<br>");
//echo(mt_rand() . "<br>");
//echo(mt_rand(10,100));

function unique_id(){
    $chars='0123456789abcdefghijklmnopqrstuvwxyz';
    $charLength=strlen($chars);
    $randomString='';
    for($i=0;$i < 20 ;$i++){
        $randomString .= $chars[mt_rand(0,$charLength-1)];
    }
    return $randomString;
}

echo unique_id();
?>

