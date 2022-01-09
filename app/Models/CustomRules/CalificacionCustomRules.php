<?php
namespace App\Models\CustomRules;

class CalificacionCustomRules{

    public function number_betwen_1_and_5(float $number):bool
    {
       if($number < 1 Or $number > 5){
           return false;
       }else{
           return true;
       }
    }
}

?>