
CodeIgniter Gravatar Helper
============================

This is a small codeigniter helper library for working with the [Gravatar](http://gravatar.com) API to pull user profile pictures from email addresses.


Installation
-------------------------------------

1. Copy `gravatar_helper.php` to your `application/helpers` folder.
2. Autoload the helper `$autoload['helper'] = array('gravatar');`.
3. Employ helper functions as needed.


Usage
-------------------------------------

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
	 * @source			(derrived) http://en.gravatar.com/site/implement/images/php/
	 */
	 
	<?=gravatar( 'test@example.com', 100 )?>

  	
License
-------------------------------------

Copyright © 2012 Jason M Horwitz, Sekati LLC. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

	The MIT License

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and 
	associated documentation files (the “Software”), to deal in the Software without restriction, 
	including without limitation the rights to use, copy, modify, merge, publish, distribute, 
	sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is 
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or 
	substantial portions of the Software.

	THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
	BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
	DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.	
	