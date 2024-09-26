PHP is a widely-used open-source scripting language designed for web development 🌐. It's known for its ease of use and ability to embed directly within HTML, making it a popular choice for creating dynamic web pages and applications 📄. PHP powers many popular websites and frameworks, like WordPress and Laravel, offering extensive support for databases like MySQL and PostgreSQL 🗄️. With its strong community and continuous updates, PHP remains a vital tool in the web development world 🚀.


 1st CA Questions
 1.	PHP Program to Convert Binary Number to Decimal
2.	Program to convert decimal number to binary
3.	PHP Program for calculate Power Using pow() Function
4.	PHP program for Copy String Without Using strcpy()
5.	PHP Program to Check Whether a Character is an Alphabet or not
6.	PHP Program to Sum of Natural Numbers Using while Loop
7.	PHP Program to Find Missing Numbers in Array
8.	PHP Program to Print all Non Repeated Elements in an Array
9.	PHP Program to Find Matrix Multiplication
10.	PHP Program to Simple Calculator using switch Statement
11.	PHP Program to Find Determinant of a Matrix
12.	PHP Program to display Inverted half pyramid of numbers
13.	PHP Program to display Inverted full pyramid of stars(“*”)
14.	PHP Program to display Half Pyramid of Alphabets
15.	PHP Program to display Inverted half pyramid of *.
16.	PHP Program to display Half Pyramid of *
17.	PHP Program to Find the Frequency of a Character
18.	PHP Program to Calculate Length of String without Using strlen() Function
19.	PHP Program to Swap Elements Using Call by Reference
20.	Create a PHP program to Check Vowel or consonant.
21.	PHP Program to Find the Roots of a Quadratic Equation
22.	PHP Program to Generate Multiplication Table
23.	PHP Program to Display Fibonacci Sequence
24.	PHP Program to Print Lowercase/Uppercase alphabets
25.	PHP Program to Print Armstrong Numbers Between Two Integers
26.	PHP Program to Print Prime Numbers Between Two Integers
27.	PHP Program to Find the Transpose of a Matrix
28.	PHP Program to Swap Elements
29.	PHP Sum of Natural Numbers Using Function
30.	Access Array Elements Using PHP Program
31.	PHP Program to Multiply Matrices by Passing it to a Function
Answer of the above question
Below are the PHP solutions to the requested problems:

1. *Convert Binary Number to Decimal*
   php
   <?php
   function binaryToDecimal($binary) {
       return bindec($binary);
   }

   echo binaryToDecimal('1011'); // Output: 11
   ?>
   

2. *Convert Decimal Number to Binary*
   php
   <?php
   function decimalToBinary($decimal) {
       return decbin($decimal);
   }

   echo decimalToBinary(11); // Output: 1011
   ?>
   

3. **Calculate Power Using pow() Function**
   php
   <?php
   echo pow(2, 3); // Output: 8
   ?>
   

4. **Copy String Without Using strcpy()**
   php
   <?php
   function copyString($str) {
       $newStr = '';
       for ($i = 0; isset($str[$i]); $i++) {
           $newStr .= $str[$i];
       }
       return $newStr;
   }

   echo copyString("Hello"); // Output: Hello
   ?>
   

5. *Check Whether a Character is an Alphabet*
   php
   <?php
   function isAlphabet($char) {
       if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
           return true;
       }
       return false;
   }

   echo isAlphabet('A') ? 'Alphabet' : 'Not Alphabet'; // Output: Alphabet
   ?>
   

6. **Sum of Natural Numbers Using while Loop**
   php
   <?php
   $n = 10;
   $sum = 0;
   $i = 1;

   while ($i <= $n) {
       $sum += $i;
       $i++;
   }

   echo "Sum: $sum"; // Output: Sum: 55
   ?>
   

7. *Find Missing Numbers in Array*
   php
   <?php
   function findMissingNumbers($arr, $n) {
       $missing = [];
       for ($i = 1; $i <= $n; $i++) {
           if (!in_array($i, $arr)) {
               $missing[] = $i;
           }
       }
       return $missing;
   }

   $arr = [1, 2, 4, 6];
   print_r(findMissingNumbers($arr, 6)); // Output: [3, 5]
   ?>
   

8. *Print All Non-Repeated Elements in an Array*
   php
   <?php
   function nonRepeatedElements($arr) {
       $count = array_count_values($arr);
       $nonRepeated = array_filter($count, function($v) {
           return $v == 1;
       });
       return array_keys($nonRepeated);
   }

   $arr = [1, 2, 2, 3, 4, 4, 5];
   print_r(nonRepeatedElements($arr)); // Output: [1, 3, 5]
   ?>
   

