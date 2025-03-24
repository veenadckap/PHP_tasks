<?php

// function reverse($x) {
//         $isNegative = $x < 0;
//         $x = abs($x);
//         $reversed = (int)strrev((string)$x);

//         if ($isNegative) {
//             $reversed *= -1;
//         }

       
//         if ($reversed < pow(-2, 31) || $reversed > pow(2, 31) - 1) {
//             return 0;
//         }

//        echo  $reversed;
//     }


//     $number=123;
//     reverse($number);


// // Add Two Numbers
// $number_one = [2, 4, 3];
// $number_two = [5, 6, 4];
// addTwoNumbers($number_one, $number_two);

// function addTwoNumbers($l1, $l2) {
//     $string_1 = implode("", $l1);
//     $string_rev_1=strrev($string_1);
   
//     $string_2 = implode("", $l2);
//     $string_rev_2=strrev($string_2);
   
    
//     $sum = $string_rev_1 + $string_rev_2;
//     $sum_str = (string)$sum;
//     $digits = str_split(strrev($sum_str));
//     $result = array_map('intval', $digits);
//     return $result;
//     print_r($result);
// }

// 

// $list1 = [1,2,4];
// $list2 = [1,3,4];
// mergeTwoLists($list1, $list2);

// function mergeTwoLists($list1, $list2) {
//     $merge = array_merge($list1, $list2);
//     print_r($merge);
//     echo "<br><br>";
    
//     sort($merge); 

//     print_r($merge);
// }


// $list1 = [1,2,4];
// $list2 = [1,3,4];
// mergeTwoLists($list1, $list2);



// function mergeTwoLists($list1, $list2) {
//     // $merge = [];
    

    // foreach ($list1 as $item) {
    //     $merge[] = $item;
    // }
    // foreach ($list2 as $item) {
    //     $merge[] = $item;
    // }
 
    // $length = count($merge);
    // for ($i = 0; $i < $length - 1; $i++) {
    //     for ($j = 0; $j < $length - $i - 1; $j++) {
    //         if ($merge[$j] > $merge[$j + 1]) {
    //             $temp = $merge[$j];
    //             $merge[$j] = $merge[$j + 1];
    //             $merge[$j + 1] = $temp;
    //         }
    //     }
    // }
    
    // print_r($merge);
//         $merge = [];
    

//     foreach ($list1 as $item) {
//         $merge[] = $item;
//     }
//     foreach ($list2 as $item) {
//         $merge[] = $item;
//     }
 
//     sort($merge);
    
    
//     print_r($merge);
// }

$nums = [1,2,3,4,5];
 $k = 2;
 rotate($nums,$k);
function rotate(&$nums, $k) {
    // print_r($nums);
    // echo "<br>";
        $len = count($nums);
        $k %= $len;
        // echo $k;
        // echo "<br>";
        // echo $len;
        $res = array_slice($nums, 0, $len-$k);
        // echo "<br>";
        // print_r($res);
        $slice = array_slice($nums, $len - $k, $k);
        // echo "<br>";
        // print_r($slice);
        $nums = array_merge($slice, $res);
        // echo "<br>";
            print_r($nums); 
}

// function wordBreak($s, $wordDict) {
//     $n = strlen($s);
//     $dp = array_fill(0, $n + 1, false);
//     $dp[0] = true;

//     for ($i = 1; $i <= $n; $i++) {
//         for ($j = 0; $j < $i; $j++) {
//             if ($dp[$j] && in_array(substr($s, $j, $i - $j), $wordDict)) {
//                 $dp[$i] = true;
//                 break;
//             }
//         }
//     }

//     return $dp[$n];
// }





//    function longestPalindrome($s) {
//     $n = strlen($s);
//     if ($n <= 1) return $s;

