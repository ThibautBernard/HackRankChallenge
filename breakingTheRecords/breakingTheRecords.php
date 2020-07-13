function breakingRecords($scores) 
{
    $vHigher = $scores[0];
    $vLower = $scores[0];
    $tab = [0, 0];

    for($i = 1; $i < count($scores); $i++)
    {
        if($scores[$i] > $vHigher)
        {
            $vHigher = $scores[$i];
            $tab[0]++;

        }
        
        if($scores[$i] < $vLower)
        {
            $vLower = $scores[$i];
            $tab[1]++;

        }
        
    }
   return $tab;
    
        


}
