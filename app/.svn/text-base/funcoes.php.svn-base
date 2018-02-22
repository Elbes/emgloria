<?php
namespace App;


class funcoes
{
	public function invoke($string){
	
		$trocarIsso =     array('.');
		$porIsso =         array('');
	
	
		$string = str_replace($trocarIsso, $porIsso, $string);
	
	
		if (is_string($string)) {
			$string = strtolower(trim(utf8_decode($string)));
	
			$before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
			$after  = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
			$string = strtr($string, utf8_decode($before), $after);
	
			$replace = array(
					'/[^a-z0-9.-]/'    => ' ',
					'/-+/'            => ' ',
					'/\-{2,}/'        => ' '
			);
			$string = preg_replace(array_keys($replace), array_values($replace), $string);
		}
		return $string;
	
	}
}