<?php

    // $arr = array(5, 10, 7, 3, 1);

    // foreach ($arr as $key => $val) {
    //     echo $key.">".$val."\n";
    // }

    // $a = count($arr);
    // for ($i=0; $i < $a; $i++) { 
    //     echo $i.">".$arr[$i]."\n";
    // }

    // bubble sort


    // $a = count($arr);
    // for ($i=0; $i < $a; $i++) { 
    //     for ($p=0; $p < $a; $p++) 
    //     { 
    //       if ($arr[$i] < $arr[$p]) 
    //       {
    //         $temp = $arr[$i];
    //         $arr[$i] = $arr[$p];
    //         $arr[$p] = $temp;
    //       }   
    //     }
    // }


    // $temp = $arr[0];
    // $arr[0] = $arr[1];
    // $arr[1] = $temp;






    // $a = count($arr);
    // for ($i=0; $i < $a; $i++) { 
    //     for ($p=0; $p < $a; $p++) 
    //     { 
    //       if ($arr[$i] > $arr[$p]) 
    //       {
    //         $temp = $arr[$i];
    //         $arr[$i] = $arr[$p];
    //         $arr[$p] = $temp;
    //       }   
    //     }
    // }

    // $a = count($arr);
    




    // print_r($arr);


    // $b = count($arr);

    // for ($i=0; $i < $b; $i++) { 
    //   echo $i."=>".max($arr)."\n";
    //   unset($arr[array_search(max($arr), $arr)]);
    // }

    
    
    
    
    // 배열 안에 최대 값, 최소 값을 출력해주는 함수를 각각 구현해 주세요.
    // 함수명은 "my_max", "my_min"
    $arr = array(5, 20, 3, 100, 10);
    // 최대값
    // function my_max($arr)
    // {
    //   foreach ($arr as $val) 
    //   {
    //     if ($arr[0] < $arr[1])
    //     {
    //       $temp = $arr[1]; 
    //     }
    //     else 
    //     {
    //       $temp = $arr[0];
    //     }

    //     for ($i=2; $i < count($arr); $i++) 
    //     { 
    //       if ( $arr[$i] > $temp) 
    //       {
    //         $temp = $arr[$i];
    //       }
    //       else
    //       {
    //         $temp = $temp;
    //       }
    //     }
    //   }
    //   echo $temp."\n";
    // }
    // my_max($arr);

    // //최소값

    // function my_min($arr)
    // {
    //   foreach ($arr as $val) {
    //     if ($arr[0] < $arr[1]) 
    //     {
    //       $temp2 = $arr[0];
    //     }
    //     else 
    //     {
    //       $temp2 = $arr[1];
    //     }

    //     for ($i=2; $i < count($arr); $i++) 
    //     { 
    //       if ($arr[$i] < $temp2 ) 
    //       {
    //         $temp2 = $arr[$i];
    //       }
    //       else 
    //       {
    //         $temp2 = $temp2;
    //       }
    //     }
    //   }
    //   echo $temp2;
    // }
    // my_min($arr);




$cnt = count($arr);

        for ($i=1; $i < $cnt; $i++) 
        { 
          for ($p=$cnt; $p > $i; $p--) 
          { 
            if ($arr[$p-1] < $arr[$p-2] ) 
            {
              $temp = $arr[$p-1];
              $arr[$p-1] = $arr[$p-2];
              $arr[$p-2] = $temp;
            }
          }
        }
      print_r($arr);







?>