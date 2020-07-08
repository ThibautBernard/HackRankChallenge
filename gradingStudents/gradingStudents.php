function gradingStudents($grades) 
{
    
    for ($i=0;$i <= sizeof($grades); $i++){
        if ($grades[$i] >= 38){
            if ($grades[$i] % 5 == 3){
                $grades[$i] += 2;
            }
            else if ($grades[$i] % 5 == 4){
                $grades[$i] += 1;
            }
        }
    }
        
        return $grades;

}
