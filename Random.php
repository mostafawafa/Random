<?php


class Random
{

    /**
     * 
     * array that carry random numbers
     * 
     */

    public $randNumbers = [];


    /**
     * 
     * generate any number of random numbers and save them
     * 
     */
    public function generate($number){

        for($i=0;$i<$number;$i++){

            $this->randNumbers[] = rand(0,10);
        }
        
    }

    /**
     * check if all values in the array are the same = Big Win
     *   else   there's only few similar values = Small Win
     *   else   all values are unique  = No win at all
     *  
     */
 
    public function checkStatus(){

        $countUniqueValues = count(array_unique( $this->randNumbers ));
        $countOriginalValues = count($this->randNumbers);

        if($countUniqueValues  === 1 ){
            return 'Big Win';
        }

        elseif($countUniqueValues <  $countOriginalValues){
            return 'Small Win';
        }
        else{
            return 'No Win';
        }


    }



}

