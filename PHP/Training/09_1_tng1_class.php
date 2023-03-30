<?php

//class Car
//{
        // $car_name : 차이름을 저장 하는 멤버변수
        // $car_color : 차 색깔을 저장하는 멤버변수

        // method명 : car_make
        // parameter : 
        //                string $param_name
        //                string $param_color
        // 기능 : 멤버 변수에 값을 셋팅

        // method명 : car_out
        // parameter : 없음
        // 기능 : 자동차 이름과 색깔을 출력
        //     (형식 : $car_color."색 ".$car_name)

//}


class Car
{
    private $car_name;
    private $car_color;
    private $param_id;

    public function car_make($param_name, $param_color)
    {
        // $result_name = "이름 : ".$param_name;
        // $result_color = "색상 : ".$param_color."색";
        $this ->car_name = $param_name;
        $this ->car_color = $param_color;
    }

    public function car_out()
    {
        echo $this->car_color."색".$this->car_name;
    }



    public function set_car_id($param_id)
    {   
        $this->car_id = $param_id;
    }

    public function get_car_id()
    {
        return $this->car_id;
    }

}


$obj_Car = new Car;
$obj_Car ->car_make("벤츠","검정");
// echo $obj_Car ->car_name = "벤츠";
$obj_Car ->car_out();
// $obj_Car->set_car_id("붕붕이");
// echo $obj_Car->get_car_id();




?>