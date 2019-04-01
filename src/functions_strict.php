<?php 
declare(strict_types=1);

namespace Nfq\Akademija\Strict {              
    function calculateHomeWorkSum($x1, $x2, $x3){
        echo __NAMESPACE__ . "\\" . __FUNCTION__ . ": ";
        return wrapper($x1, $x2, $x3);
    }
    function wrapper(int $x1, int $x2, int $x3):int{
        return $x1 + $x2 + $x3;
    }
}

?>