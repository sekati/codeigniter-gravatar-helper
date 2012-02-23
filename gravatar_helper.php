<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Gravatar Helper
 *
 * @package		Sekati
 * @author		Jason M Horwitz
 * @copyright	Copyright (c) 2012, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.0.0
 * @filesource
 *
 * @usage 		$autoload['helper'] = array('gravatar');
 * @example 	gravatar( 'jason@sekati.com' );
 *
 */

// ------------------------------------------------------------------------
// GRAVATAR HELPERS

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string 	$email The email address
 * @param string 	$s Size in pixels, defaults to 80px [ 1 - 512 ]
 * @param boolean 	$img True to return a complete IMG tag False for just the URL 
 * @param string 	$d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string 	$r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param array 	$atts Optional, additional key/value attributes to include in the IMG tag
 * @return 			String containing either just a URL or a complete image tag
 */
if ( ! function_exists('gravatar'))
{ 
	function gravatar( $email, $s = 80, $img = true, $d = 'mm', $r = 'pg', $atts = array() )
	{
		$url = ( isset($_SERVER['HTTPS']) ) ? 'https' : 'http';
		$url .= '://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= "?s=$s&d=$d&r=$r";
		if ( $img )
		{
			$url = '<img src="' . $url . '"';
			foreach ( $atts as $key => $val )
				$url .= ' ' . $key . '="' . $val . '"';
			$url .= ' />';
		}
		return $url;
	}
} 
 
/* End of file gravatar_helper.php */
/* Location: application/helpers/gravatar_helper.php */
?>