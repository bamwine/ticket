<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//----------------------------------------------------
if ( ! function_exists('h_generate_ticket_id'))
{
//function to h_generate_flight_id
	function h_generate_ticket_id()
	{
    	return 'TKT-'.date('Yhis');
	}
}



//----------------------------------------------------
if ( ! function_exists('h_generate_payment_id'))
{
//function to h_generate_flight_id
	function h_generate_payment_id()
	{
		$payment_id=rand(1000,9999);
    	return 'PRN'.$payment_id.date('Yhis');
	}
}


//----------------------------------------------------
if ( ! function_exists('h_generate_flight_id'))
{
//function to h_generate_flight_id
	function h_generate_flight_id()
	{
		$payment_id=rand(100,9999);
    	return 'FLT'.date('Yhis').$payment_id;
	}
}

//----------------------------------------------------
if ( ! function_exists('h_get_word_initials'))
{
//function to h_get_word_initials
	function h_get_word_initials($string)
	{

		$words = explode(" ", $string);
		$acronym = "";

		if (!is_array($words) || $string == '') 
		{
			return '';
		}

		foreach ($words as $w) 
		{
			$acronym .= $w[0];
		}

		return strtoupper($acronym);
	}
}


?>
