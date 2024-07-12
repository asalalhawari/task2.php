 <?php 
//PHP String and String Functions	         	


//ex1(a+b+c+d)
$String = "abdallahawaysheh";    
$uppercase = strtoupper($String);
echo $uppercase;
////
echo "<br>";

$String = "abdullahadaileh";
$lowercase = strtolower ($String);
echo $lowercase;
echo "<br>";
$String = "heba";                       
$capitlString = ucfirst($String);
echo $capitlString;
echo "<br>";
$String = "new life with me";
$capitalString = ucwords($String);
echo $capitalString;
echo "<br>";
//ex2
$cString = "20010906";                                 //substrبستعملها عشان استخرج اوكي ولا مش اوكي 
$cString = "20010906";                                 

$year = substr($cString, 0, 4); 
$month = substr($cString, 4, 2); 
$day = substr($cString, 6, 2); 

$formattedDate = $year . ":" . $month . ":" . $day;

echo $formattedDate;


echo "<hr>";
//ex(3)
$keywords = "If you are not a wolf, lions will eat you.";

$word = "lions";
                                                   //strpos (You search for the word you want)

if (strpos($keywords, $word) !== false) {
    echo "'$word' Available";
} else {
    echo 
        "'$word'  not Available";
}

echo "<hr>";


//ex4
$url = "https://github.com/asalalhawari/php";
$path = parse_url($url, PHP_URL_PATH);                          

                                           //basename بتخليني استخرج اسم الملف 
$name = basename($path);


echo $name;


echo "<hr>";


//ex5
$email = "ASALHAWARI2000@gmail.com";
$parts = explode('@', $email);                                    //explode فاصل 
$username = $parts[0];                                       
echo $username;
echo "<hr>";


//ex6


$string = "ASALHAWARI2000@gmail.com";                     //substr تستخرج
$laststring = substr($string, -3);
echo $laststring; 
echo "<hr>";

//ex7

$characters = 'ASALHAWARI06092001@@@alkarakalmzar';                         //shuffle تعمل على خلط
$password_length = 10;
$password = str_shuffle($characters);


$password = substr($password,2, $password_length);
echo $password;
echo "<hr>";
//ex8



$word= "Hello Moamen, welcome to orange Academy";


$new_word = "Amro";


$parts = explode(' ', $word);                                            //explode فاصل 
$parts[0] = $new_word;

$new_words= implode(' ', $parts);

echo $new_words;

echo "<hr>";

//ex9
echo "<hr>";
//ex10


$string = "Hello, world!";
$array = array($string);
var_dump($array);
echo "<hr>";
                                           



$main_string = "asall, zaina!";
$insert_string = "beautiful";
$number = 7;
$new_string = substr_replace($main_string, $insert_string, $number, 0);
echo $new_string;

echo "<hr>";
//ex11
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";

echo "<hr>";
//ex12

$original_string = "asal alhawari";                       //substr_replace     بتخليني ادرج في مكن معين

$insert_string = "sabal";
$position = 5;
$result_string = substr_replace($original_string, $insert_string, $position,0);

echo $result_string;  
echo "<hr>";
//ex13
$number = "0775696927";
$num= str_replace("7", "", $number);               //تبديل 

echo $num;
echo "<hr>";


//ex14

$string = "Hello, my name asal";

$remove = "my name";


$new_string = str_replace($remove, "", $string);
echo  $new_string;

echo "<hr>";

//ex15


function removeTrailingDashes($str) {
    return rtrim($str, '-');
    $original_string  ="";
$result_string = removeTrailingDashes($original_string);
}
echo  $result_string;

echo "<hr>";
//ex16
function removeSpecialCharacters($str) {
   
    return preg_replace('/[^a-zA-Z0-9]/', '', $str);
}

$original_string = "Hello@World! sodsp256slkd_sj___  123#";
$result_string = removeSpecialCharacters($original_string);
echo  $result_string;

echo "<hr>";

