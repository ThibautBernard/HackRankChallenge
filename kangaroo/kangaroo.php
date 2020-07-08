function kangaroo($x1, $v1, $x2, $v2) 
{
      
    while($x1 != $x2)
    {
        $x1 = $x1 + $v1;
        $x2 = $x2 + $v2;

        if($x1 > $x2 && $v1 > $v2 OR $x2 > $x1 && $v2 > $v1 )
        {
            return NO;
        }
        elseif($v1 == $v2)
        {
          return NO;
        }
    }
    return YES;

    
}