//     $start = 0;
//     $maxLength = 1;
//     $dp = array_fill(0, $n, array_fill(0, $n, false));

   
//     for ($i = 0; $i < $n; $i++) {
//         $dp[$i][$i] = true;
//     }

 
//     for ($i = 0; $i < $n - 1; $i++) {
//         if ($s[$i] == $s[$i + 1]) {
//             $dp[$i][$i + 1] = true;
//             $start = $i;
//             $maxLength = 2;
//         }
//     }

   
//     for ($length = 3; $length <= $n; $length++) {
//         for ($i = 0; $i <= $n - $length; $i++) {
//             $j = $i + $length - 1;
//             if ($s[$i] == $s[$j] && $dp[$i + 1][$j - 1]) {
//                 $dp[$i][$j] = true;
//                 $start = $i;
//                 $maxLength = $length;
//             }
//         }
//     }

//     return substr($s, $start, $maxLength);
// }


// $s1 = "babad";
// echo longestPalindrome($s1) . "\n";

// $s2 = "cbbd";
// echo longestPalindrome($s2) . "\n";



// function longestCommonPrefix($strs) {
//     if (empty($strs)) {
//         return "";
//     }

//     $prefix = $strs[0]; 

//     foreach ($strs as $str) {
       
//         while (strpos($str, $prefix) !== 0) {
//             $prefix = substr($prefix, 0, -1);
//             if (empty($prefix)) {
//                 return "";
//             }
//         }
//     }

//     return $prefix;
// }

// // Test cases
// $strs1 = ["flower", "flow", "flight"];
// echo longestCommonPrefix($strs1) . "\n";

// $strs2 = ["dog", "racecar", "car"];
// echo longestCommonPrefix($strs2) . "\n";



// 41 Missing positive number

// function smallestMissingPositive($nums) {
//     $n = count($nums);
    
//     // Replace non-positive numbers with a number greater than n
//     for ($i = 0; $i < $n; $i++) {
//         if ($nums[$i] <= 0) {
//             $nums[$i] = $n + 1;
//         }
//     }
    
//     // Mark positive elements within the range [1, n] as negative
//     for ($i = 0; $i < $n; $i++) {
//         $index = abs($nums[$i]);
//         if ($index <= $n && $nums[$index - 1] > 0) {
//             $nums[$index - 1] = -$nums[$index - 1];
//         }
//     }
    
//     // Find the first positive element's index, which indicates the smallest missing positive integer
//     for ($i = 0; $i < $n; $i++) {
//         if ($nums[$i] > 0) {
//             return $i + 1;
//         }
//     }
    
//     // If all numbers from 1 to n are present, return n+1
//     return $n + 1;
// }

// $nums = [3,4,-1,1];
// echo smallestMissingPositive($nums);



// 35. Search Insert Position

// function searchInsert($nums, $target) {
//     foreach ($nums as $index => $num) {
//         if ($num >= $target) {
//             return $index;
//         }
//     }
//     return count($nums); 
// }

// $nums = [1, 3, 5, 6];
// $target = 13;
// echo searchInsert($nums, $target);

// function singleNumber($nums) {
    
//     $counts = array();
    
    
//     foreach ($nums as $num) {
//         if (isset($counts[$num])) {
//             // If the number already exists in the array, decrement its count
//             $counts[$num]--;
//         } else {
//             // If the number doesn't exist in the array, set its count to 1
//             $counts[$num] = 1;
//         }
//     }
    
//     // Iterate through array to find the number with count 1, which is the single number
//     foreach ($counts as $num => $count) {
//         if ($count == 1) {
//             return $num;
//         }
//     }
// }

// $nums = [2,2,1];
// singleNumber($nums);
// echo singleNumber($nums);


// $string='23';
// letterCombinations($string);

// function letterCombinations($digits) {
//     if (empty($digits)) {
//         return [];
//     }
    
//     $mapping = [
//         '2' => ['a', 'b', 'c'],
//         '3' => ['d', 'e', 'f'],
//         '4' => ['g', 'h', 'i'],
//         '5' => ['j', 'k', 'l'],
//         '6' => ['m', 'n', 'o'],
//         '7' => ['p', 'q', 'r', 's'],
//         '8' => ['t', 'u', 'v'],
//         '9' => ['w', 'x', 'y', 'z']
//     ];
    