//ex17
function getFirstFiveWords($str) {                        //explode بنخليني اقسم str
    $words = explode(' ', $str);
     $first_five_words = array_slice($words, 0, 5);
    
   
    return implode(' ', $first_five_words);
}
$original_string = "asal suliman saed alhawari from in aqaba";
$result_string = getFirstFiveWords($original_string);
echo  $result_string;
echo "<hr>";
//ex18
$numbers="2001,96,55,000.000";
$numbers_commas= str_replace(",","", $numbers);
echo $numbers_commas;
echo "<hr>";
//ex19
                                               //ord بالترتيب
for ($i = ord('a'); $i <= ord('z'); $i++) {  //chr انه زيدلي الي بعده او اعطيني 
    echo chr($i) . " ";
}
echo "<hr>";
//Loops 
//EX(1)

$result = '';

for ($m = 1; $m <= 10; $m++) {
    if ($m != 1) {
        $result .= '-';
    }
    
    $result .= $m;
}


echo $result;
echo "<hr>";
//EX(2)                                             
$total = 0;

for ($a = 0; $a <= 30; $a++) {
    $total += $i;
}
echo  $total;

echo "<hr>";
//EX(3)

$side =5 ; 

for ($row = 1; $row <= $side; $row++) {
    for ($col =1; $col <= $side; $col++) {
        echo " * "; 
    }
    echo "<br>"; 
}
echo "<hr>";
//EX(4)     
$num = 5; 
$factorial = 1;

for ($a = 1; $a <= $num; $a++) {
    $factorial *= $a;
}

echo $num . $factorial;
echo "<hr>";

//EX(5) 

$num_terms = 10; 
$a = 0; 
$b = 1; 

echo $num_terms ;

echo "$a, "; 

for ($d = 1; $d < $num_terms; $d++) {
    echo "$b"; 
    
    if ($d < $num_terms - 1) {
        echo ", ";
    }
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
echo "<hr>";
//EX(6)

$word= "The Hashemite Kingdom of Jordan";
$key= 'K';
$star=0;
for($a=0; $a<strlen($word); $a++){     
    if($word[$a] == $key){
        $star++;
    }
}
echo $star;

echo "<hr>";
//EX(7) 
for($a=1; $a<=6; $a++)
echo "<tr>";{
    for($s=1; $s<=5; $s++){
        echo "<td>$a * $s = " . $a * $s. "</td>";
    }
    echo "</tr>";
}
echo "<hr>";
//EX(8) 
//I couldn't solve this question
////////////////////////////
echo "<hr>";
//EX(9) 
//FunctionsEx(1)

function generateFloydTriangle($e) {                         
    $number = 1; 

   
    for ($a = 1; $a <= $e; $a++) {
       
        for ($m = 1; $m <= $a; $m++) {
            echo $number . " ";                //" ";  مسافة بين              
            $number++; 
        }
        echo "<br>";                                           //عشان ينقل على سطر الي بعده
    }
}

$e = 5; 
generateFloydTriangle($e);

//Ex(2)
echo "<hr>";
function is_prime($number) {                             
   
    if ($number < 5) {
        return false;
    }
    

    for ($i = 5; $i <= sqrt($number); $i++) {                       
        if ($number % $i == 0) {
            return false;
        }
    }                                                       //1, 2, 3, 5, 7, 11, 13
    
    return true;                                                 //
}
$number = 11; 
if (is_prime($number)) {
    echo "{$number}  prime number.";
} else {
    echo "{$number}  not a prime .";
}
echo "<hr>";

//Ex(3)

function reverse_string($str) {
  
    return strrev($str);
}


$string = "asal alhawari";


$reversed_string = reverse_string($string);

echo  $reversed_string;

echo "<hr>";

//Ex(4)
function is_all_lowercase($a){
    return ctype_lower($a);
    
}

$a="asalhawari";
if(is_all_lowercase($a)){
    echo "yes lowercase";
} 
else{
    echo "not lowercase";
}
echo "<hr>";

//Ex(5)

function swap($a,$b){
    $sd=$a;
    $a = $b;
    $b = $sd;
}
$k=8;
$y = 10;

swap($k,$y);

echo  $k .(" , ") .$y;

echo "<hr>";

//Ex(6)
//Question repeated
echo "<hr>";

//Ex(7)
//I didn't know the solution to the question 
echo "<hr>";
//Ex(8)



?>