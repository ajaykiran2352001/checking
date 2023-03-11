<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>fibonacci series</h1>
    <?php
     $a=0;
     $b=1;
     for($i=0;$i<10;$i++){
         $c=$a+$b;
         $a=$b;
         $b=$c;
         echo $c.'<br>';
     }
     ?>



<?php 
function print_pattern($num)
{
 
for ($i = 1; $i < $num; $i++)
{

for($j = 0; $j < $i; $j++ )
{

echo "* ";
}

echo "<br>";
}
}

$num = 5;
print_pattern($num);
?>

<br>

<?php
$n=5;
for ($i = 0; $i < $n; $i++)
{
for ($k=$n; $k > $i+1; $k--) { 
   echo "  &nbsp;&nbsp;";
}
for($j = 0; $j <= $i; $j++ )
{

echo "* ";
}

echo "<br>";
}
?>
<br>
<?php
$n=6;
for ($i = 0; $i < $n; $i++)
{
for ($k=$n; $k > $i+1; $k--) { 
   echo "* ";
}

echo "<br>";
}
?>


<?php
$n=6;
for ($i = $n; $i > 0; $i--){
    for($j = 0; $j < $s; $j++ )
    {
    echo "* ";
    }
    echo "\n";
    }
    
?>

</body>
</html>