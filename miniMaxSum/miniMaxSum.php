function miniMaxSum($arr) 
{
    
    $total = array_sum($arr);
    $newsum = [];    
    for ($i=0; $i < count($arr); $i++) {
        $newsum[] = $total-$arr[$i];
    }
    $min = min($newsum);
    $max = max($newsum);
    
    echo $min.' '.$max;
}