9. *Matrix Multiplication*
   php
   <?php
   function multiplyMatrix($matrix1, $matrix2) {
       $result = [];
       for ($i = 0; $i < count($matrix1); $i++) {
           for ($j = 0; $j < count($matrix2[0]); $j++) {
               $result[$i][$j] = 0;
               for ($k = 0; $k < count($matrix2); $k++) {
                   $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
               }
           }
       }
       return $result;
   }

   $matrix1 = [[1, 2], [3, 4]];
   $matrix2 = [[5, 6], [7, 8]];
   print_r(multiplyMatrix($matrix1, $matrix2));
   ?>
   

10. **Simple Calculator Using switch Statement**
   php
   <?php
   function calculator($num1, $num2, $operator) {
       switch ($operator) {
           case '+':
               return $num1 + $num2;
           case '-':
               return $num1 - $num2;
           case '*':
               return $num1 * $num2;
           case '/':
               return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
           default:
               return "Invalid operator";
       }
   }

   echo calculator(10, 5, '+'); // Output: 15
   ?>
   

11. *Find Determinant of a Matrix (2x2 Matrix)*
   php
   <?php
   function determinant2x2($matrix) {
       return ($matrix[0][0] * $matrix[1][1]) - ($matrix[0][1] * $matrix[1][0]);
   }

   $matrix = [[1, 2], [3, 4]];
   echo determinant2x2($matrix); // Output: -2
   ?>
   

12. *Display Inverted Half Pyramid of Numbers*
   php
   <?php
   function invertedHalfPyramid($n) {
       for ($i = $n; $i >= 1; $i--) {
           for ($j = 1; $j <= $i; $j++) {
               echo $j . " ";
           }
           echo "\n";
       }
   }

   invertedHalfPyramid(5);
   ?>
   

13. *Display Inverted Full Pyramid of Stars*
   php
   <?php
   function invertedFullPyramid($n) {
       for ($i = $n; $i >= 1; $i--) {
           for ($j = $n - $i; $j > 0; $j--) {
               echo " ";
           }
           for ($j = 1; $j <= 2 * $i - 1; $j++) {
               echo "*";
           }
           echo "\n";
       }
   }

   invertedFullPyramid(5);
   ?>

   Here are the PHP solutions for problems 13 to 30:

13. **Display Inverted Full Pyramid of Stars (*)**
   php
   <?php
   function invertedFullPyramid($n) {
       for ($i = $n; $i >= 1; $i--) {
           for ($j = $n - $i; $j > 0; $j--) {
               echo " ";
           }
           for ($j = 1; $j <= 2 * $i - 1; $j++) {
               echo "*";
           }
           echo "\n";
       }
   }

   invertedFullPyramid(5);
   ?>
   

14. *Display Half Pyramid of Alphabets*
   php
   <?php
   function halfPyramidAlphabets($n) {
       $alphabet = 'A';
       for ($i = 1; $i <= $n; $i++) {
           for ($j = 1; $j <= $i; $j++) {
               echo $alphabet . " ";
           }
           $alphabet++;
           echo "\n";
       }
   }

   halfPyramidAlphabets(5);
   ?>
   

15. **Display Inverted Half Pyramid of Stars (*)**
   php
   <?php
   function invertedHalfPyramidStars($n) {
       for ($i = $n; $i >= 1; $i--) {
           for ($j = 1; $j <= $i; $j++) {
               echo "* ";
           }
           echo "\n";
       }
   }

   invertedHalfPyramidStars(5);
   ?>
   

16. **Display Half Pyramid of Stars (*)**
   php
   <?php
   function halfPyramidStars($n) {
       for ($i = 1; $i <= $n; $i++) {
           for ($j = 1; $j <= $i; $j++) {
               echo "* ";
           }
           echo "\n";
       }
   }

   halfPyramidStars(5);
   ?>
   

17. *Find the Frequency of a Character*
   php
   <?php
   function characterFrequency($string, $char) {
       $count = 0;
       for ($i = 0; $i < strlen($string); $i++) {
           if ($string[$i] == $char) {
               $count++;
           }
       }
       return $count;
   }

   echo characterFrequency("hello world", "l"); // Output: 3
   ?>
   

18. **Calculate Length of String Without Using strlen() Function**
   php
   <?php
   function stringLength($string) {
       $length = 0;
       while (isset($string[$length])) {
           $length++;
       }
       return $length;
   }

   echo stringLength("Hello"); // Output: 5
   ?>
   

