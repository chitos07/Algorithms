<?php



    function binarysearch(array $list,int $number){

        $low  =  0;
        $high = count($list) - 1;

   
        while ($low <= $high){
        
            $mid = ceil(($low + $high) / 2);
            
            $gusse = $list[$mid];
          
            echo $low;
            echo '<pre>';
            if($gusse == $number){
               return $mid;
                
            }elseif($gusse > $number){
                $high = $mid - 1;
            }
            else {
                $low = $mid + 1;
            }
          
        }
       
        return false;

    }


    $binaryarray = [1,3,5,7,9];

    var_dump(binarysearch($binaryarray,9));


?>