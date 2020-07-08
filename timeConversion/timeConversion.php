function timeConversion($s) 
{
    $tabAM = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
    $tabMatin = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
    

    $tabPM = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
    $tabAprem = array('13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24');

    $sym = substr($s, 8, 2); // fin de la chaine pour le PM ou AM
   // le if pour AM est inspiré d'un code en ligne contrairement au deuxieme if pour le PM 

   if($sym == "AM")
   {
       $debut = substr($s, 0, 2);
       $t= $c = substr($s,0,2);

        $c = $t;
        if($c == 12)
        {
            $c = 00;
            $p = str_replace($t,"00",$s);
            $x = str_replace("AM","",$p);    
             return $x;
        }
         $p = str_replace($t,$c,$s);
         $x = str_replace("AM","",$p);    
        return $x;
    }
    elseif(preg_match('#PM$#', $s))
    {
     for($i = 0; $i < count($tabPM); $i++)
     {
         if(preg_match('#(\d+)(\d+)#', $s, $matches))
         {
            
            if($matches[0] == $tabPM[$i])
             {
                 $start = substr($s, 0, 2);
                 $rest = substr($s, 2, 6);
                $hours = $tabAprem[$i];
                $finaleAprem = str_replace($start,$hours, $s);
                $r = str_replace("PM", "", $finaleAprem);
                return $r;
                 
             }
         }
         $a = substr($s, 0, 2);
         $t= $c = substr($s,0,2);

        if($a == 12)
        {
            $c = 12;
            $p = str_replace($t,$c,$s);
            $x = str_replace("PM","",$p);    
            return $x;
        }
  
     }
    } 
}
