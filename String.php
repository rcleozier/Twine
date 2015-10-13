<?php

namespace StringManip;

class String {

    /**
     * Trims whitespace from a string
     *
     * @return string
     */
    public static function trim($string)
    {
        return ltrim($string);
    }

    /**
     * Lowercase the first letter of a string
     *
     * @return string
     */
    public static function lowerFirst($string)
    {
        return lcfirst($string);
    }
       
    /**
     * Uppercase the first word in a string
     *
     * @return string
     */
    public static function upperFirst($string)
    {
        return ucfirst($string);
    }

    /**
     * Uppercase words in a string
     *
     * @return string
     */
    public static function upperWords($string)
    {
        return ucwords($string);
    }

    /**
     * Uppercase an entire string
     *
     * @return string
     */
    public static function upper($string)
    {
        return strtoupper($string);
    }

    /**
     * Lowercase an entire string
     *
     * @return string
     */
    public static function lower($string)
    {
        return strtolower($string);
    }

    /**
     * Return the lenth of a string
     *
     * @return int
     */
    public static function length($string)
    {
        return strlen($string);
    }

    /**
     * Replace part of a string with another
     *
     * @return string
     */
    public static function replace($string, $replacement, $start, $length = '')
    {
        return substr_replace($string, $replacement , $start, $length);
    }

    /**
     * Returns position of a string within another
     *
     * @return int
     */
    public static function position($string, $search)
    {
        return strrpos($string, $search);
    }

    /**
     * Returns the number of words within a string
     *
     * @return int
     */
    public static function words($string)
    {
        return str_word_count($string);
    }

    /**
     * Repeats a string a specified number of times.
     *
     * @return string
     */
    public static function repeat($string, $times = 1)
    {
        return str_repeat($string, $times);
    }

    /**
     * Calculates the similarity between two strings.
     *
     * @return int
     */
    public static function similar($string, $search)
    {
        return similar_text($string, $search);
    }

    /**
     * Randomly shuffle all characters of a string:
     *
     * @return string
     */
    public static function shuffle($string)
    {
        return str_shuffle($string);
    }

    /**
     * Returns the number of times a string appears
     *
     * @return int
     */
    public static function occurence($string, $search)
    {
        return self::times($string, $search);
    }

   /**
     * Returns the number of times a string appears
     *
     * @return int
     */
    public static function times($string, $search)
    {
        return substr_count($string, $search);
    }

    /**
     * Turns a key into the ascii equivilent
     *
     * @return string
     */
    public static function toAscii($string)
    {
        return ord($string);
    }

    /**
     * Convert an Ascii character into the given key
     *
     * @return string
     */
    public static function fromAscii($asciiCode)
    {
        return chr($asciiCode);
    }

    /**
     * Reverse a string
     *
     * @return string
     */
    public static function reverse($string)
    {
        return strrev($string);
    }

    /**
     * Return a random string with determined length
     *
     * @return string
     */
    public static function random($length = 10)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    /**
     * Camel case text
     *
     * @return string
     */
	public static function camelCase($string, $strPosition = [])
	{
        $str = preg_replace('/[^a-z0-9' . implode("", $strPosition) . ']+/i', ' ', $string);
        $str = trim($str);

        // uppercase the first character of each word
        $str = ucwords($str);
        $str = str_replace(" ", "", $str);
        $str = lcfirst($str);
 
        return $str;
	}

    /**
     * Converts a string into a slug (Alias)
     *
     * @return string
     */
	public static function slug($string) 
	{
		return self::slugify($string);
	}

   /**
     * Converts a string into a slug
     *
     * @return string
     */
	public static function slugify($string)
    {
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $string);

		// trim
		$text = trim($text, '-');

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text))
		{
		  return 'n-a';
		}

		return $text;
    }

    /**
     * Converts a slug into a string.
     *
     * @return string
     */
    public static function unslugify($string)
    {
        return str_replace("-", " ", $string);
    }

    /**
     * Check if a string is an IP.
     *
     * @return bool
     */
    public static function isIp($string)
    {
        return filter_var($string, FILTER_VALIDATE_IP) !== false;
    }

    /**
     * Check if a string is a valid email address
     *
     * @return bool
     */
    public static function isValidEmail($string)
    {
        return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Check if a string is a valid URL
     *
     * @return bool
     */
    public static function isValidUrl($string)
    {
        return filter_var($string, FILTER_VALIDATE_URL) !== false;
    }
}

var_dump(String::slugify("this will be a slug"));
var_dump(String::isValidUrl("http://www.github.com"));
var_dump(String::isValidEmail("coder@github.com"));
var_dump(String::camelCase("camelCase this text"));
var_dump(String::shuffle("shuffle this text"));
var_dump(String::random(5));
?>