<?php 
namespace Clinic\Helpers;

class Helper {

    static function dateOfThaiBuddha($date=null)
    {    	
    	if(!isset($date))
    		$date = new \DateTime();
    	else{
    		$date = new \DateTime($date);
    	}  	
    	$arrayDate = explode('/',$date->format('d/m/Y'));
    	return $arrayDate[0].'/'.$arrayDate[1].'/'.($arrayDate[2]+543);
        //return $date->format('d/m/'). ($date->format('Y')+543);
    }
}