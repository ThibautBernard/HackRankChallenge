function birthdayCakeCandles($ar) 
{
    $sumCandles = $ar[0];
    $count = 0;
    $lengthtab = count($ar);
    for($i = 0; $i < $lengthtab; $i++)
    {
       if($ar[$i] > $sumCandles)
       {
           $sumCandles = $ar[$i];
       }
    }
    for($y = 0; $y < $lengthtab; $y++)
    {
        if($ar[$y] == $sumCandles)
        {
            $count++;
        }
    }
    return $count;
}   
