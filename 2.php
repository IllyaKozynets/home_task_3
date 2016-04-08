<?php
$mass=['html','css','php','js','jg'];
function one($mass){
    foreach ($mass as &$value){
        echo "<b>$value</b><br>";
    }
}
one($mass);
//2
function two($mass){
    $result=null;
    foreach ($mass as $value){
        $result=$result+$value;
    }
    return $result;
}
$mass_two=[1,20,15,17,24,25];
print_r(two($mass_two));
echo "<br>";
//3
function three($mass){
    $result=null;
    foreach ($mass as $value){
        $result=$result+$value*$value;
    }
    return $result;
}
$mass_three=[26, 17, 136, 12, 79, 15];
print_r(three($mass_three));
echo "<br>";
//4
$arr=[
    'key1'=>1,
    'key2'=>2,
    'key3'=>3
];
function four($mass){
    foreach($mass as $key=>$value){
        echo "$key<br>";
    }
    foreach ($mass as $key=>$value){
        echo "$value<br>";
    }
}
four($arr);
//5
$arr=[
    'Коля'=>'200',
    'Петя'=>'300',
    'Вася'=>'400'
];
function five($mass){
    foreach ($mass as $key=>$value){
        echo "$key -зарплата $value долларов <br>";
    }
}
five($arr);
//6
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
function six($mass){
    foreach ($mass as $key=>$value){
        $en[]=$key;
        $ru[]=$value;
    }
    print_r($en);
    print_r($ru);
}
six($arr);
echo '<br>';
//7
$m=[2,5,9,15,0,4];
function seven($mass){
    foreach ($mass as $value){
        if($value>3&&$value<10){
            echo "$value<br>";
        }
    }
}
seven($m);
//8
$eight=[1,2,3,4,5,6,7,8,9];
function eight($mass){
    foreach ($mass as $value){
        echo $value;
    }
}
eight($eight);
echo '<br>';
//9
function nine(){
    for($i=1;$i<101;$i++){
        echo "$i<br>";
    }
}
nine();
//10
function ten(){
    for($i=11;$i<=33;$i++){
        echo"$i<br>";
    }
}
ten();
//11
function eleven(){
    for($i=0;$i<=100;$i++){
        if($i%2==0){
            echo "$i<br>";
        }
    }
}
eleven();
//12
$n=1000;
function twelve($n){
    $num=null;
    while($n>=50){
        $n=$n/2;
        $num++;
    }
    return $num;
}
print_r(twelve($n));
echo '<br>';
//13
function thirteen(){
    $res=null;
    for($i=2;$i<=9;$i++){
        for($j=2;$j<=9;$j++){
            $res=$i*$j;
            echo "$i*$j=$res<br>";
        }
    }
}
thirteen();
//14
//15
function fifteen($arr){
    $count=null;
    foreach($arr as $value){
        if(isset($value)){
            $count++;
        }
    }
    echo $count;
}
$arr=[4,2,5,19,13,0,10];
fifteen($arr);
//16
$sixt=[1,2,3,4,5,6,7,8,9];
function sixteen($mass){
    foreach ($mass as $value){
        if($value%3==1){
            echo '<br>';
        }
        echo "$value,";

    }
}
sixteen($sixt);
echo '<br>';
//17
$month=[
    '01'=>'Январь',
    '02'=>'Февраль',
    '03'=>'Март',
    '04'=>'Апрель',
    '05'=>'Май',
    '06'=>'Июнь',
    '07'=>'Июль',
    '08'=>'Август',
    '09'=>'Сентябрь',
    '10'=>'Октябрь',
    '11'=>'Ноябрь',
    '12'=>'Декабрь'
];
function seventeen($mass){
    $month=date("m");
    foreach ($mass as $key=>$value){
        if($key==$month){
            echo "<b>$value</b><br>";
        }
        else echo "$value<br>";
    }
}
seventeen($month);
//18
$day=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'
];
function eighteen($mass){
    foreach ($mass as $value){
        if($value=='суббота' or $value=='воскресенье'){
            echo "<b>$value</b><br>";
        }
        else echo "$value<br>";
    }
}
eighteen($day);
//19
$dd=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
function nineteen($mass){
    $day=date('l');
    foreach ($mass as $value){
        if($value==$day){
            echo "<i>$value</i><br>";
        }
        else echo "$value<br>";
    }
}
nineteen($dd);
//20
function twenty(){
    for($i=1;$i<=20;$i++){
        echo str_repeat("x",$i);
        echo "<br>";
    }
}
twenty();
//21
function twenty_one()
{
    for ($i = 1; $i <= 9; $i++) {
        echo str_repeat ( "$i", $i);
        echo "<br>";
    }
}
twenty_one();
//22
function twenty_two(){
    for ($i = 2; $i <= 10; $i=$i+2) {
        echo str_repeat ( "x", $i);
        echo "<br>";
    }
}
twenty_two();
//23
function twenty_three($numb){
    for($i=0;$i<strlen($numb);$i++){
        $ar[]=$numb[$i];
    }
    print_r($ar);

}
twenty_three('123');
echo "<br>";
//24
function twenty_four($str,$numb){
    $j=null;
    for($i=0;$i<strlen($str);$i++){
        if($str[$i]==$numb){
            $j++;
        }
    }
    echo $j;

}
twenty_four('1135646775141','1');
echo "<br>";
//25
for($i=0;$i<20;$i++){
    $massive[]=rand(1,20);
}
print_r($massive);
function twenty_five($mass){
    $a=null;
    $b=null;
    $a=min($mass);
    $b=max($mass);
    for($i=0;$i<20;$i++){
        if($mass[$i]==$a){
            $mass[$i]=$b;
        }
        elseif($mass[$i]==$b){
            $mass[$i]=$a;
        }
    }
    return $mass;

}
print_r(twenty_five($massive));
//26
for($i=0;$i<20;$i++){
    $massive_one[]=rand(1,100);
}
echo "<br>";
print_r($massive_one);
function twenty_six($mass){
    $b=null;
    $a=null;
    foreach($mass as $value){
        if($value>0&&$value%2==0){
            $b=$value;
            $a=$b*$value;
        }
        if($value>0&&$value%2!=0){
            echo "$value<br>";
        }
    }
    echo "<br>$a";
}
twenty_six($massive_one);
//27
function twenty_seven(){

}