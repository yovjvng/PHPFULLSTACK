<?php

/*******************************
파일명 :
시스템명 :
이력
    V001 : new - d1111
    voo2 : fnc_print_star 수정 - d1111



********************************/

// 1. while + if가 조합된거

// $i = 0;
// while ( $i <= 4 ) 
// {
//     if ( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if ( $i === 4 ) 
//     {
//         echo "4입니다.";
//     }
//     $i++;
// }

// foreach + if 조합
// $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
// foreach ( $arr_ass as $key => $val ) 
// {
//     if( $key === "c" || $val === 2)
//     {
//         echo "if";
//     }
// }

// 이중 루프
// for ( $i = 2; $i <= 9; $i++) 
// { 
//     echo "$i 단\n";
//     for ($p = 1; $p <= 9; $p++) 
//     { 
//         echo "$i * $p", "=" ,$i*$p, "\n";
//     }
//     echo "\n";
// }


// 1~ 100 숫자 중에 짝수의 합을 구해주세요.
// $result = 0;
// for ($i = 1; $i <= 100 ; $i++) 
// { 
//     if ( $i % 2 === 0 ) 
//     {
//         $result += $i;
//     }
// }
// echo $result."\n";


// $result = 0;
// for ($i = 1; $i * 2 <= 100; $i++) 
// { 
//         $result += $i * 2;
// }
// echo $result."\n";


// $result = 0;
// $i = 0;
// while ($i <= 100) 
// {
//     if ( $i % 2 === 0 ) 
//     {
//         $result += $i;
//     }
//     $i++;
// }
// echo $result;



// $arr_test =
//     array(
//          1
//         , 2
//         , array(
//                 "info_a" => 3
//                 ,"info_b" => 4
//                 ,"info_arr" =>
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                         )
//                 )
//         );

// // echo $arr_test["info"]["info_a"]."\n".$arr_test["info"]["info_arr"]["f_2"];
// echo $arr_test[2]["info_arr"]["f_1"];



// 함수명   : fun_sum
// 기능     : 파라미터를 더한 값을 리턴
// 파라미터 :INT $param_a
//          INT $param_b
// 리턴     :INT $sum;



// function fun_sum($param_a, $param_b)
// {  
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// echo fun_sum(1, 2);

//가변 파라미터 1
// function fun_sum2( ...$param_numbers )
// {  
//     $sum = $param_numbers[0] + $param_numbers[1] + $param_numbers[3];
//     return $sum;
// }

// echo fun_sum2(1, 2, 3);

//가변 파라미터 2
// function fun_sum3( ...$param_numbers )
// {  
//     return array_sum($param_numbers);
// }

// echo fun_sum3(1, 2, 3);


// function fnc_gloval()
// {
//     global $global_i;
//     $global_i = 0;
// }
// $global_i = 5;
// fnc_gloval();

// echo $global_i;






// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();



// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;


// 별짓기 함수로

// $num = 10;
// for ($i = 0; $i <= $num; $i++) 
// { 
//     for ($p = 0; $p <= $i ; $p++) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }

// function fun_print_star($pram_int) // v002 del
// function fun_print_star($pram_int, $param_str = "*" ) // v002 add
// {
//     for ($i = 1; $i <= $pram_int; $i++) 
//     { 
//         // echo "*"; // v002 del
//         echo $param_str; // v002 add
//     }
//     echo "\n";
// }
// fun_print_star(1, "$");
// fun_print_star(2, "$");
// fun_print_star(3, "$");
// fun_print_star(4, "$");
// fun_print_star(5);


// function fnc_reference2( &$pram_str)
// {
//     echo "2번 : $pram_str \n";
//     $pram_str = "fnc_reference2에서 값 변경";
//     echo "3번 : $pram_str \n";
// }
// $str = "aaa";
// echo "1번 : $str \n";
// fnc_reference2 ($str);
// echo "4번 : $str \n";


// ------------ class ------------
class Food
{
    // 접근 제어 지시자
    // public       : 어디서든(class밖에서도) 접근이 가능
    // private      : 해당 class내에서만 접근 가능
    // protected    : class 자기 자신과 상속 class 내에서만 접근 가능

    // 멤버 변수
    protected $str_name;
    protected $int_price;

    // 메소드
    public function __construct( $param_name, $param_price )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food()
    {
        $str = $this->str_name. " : ".$this->int_price."원\n";
        echo $str;
    }
    
    public function set_print_price($param_price)
    {
        $this->int_price = $param_price;
    }
}

// $obj_food = new Food( "탕수육", 10000 );
// $obj_food->fnc_print_food();
// // Food Class 멤버 변수 $int_price의 값을 12000 바꾸어 주세요.
// $obj_food->set_print_price( 12000 );
// $obj_food->fnc_print_food();


// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
class KoreanFood extends Food
{
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish)
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }
    // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
    public function fnc_print_food()
    {
        //1.
        // $str = $this->str_name. " : ".$this->int_price."원 \n"."반찬 : ".$this->side_dish;

        //2.
        parent::fnc_print_food();
        $str = "반찬 : ".$this->side_dish."\n";

        echo $str;
    }
}

$obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무" );
$obj_korean_food->fnc_print_food();



class People
{
    protected $name;

    // public function __construct($param_name)
    // {
    //     $this->name = $param_name;
    // }

    public function set_name($param_name)
    {
        $this->name = $param_name;
    }
    public function people_print()
    {
       
        echo "이름 : ".$this->name;
    }

}



class Student extends People{
    protected $id;

    public function setid($param_id)
    {
        $this->id = $param_id;
    }
    public function student_print()
    {
        parent::people_print();

        echo "\n아이디 : ".$this->id;
    }
}

$obj_student = new Student();
$obj_student->set_name ("백유정");
$obj_student->setid ("aaa");
$obj_student->student_print();







?>