//     $result = [];
//     $queue = [''];
    
//   for ($i = 0; $i < strlen($digits); $i++) {
//     $digit = $digits[$i];
//     while (count($queue) > 0 && strlen($queue[0]) == $i) {
//         $current = array_shift($queue);
//         echo "Current combination: $current\n";

//         foreach ($mapping[$digit] as $char) {
//             $newCombination = $current . $char;
//             echo "Adding to queue: $newCombination\n";
//             $queue[] = $newCombination;
//         }
//     }
// }
    
//     return $queue;
// }

// // Test cases
// echo "<pre>";
// print_r(letterCombinations("23"));
// print_r(letterCombinations(""));
// print_r(letterCombinations("2"));
// echo "</pre>";

// function rotateArray($head, $k) {
//        $k = $k % count($head);
    
   
//     if ($k == 0) {
//         return $head;
//     }
    
//        $firstPart = array_slice($head, count($head) - $k);
//     $secondPart = array_slice($head, 0, count($head) - $k);
    
   
//     return array_merge($firstPart, $secondPart);
// }

// // Example 1
// $head1 = [1,2,3,4,5];
// $k1 = 2;
// $output1 = rotateArray($head1, $k1);
// echo "Example 1 Output: " . implode(",", $output1) . "\n";

// // Example 2
// $head2 = [0,1,2];
// $k2 = 4;
// $output2 = rotateArray($head2, $k2);
// echo "Example 2 Output: " . implode(",", $output2) . "\n";




// function coinChange($coins, $amount) {
//    rsort($coins);

//     $count = 0;


//     foreach ($coins as $coin) {

//         while ($coin <= $amount) {

//             $amount -= $coin;

//             $count++;
//         }
//     }

//     return $amount === 0 ? $count : -1;
// }


// $coins1 = [1, 2, 5];
// $amount1 = 11;
// echo coinChange($coins1, $amount1) . "\n"; 

// $coins2 = [2];
// $amount2 = 3;
// echo coinChange($coins2, $amount2) . "\n"; 
// $coins3 = [1];
// $amount3 = 0;
// echo coinChange($coins3, $amount3) . "\n"; 




// function isInterleave($s1, $s2, $s3) {
//     $m = strlen($s1);
//     $n = strlen($s2);
//     $len = strlen($s3);
   
//     if ($m + $n !== $len) {
//         return false;
//     }
    
//     $i = 0;
//     $j = 0;
    
//     for ($k = 0; $k < $len; $k++) {
//         if ($i < $m && $s1[$i] === $s3[$k]) {
//             $i++;
//         } elseif ($j < $n && $s2[$j] === $s3[$k]) {
//             $j++;
//         } else {
//             return false;
//         }
//     }
    
//     return true;
// }

// $s1 = "aabcc";
// $s2 = "dbbca";
// $s3 = "aadbbbaccc";


// isInterleave($s1,$s2,$s3);

// echo isInterleave($s1,$s2,$s3);



// function minOperations($n) {
//     $count = 0;
//     while ($n > 1) {
//         if ($n % 2 == 0) {
//             $n /= 2;
//         } else {
//             if (($n - 1) % 4 == 0 || $n == 3) {
//                 $n--;
//             } else {
//                 $n++;
//             }
//         }
//         $count++;
//     }
//     return $count;
// }

// // Example usage:
// $n1 = 8;
// echo "Minimum operations for $n1: " . minOperations($n1) ;

// $n2 = 7;
// echo "Minimum operations for $n2: " . minOperations($n2) ;

// $n3 = 4;
// echo "Minimum operations for $n3: " . minOperations($n3) ;

//   function rotateRight($head, $k) {
   
