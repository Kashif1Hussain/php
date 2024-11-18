<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function kashif(){

        echo "my name is kashif hussain";
        echo "<br>";
        echo "i belong to lodhran";
    }

    kashif();
    echo "<br>";

    function kashif2($hussain){
        echo "my first name is $hussain";
        echo "<br>";


    }
    kashif2("Azad");


    function kashif3($first,$second,$third){
        echo "my name is  : $first $second $third";
    }
    kashif3("Muhammad","Kashif","Hussain");

    echo "<br>";
    echo "<br>";
    echo "<br>";
    function kashif4(&$value){
        $value +=5;
    }
    function kashif5(...$x){
        $n=0;
        $len= count($x);
        for ($i=0; $i < $len; $i++){

            $n += $x[$i];

        }
        return $n;
    }
   $c= kashif5(2,3,4,5,6,7,8,8,9);
   echo $c;
    
?>
    
</body>
</html>