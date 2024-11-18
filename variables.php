<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>
<body>
    <?php
       $x=4;
        $y=5;
        
       
          $k=1322;
        // echo "Sum is " . ($x + $y) . "";
         function kashif(){
            $z=21;
            global $x;
            echo "$x";
            echo"<br>";
            echo"<br>";
            echo "$z";
            echo"<br>"; echo"<br>";
            static $k =11;
            echo"<br>"; echo"<br>";
            echo $k;
            echo"<br>";
            
        }
        kashif();

        function test(){
            $GLOBALS['y'] =  $GLOBALS['y'] +  $GLOBALS['x'];
        }
        test();
        echo $y;
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo $k;
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo $k;
        
?>

    
</body>
</html