//     if (empty($head) || $k === 0) {
//         echo "[" . implode(", ", $head) . "]\n";
//         return;
//     }

    
//     $length = count($head);

   
//     $k = $k % $length;
//     if ($k === 0) {
//         echo "[" . implode(", ", $head) . "]\n";
//         return;
//     }

  
//     $tail = array_slice($head, -$k);
//     $newHead = array_merge($tail, array_slice($head, 0, $length - $k));

   
//     return "[" . implode(", ", $newHead) . "]\n";
//     }

//     $head = [1,2,3,4,5];
//      $k = 2;
//   rotateRight($head,$k);




// function shortestPalindrome($s) {
//     $rev = strrev($s); // Reverse the string
//     $n = strlen($s);
//     for ($i = 0; $i < $n; $i++) {
//         // Check if the suffix of the reversed string matches the prefix of the original string
//         if (substr($s, 0, $n - $i) == substr($rev, $i)) {
//             // If it matches, prepend the remaining characters of the reversed string to the original string
//             return substr($rev, 0, $i) . $s;
//         }
//     }
//     // If no palindrome is found, the original string itself is a palindrome
//     return $s;
// }

// // Example usage:
// $s1 = "aacecaaa";
// echo shortestPalindrome($s1) . "\n"; // Output: "aaacecaaa"

// $s2 = "abcd";
// echo shortestPalindrome($s2) . "\n"; // Output: "dcbabcd"

function ladderLength($beginWord, $endWord, $wordList) {
    // Convert the wordList to a set for faster lookup
    $wordSet = array_flip($wordList);

    // Check if the endWord is not in the wordList
    if (!isset($wordSet[$endWord])) {
        return 0;
    }

    $queue = [$beginWord];
    $visited = [$beginWord => true];
    $level = 1;

    while (!empty($queue)) {
        $count = count($queue);
        for ($i = 0; $i < $count; $i++) {
            $currentWord = array_shift($queue);

            // Generate all possible next words by changing one letter at a time
            for ($j = 0; $j < strlen($currentWord); $j++) {
                $originalChar = $currentWord[$j];
                for ($k = 0; $k < 26; $k++) {
                    $currentWord[$j] = chr(ord('a') + $k);
                    // If the new word is the endWord, return the level
                    if ($currentWord === $endWord) {
                        return $level + 1;
                    }
                    // If the new word is in the wordList and not visited yet, add it to the queue
                    if (isset($wordSet[$currentWord]) && !isset($visited[$currentWord])) {
                        $queue[] = $currentWord;
                        $visited[$currentWord] = true;
                    }
                }
                $currentWord[$j] = $originalChar;
            }
        }
        $level++;
    }

    // If no transformation sequence is found
    return 0;
}

// Example usage:
$beginWord1 = "hit";
$endWord1 = "cog";
$wordList1 = ["hot","dot","dog","lot","log","cog"];
echo ladderLength($beginWord1, $endWord1, $wordList1) . "\n"; // Output: 5

$beginWord2 = "hit";
$endWord2 = "cog";
$wordList2 = ["hot","dot","dog","lot","log"];
echo ladderLength($beginWord2, $endWord2, $wordList2) . "\n"; // Output: 0



// function lengthOfLIS($nums) {
//     $n = count($nums);
//     if ($n === 0) {
//         return 0;
//     }
    
//     $same = array_fill(0, $n, 1); 
    
//     for ($i = 1; $i < $n; $i++) {
//         for ($j = 0; $j < $i; $j++) {
//             if ($nums[$i] > $nums[$j]) {
//                 $same[$i] = max($same[$i], $same[$j] + 1);
//             }
//         }
//     }
    
//     return max($same); 
// }

// $nums1 = [10,9,2,5,3,7,101,18];
// echo lengthOfLIS($nums1) . "\n";

// $nums2 = [0,1,0,3,2,3];
// echo lengthOfLIS($nums2) . "\n";

// $nums3 = [7,7,7,7,7,7,7];
// echo lengthOfLIS($nums3) . "\n";

?>

