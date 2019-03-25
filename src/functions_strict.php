<?php 
declare(strict_types=1);

namespace Nfq\Akademija\Strict {              
    function calculateHomeWorkSum(int...$numbers):int{
        echo __NAMESPACE__ . "\\" . __FUNCTION__ . ": ";
        return  array_sum($numbers);
    }
}

?>