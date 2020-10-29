<?php 
// DRY--> Dont Repeat Yourself
$arr = [1,2,4,6,7,9,12];

function getEvenNum($arrs){
    $even = [];
    for($i = 0; $i<count($arrs); $i++){
        if($arrs[$i]%2==0){
            $even[] = $arrs[$i];
        }
    }

    return $even;
    
}


$newArr = getEvenNum($arr);


// $arr1 = [1,2,3,4,5,6,7,8,9,10];


// $newArr1 = getEvenNum($arr1);

// var_dump($newArr);
// echo "<br>";
// var_dump($newArr1);

$arr1 = [1,2,3,4,5,6,7,8,9,10, 45,69,23,39,46,58,200,456, 222,480, 120, 240];
// so nho nhat chia het cho 6, va 10

// truyen vao 2 so bat ky (a,b). tim so nho nhat chia het cho ca 2;


function findnum1($arrs)
{
    // var_dump($arrs);die;
   // $num;
//    return count($arrs);
//    return $arrs[19];
    for($i=0; $i<count($arrs); $i++)
    {
        if($arrs[$i] % 6 == 0 && $arrs[$i] % 10 == 0)
        {
            echo 'run';
            return $arrs[$i];
        }
         return 0;
    
    }
    //return $num;
}

function findnum($arrs)
{
        //6000000000000
        $num =1000000000000;
        for($i=0; $i<count($arrs); $i++)
        {
        if($arrs[$i]%6==0&&$arrs[$i]%10==0&&$arrs[$i]<=$num)
        {
         $num=$arrs[$i];

        }
        }
        return $num;
}

// var_dump(findnum($arr1));

// function getBlaBloNum ($arrs) {
//     $BlaBlo = [];
//     for ($i = 0 ; $i<count($arrs); $i ++){
//         if ($arrs[$i] % 60 == 0){
//             $BlaBlo[] = $arrs[$i];
//         }
//     }
//     return $BlaBlo;
// }

// var_dump(getBlaBloNum($arr1));

// findNumber(9, 3);

// maxNum = 9*3;

// (3,7)--> 21

// (2,10); 20

// 0-20;


// Number function
// echo round(2.4);

// echo ceil(2.1);
// echo floor(2.9);
// echo pow(2,3); // exponent
// // square root;
// echo sqrt(9); // = 3



// string;
// $str = "hello world";
// echo "<br>";

// echo md5('2');//
// echo "<br>";

// echo sha1('abc');

// substr, split, str_words_count
// strtouper, strtolower, explode,


// array.
// push

// $myArr = [1,3,4];

// $myArr = $myArr_push(9); //array_unshift, array_shift, array_pop,
// var_dump($myArr);
// array_slice($myArr, 2);

// echo "<br>";
// echo rand(1, 100);
// echo "<br>";
// echo mt_rand(1, 100);