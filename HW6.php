<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php
echo "Denzel Tovar" . "<br>";
echo "PHP Basics" . "<br>";
echo "Match 3rd, 2020" . "<br>" ;
// Question 1
echo "<br>" . "Question 1:" . "<br>";
$date =  date('Y-m-d', time());
$date = str_replace("-","/", $date);
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


//Question 2 $compare is = to 1
echo "<br>" . "<br>" . "Question 2:";
$compare = strcmp($date, $tar);
if($compare > 0){
    echo "<br>" . "The Future" . "<br>";
} elseif($compare = 0) {
    echo "Oops";
} else {
    echo "The past";
}
//Question 3
echo "<br>" . "Question 3" . "<br>";
$lastPos = 0;
$positions = array();
$char = "/";
echo "The positions are:" . "<br>";
while(($lastPos = strpos($date, $char, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($char);
}
foreach ($positions as $value) {
    echo $value ."<br>";
}
//Question 4
echo "<br>" . "Question 4:" . "<br>";
$q4 = str_word_count($date);
echo $q4;
//Question 5
echo "<br>" . "<br>" . "Question 5:";
$string = "hello IS218";
$q5 = ord($string);
echo "<br>" . "The ASCII value of the first charater of the string is: " . $q5 . "<br>" ;
// Question 6
echo "<br>" . "Question 6:" . "<br>";
$stringl = "this is homework for php basics" ;
$stringla = strlen($stringl);
echo "The lenth of the string is : " . $stringla . "<br>";
// Question 7
echo "<br>" . "Question 7:" . "<br>";
$date2 = substr($date, -2);
echo $date2 . "<br>" ;
//Question 8
echo "<br>" . "Question 8:" . "<br>";
print_r(explode("/",$date));
echo "<br>";
// Question 9
echo "<br>" . "Question 9:" . "<br>";
foreach($year as $leapyear){
    if((($leapyear % 4) == 0) && ((($leapyear % 100) != 0) || (($leapyear % 400) == 0))){
        echo "Yes" . ", " . $leapyear . "<br>";
    } else {
        echo "NO" . ", " . $leapyear . "<br>";
    }
}
?>

</body>
</html>