19. *Swap Elements Using Call by Reference*
   php
   <?php
   function swap(&$a, &$b) {
       $temp = $a;
       $a = $b;
       $b = $temp;
   }

   $x = 5;
   $y = 10;
   swap($x, $y);
   echo "x = $x, y = $y"; // Output: x = 10, y = 5
   ?>
   

20. *Check Vowel or Consonant*
   php
   <?php
   function checkVowelOrConsonant($char) {
       $char = strtolower($char);
       if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
           return "Vowel";
       } else {
           return "Consonant";
       }
   }

   echo checkVowelOrConsonant('A'); // Output: Vowel
   ?>
   

21. *Find the Roots of a Quadratic Equation*
   php
   <?php
   function findRoots($a, $b, $c) {
       $discriminant = $b * $b - 4 * $a * $c;

       if ($discriminant > 0) {
           $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
           $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
           return "Root 1: $root1, Root 2: $root2";
       } elseif ($discriminant == 0) {
           $root = -$b / (2 * $a);
           return "Root: $root";
       } else {
           return "No real roots";
       }
   }

   echo findRoots(1, -3, 2); // Output: Root 1: 2, Root 2: 1
   ?>
   

22. *Generate Multiplication Table*
   php
   <?php
   function multiplicationTable($num) {
       for ($i = 1; $i <= 10; $i++) {
           echo "$num x $i = " . ($num * $i) . "\n";
       }
   }

   multiplicationTable(5);
   ?>
   

23. *Display Fibonacci Sequence*
   php
   <?php
   function fibonacci($n) {
       $num1 = 0;
       $num2 = 1;
       $counter = 0;

       while ($counter < $n) {
           echo $num1 . " ";
           $num3 = $num2 + $num1;
           $num1 = $num2;
           $num2 = $num3;
           $counter++;
       }
   }

   fibonacci(10); // Output: 0 1 1 2 3 5 8 13 21 34
   ?>
   

24. *Print Lowercase/Uppercase Alphabets*
   php
   <?php
   function printAlphabets() {
       for ($char = 'a'; $char <= 'z'; $char++) {
           echo $char . " ";
       }
       echo "\n";
       for ($char = 'A'; $char <= 'Z'; $char++) {
           echo $char . " ";
       }
   }

   printAlphabets();
   ?>
   

25. *Print Armstrong Numbers Between Two Integers*
   php
   <?php
   function isArmstrong($num) {
       $sum = 0;
       $temp = $num;
       $n = strlen((string)$num);

       while ($temp != 0) {
           $digit = $temp % 10;
           $sum += pow($digit, $n);
           $temp = (int)($temp / 10);
       }

       return $sum == $num;
   }

   function armstrongNumbersBetween($start, $end) {
       for ($i = $start; $i <= $end; $i++) {
           if (isArmstrong($i)) {
               echo $i . " ";
           }
       }
   }

   armstrongNumbersBetween(1, 500);
   ?>
   

26. *Print Prime Numbers Between Two Integers*
   php
   <?php
   function isPrime($num) {
       if ($num <= 1) return false;
       for ($i = 2; $i <= sqrt($num); $i++) {
           if ($num % $i == 0) return false;
       }
       return true;
   }

   function primeNumbersBetween($start, $end) {
       for ($i = $start; $i <= $end; $i++) {
           if (isPrime($i)) {
               echo $i . " ";
           }
       }
   }

   primeNumbersBetween(1, 100);
   ?>
   

27. *Find the Transpose of a Matrix*
   php
   <?php
   function transposeMatrix($matrix) {
       $transpose = [];
       for ($i = 0; $i < count($matrix[0]); $i++) {
           for ($j = 0; $j < count($matrix); $j++) {
               $transpose[$i][$j] = $matrix[$j][$i];
           }
       }
       return $transpose;
   }

   $matrix = [[1, 2], [3, 4], [5, 6]];
   print_r(transposeMatrix($matrix));
   ?>
   

28. *Swap Elements*
   php
   <?php
   function swapElements(&$arr, $index1, $index2) {
       $temp = $arr[$index1];
       $arr[$index1] = $arr[$index2];
       $arr[$index2] = $temp;
   }

   $arr = [1, 2, 3, 4];
   swapElements($arr, 1, 3);
   print_r($arr); // Output: [1, 4, 3, 2]
   ?>
   

29. *Sum of Natural Numbers Using Function*
   php
   <?php
   function sumOfNaturalNumbers($n) {
       return $n * ($n + 1) / 2;
   }

   echo sumOfNaturalNumbers(10); // Output: 55
   ?>
   

30. *Access Array Elements Using PHP Program*
   ```php
   <?php
   $arr = [10, 20
