<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('json_return'))
{
    function json_return($status, $result, $message='')
    {
		$return=array("status"=>$status, "result"=>$result);
		if(!empty($message)) {
			$return += array( 'message' => $message );
		}
        return json_encode($return);
    }   
}