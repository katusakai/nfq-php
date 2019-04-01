# nfq-php
This is homework for NFQ PHP lesson 1.

Once we call function:
Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’);
It returns integer 6, because all function arguments are made to integers. 3+2+1 = 6.

Once we call function:
Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);
It returns error, because strict_types=1 is declared. This destriction askes function for specific argument type and displays error if wrong type is called. In this example given arguments must be integers, but are given float and string.
