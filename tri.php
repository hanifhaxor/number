<?php

    function rand_(){
    $digits_needed=8;

    $random_number=''; 

    $count=0;

    while ( $count < $digits_needed ) {
        $random_digit = mt_rand(0, 7);
        $random_number .= $random_digit;
        $count++;
    }

    return $random_number;

    }

    $a=array('0895','0896','0897','0898','0899'
              
);
        $i=0;
        while($i<200000){
            $website = $a[mt_rand(0, count($a) - 1)];
           print $website . rand_().'<br>';
           $i++;
        }