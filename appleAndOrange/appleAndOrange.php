function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) 
{
    $temp;
    $temp1;
    $orangeEnd = 0;
    $appleEnd = 0;

    for($y = 0; $y < sizeof($apples); $y++ )
    {
        $temp1 = $apples[$y] + $a;
        if($temp1 >= $s && $temp1 <= $t)
        {
            $appleEnd++;
        }
    }
    echo $appleEnd."\n";

   for($i = 0; $i < sizeof($oranges); $i++)
   {
       $temp = $oranges[$i] + $b;
       if($temp >= $s && $temp <= $t)
       {
           $orangeEnd++;
       }
   }
    echo $orangeEnd."\n";

    
    

}

