<?php
checkPalindrome('abba');
checkPalindrome('dog');
checkPalindrome('12321');

function checkPalindrome($string){
    $len = strlen($string);
    for($i = 0; $i < $len / 2; $i++){
        if($string[$i] != $string[$len - $i - 1]){
            return false;
        }
    }
    return true;
}

DB::table('purchases')
    ->leftJoin('suppliers','purchases.supplier_id','=','suppliers.id')
    ->select('purchases.reference as purchase_reference','suppliers.name','purchases.grand_total')
    ->get();

    DB::table('sales')
    ->leftJoin('customers','sales.customer_id','=','customers.id')
    ->leftJoin('payments','sales.id','=','payments.sale_id')
    ->select('sales.reference as sale_reference','sales.grand_total','payments.amount','customers.name')->get();
    Function checkPrime($num){
        if($num < 2){
            Return false;
    }
        for($i = 2;$i<=$num;$i++){
            if($num % $i == 0){
                Return false;
            }
        }
        Return true;
    }
    $num1 = 7;
    $num2 = 10;
    checkPrime($num1);
    checkPrime($num2);
