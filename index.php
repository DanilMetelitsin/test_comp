<!DOCTYPE html>
<html>
<body>
<?php
function camp() {
$array_comp = array('Сияющий','Безупречный','Обворожительынй','Умный','Красивый');
 srand ((double) microtime() * 1000000);
    $random_comp = rand(0,count($array_comp)-1);
    $array_man = array('парень','мужчина','джентельмен','фраер','парнишка');
 srand ((double) microtime() * 1000000);
    $random_man = rand(0,count($array_man)-1);
echo ($array_comp[$random_comp]),' ',($array_man[$random_man]);
}
camp();
?>

</body>
</html>
