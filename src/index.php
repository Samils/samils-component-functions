<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\Samils
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * ------------------------------------------
 *
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: func
 * @Function Description: Create a closure
 * @Function Args:
 */
if (!function_exists ('func')) {
/**
 * @version 1.0
 *
 * THE CURRENT SML FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function func ($call = null) {
  return new Sammy\Packs\Func ($call);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: current_timestamp
 * @Function Description: Get The current timestamp
 * @Function Args:
 */
if (!function_exists ('current_timestamp')) {
/**
 * @version 1.0
 *
 * THE CURRENT SML FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function current_timestamp () {
  return date ('Y-m-d H:i:s');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: param
 * @Function Description: get a param sent to the current request
 * @Function Args: $paramName = null
 */
if (!function_exists ('param')) {
/**
 * @version 1.0
 *
 * THE CURRENT SML FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function param ($paramName = null) {
  static $param = null;

  if (!!(is_array ($param) && $param)) {
    return !isset ($param [ $paramName ]) ? null : (
      $param [ $paramName ]
    );
  }

  $requestInput = requires ('request-input');

  $param = $requestInput->getRequestInput ();

  if (isset ($param [$paramName])) {
    return $param [$paramName];
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: data_repeat
 * @Function Description: Reapeat any given data inside an array
 * @Function Args: $input, $multiplier = 1
 */
if (!function_exists ('data_repeat')) {
/**
 * @version 1.0
 *
 * THE CURRENT SML FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function data_repeat ($input, $multiplier = 1) {
  $multiplier = !is_numeric($multiplier) ? 1 : (
    (int)($multiplier)
  );

  $arr = [];

  for ($i = 1; $i <= $multiplier; $i++) {
    array_push ($arr, $input);
  }

  return $arr;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_properties
 * @Function Description: Get array property names
 * @Function Args: array $array
 */
if (!function_exists ('array_properties')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author  AuthorName
 * @keywords Function Keywords
 */
function array_properties ($array = null) {
  if (is_array ($array)) return array_keys ($array);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_stringify
 * @Function Description: Rewrite an array a string
 * @Function Args: array $array
 */
if (!function_exists ('array_stringify')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author  AuthorName
 * @keywords Function Keywords
 */
function array_stringify ($array = null) {
  if (!(is_array($array) && $array)) {
    return '[]';
  }
  /**
   * [$final_str The final string to be generated]
   * @var string
   */
  $final_str = '[';

  foreach ($array as $key => $val) {
    $keyValue = !is_int ($key) ? "'$key' => " : '';

    if (is_bool($val))
      $v = $val ? 'true' : 'false';
    elseif (is_numeric($val))
      $v = $val;
    elseif (is_string($val))
      $v = ('\'' . preg_replace('/\\\'/', '\'', $val) . '\'');
    elseif (is_array($val))
      $v = array_stringify ($val);
    else
      $v = '\''.json_encode ($val).'\'';

    $final_str .= $keyValue . ($v ? $v : 'null') . ', ';
  }

  return (preg_replace('/(,\s*)$/', '', $final_str) .
    ']'
  );
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_first_i
 * @Function Description: get the given array first item
 * @Function Args: $arrayrray $array
 */
if (!function_exists ('array_first_i')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords array, item, fisrt-intem
 */
function array_first_i ($array) {
  if (!!(is_array ($array) && $array)) {
    return $array [ 1 ];
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_last_i
 * @Function Description: Get The given array last item
 * @Function Args: $array = null
 */
if (!function_exists ('array_last_i')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords array, item , last-item
 */
function array_last_i ($array = null) {
  if (!!(is_array ($array) && $array)) {
    return $array [ -1 + count ($array) ];
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: get_declared_classes_extending
 * @Function Description: get a list of classes extending the given one
 * @Function Args: $class = null
 */
if (!function_exists ('get_declared_classes_extending')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords class, extending-classes
 */
function get_declared_classes_extending ($parent = null) {
  $classesList = get_declared_classes ();
  $foundClasses = array ();

  foreach ($classesList as $class) {
    $class_parents = class_parents ( $class );

    if (in_array ($parent, $class_parents)) {
      array_push ($foundClasses, $class);
    }
  }

  return $foundClasses;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: environment
 * @Function Description: Get the current ILS_ENV
 * @Function Args:
 */
if (!function_exists ('environment')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords environment
 */
function environment () {
  if (defined ('Configure::Environment')) {
    return strtolower (Configure::Environment);
  }

  return 'development';
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: timestamp
 * @Function Description: get the current timestamp
 * @Function Args:
 */
if (!function_exists ('timestamp')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author  AuthorName
 * @keywords Function Keywords
 */
function timestamp () {
  return date ('YmdHis');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: filemtimestamp
 * @Function Description: Get a file last modify time
 * @Function Args: $file = null
 */
if (!function_exists ('filemtimestamp')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords file, file modify, file last modify time
 */
function filemtimestamp ($file = null) {
  if (is_file ($file)) {
    return date ('YmdHis', filemtime ($file));
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: lower
 * @Function Description: convert the given string to lowercase
 * @Function Args: $string = null
 */
if (!function_exists ('lower')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords string, string to lower, lowercase
 */
function lower ($string = null) {
  if (is_string ($string)) {
    return strtolower ($string);
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: upper
 * @Function Description: convert the given string to uppercase
 * @Function Args: $string = null
 */
if (!function_exists ('upper')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords string, string to upper, uppercase
 */
function upper ($string = null) {
  if (is_string ($string)) {
    return strtoupper ($string);
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: capitalize
 * @Function Description: Capitalize whole the words in the given string
 * @Function Args: $string = null
 */
if (!function_exists ('capitalize')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords string, string capitalize, capital
 */
function capitalize ($string = null) {
  $string = (string)($string);
  $capitalizezString = '';
  $stringWords = preg_split ('/\s+/', $string);

  foreach ($stringWords as $i => $word) {
    $capitalizezString .= (lower (ucfirst ($word)) . ' ');
  }

  return $capitalizezString;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: abbr
 * @Function Description: Abreviate a given string
 * @Function Args: $string = null
 */
if (!function_exists ('abbr')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords abreviate
 */
function abbr ($string = null) {
  if (is_string ($string)) {
    $stringSlices = preg_split ('/\s+/i', trim ($string));
    $abbr = '';

    foreach ($stringSlices as $i => $stringSlice) {
      $abbr .= $stringSlice [ 0 ];
    }

    return $abbr;
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: date_props
 * @Function Description: Deformat a date string by day/month/year
 * @Function Args: $date = null, $s = '/\/+/'
 */
if (!function_exists ('date_props')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords date, format-reverce
 */
function date_props ($date = null, $s = '/\/+/') {
  $s = !is_string ($s) ? '/\/+/' : $s;

  $date = @preg_split ($s, $date);

  return (object)([
    'day' => isset ($date [0]) ? (int)(trim ($date[0])) : null,
    'mon' => isset ($date [1]) ? (int)(trim ($date[1])) : null,
    'year' => isset ($date [2]) ? (int)(trim ($date[2])) : null
  ]);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: time_props
 * @Function Description: get time properties as: hours, minutes and seconds
 * @Function Args: $time, $s = '/:+/'
 */
if (!function_exists ('time_props')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords time, time-properties
 */
function time_props ($time, $s = null) {
  $s = !is_string ($s) ? '/\s*:\s*/' : $s;

  $time = @preg_split ($s, $time);

  return (object)([
    'hours' => isset ($time [0]) ? (int)(trim ($date [0])) : null,
    'min' => isset ($time [1]) ? (int)(trim ($date [1])) : null,
    'sec' => isset ($time [2]) ? (int)(trim ($date [2])) : null
  ]);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: date_compare
 * @Function Description: compare two dates
 * @Function Args: $date1, $date2, $comp = '='
 */
if (!function_exists ('date_compare')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords date, date-compare
 */
function date_compare ($date1, $date2, $comp = '=') {
  $supported_comparations = preg_split (
    '/\s+/', '= == === > < >= >== <== <= ~sm ~sy ~sd ~s'
  );

  $comp = in_array ($comp, $supported_comparations) ? $comp : '=';
  $date1 = date_props ($date1);
  $date2 = date_props ($date2);

  switch ($comp) {
    case '=':
    case '==':
    case '===':
    case '~s':
      return (string)($date1) === (string)($date2);
    break;

    case '~sy':
      return $date1->year === $date2->year;
    break;

    case '~sm':
      return $date1->mon === $date2->mon;
    break;

    case '~sd':
      return $date1->day === $date2->day;
    break;

    case '>':
      if ($date1->year > $date2->year) {
        return true;
      } elseif ($date1->mon > $date2->mon && $date1->year >= $date2->year) {
        return true;
      } elseif ($date1->day > $date2->day && $date1->mon >= $date2->mon && $date1->year >= $date2->year) {
        return true;
      }
      return false;
    break;

    case '<':
      if ($date1->year < $date2->year) {
        return true;
      } elseif ($date1->mon < $date2->mon && $date1->year <= $date2->year) {
        return true;
      } elseif ($date1->day < $date2->day && $date1->mon <= $date2->mon && $date1->year <= $date2->year) {
        return true;
      }

      return false;
    break;

    case '>=':
    case '>==':
      return date_compare ($date1, $date2, '>') || date_compare ($date1, $date2, '=');
    break;

    case '<=':
    case '<==':
      return date_compare ($date1, $date2, '<') || date_compare ($date1, $date2, '=');
    break;

  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: time_compare
 * @Function Description: Compare times
 * @Function Args: $time_1 = null, $time_2 = null, $comp = '='
 */
if (!function_exists ('time_compare')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords time, timecompare, compare
 */
function time_compare ($time_1 = null, $time_2 = null, $comp = '=') {
  $supported_comparations = preg_split(
    '/\s+/', '= == === > < >= >== <== <= ~sm ~sh ~ss ~s'
  );

  $comp = in_array ($comp, $supported_comparations) ? $comp : '=';
  $time1 = time_props ($time_1);
  $time2 = time_props ($time_2);

  switch ($comp) {
    case '=':
    case '==':
    case '===':
    case '~s':
      return (string)($time1) === (string)($time2);
      break;

    case '~sh':
      return $time1->hours === $time2->hours;
      break;

    case '~sm':
      return $time1->min === $time2->min;
      break;

    case '~ss':
      return $time1->sec === $time2->sec;
      break;

    case '>':
      if ($time1->hours > $time2->hours) {
        return true;
      } elseif ($time1->min > $time2->min && $time1->hours >= $time2->hours) {
        return true;
      } elseif ($time1->sec > $time2->sec && $time1->min >= $time2->min && $time1->hours >= $time2->hours) {
        return true;
      }

      return false;
      break;

    case '<':
      if ($time1->hours < $time2->hours) {
        return true;
      } elseif ($time1->min < $time2->min && $time1->hours <= $time2->hours) { return true;
      } elseif ($time1->sec < $time2->sec && $time1->min <= $time2->min && $time1->hours <= $time2->hours) {
        return true;
      }

      return false;
      break;

    case '>=':
    case '>==':
      return time_compare ($time_1, $time_2, '>') || time_compare ($time_1, $time_2, '=');
      break;

    case '<=':
    case '<==':
      return time_compare ($time_1, $time_2, '<') || time_compare ($time_1, $time_2, '=');
      break;
  }
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: get_php_input
 * @Function Description: Get the input data sent from an http request
 * @Function Args:
 */
if (!function_exists ('get_php_input')) {
/**
 * @version 1.0
 *
 * THE CURRENT YAMT COMMAND IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function get_php_input () {
  return json_decode ( get_php_raw_input () );
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: get_php_raw_input
 * @Function Description: Get the php raw input sent from an http request
 * @Function Args:
 */
if (!function_exists ('get_php_raw_input')) {
/**
 * @version 1.0
 *
 * THE CURRENT YAMT COMMAND IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Ag
 * @keywords Function Keywords
 */
function get_php_raw_input () {
  return !function_exists ('file_get_contents') ? null : (
    call_user_func_array ('file_get_contents', array (
      'php://input'
    ))
  );
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: snake2camelcase
 * @Function Description: convert a string from snakecase to camelcase
 * @Function Args: $string = null
 */
if (!function_exists ('snake2camelcase')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords string, snake-case, camel-case
 */
function snake2camelcase ($string = null) {
  /**
   * [$str description]
   * @var string
   */
  $string = (string)($string);

  $string = preg_replace_callback (
    '/_+([a-zA-Z])/',
    function ($match) {
      return strtoupper ($match [1]);
    },
    $string
  );

  return ucfirst ($string);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: camel2snakecase
 * @Function Description: convert a string from snakecase to camelcase
 * @Function Args: $string = null
 */
if (!function_exists ('camel2snakecase')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords string, snake-case, camel-case
 */
function camel2snakecase ($string = null) {
  /**
   * [$str description]
   * @var string
   */
  $string = (string)($string);

  $string = preg_replace_callback (
    '/(.{0,1})([A-Z])/',
    function ($match) {

      $prevChar = isset ($match [1]) ? $match [1] : '';

      if (preg_match ('/^([a-zA-Z0-9]+)$/', $prevChar)) {
        return join ('', [$match [1], '_', $match [2]]);
      }

      return lower ($match [ 0 ]);
    },
    $string
  );

  return preg_replace ('/^_/', '', lower ($string));
}}

/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: url
 * @Function Description: Get the page url
 * @Function Args: $path = null
 */
if (!function_exists ('url')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author  AuthorName
 * @keywords Function Keywords
 */
function url ($path = null) {
  $path = (string)($path);

  $serverVariablesAvailables = (boolean) (
    isset($_SERVER ['SERVER_PROTOCOL']) &&
    isset($_SERVER ['SERVER_PORT']) &&
    isset($_SERVER ['SERVER_NAME'])
  );

  if (!$serverVariablesAvailables) {
    return (string)( $path );
  }

  $server_protocol = $_SERVER ['SERVER_PROTOCOL'];
  $server_name = $_SERVER ['SERVER_NAME'];

  preg_match ('/^([^\/]+)/', $server_protocol, $match);

  $protocol = lower ( $match [0] . '://' );

  $port = $_SERVER['SERVER_PORT'] === 80 ? '' : (
    ':' . $_SERVER['SERVER_PORT']
  );

  return join ('', [
    $protocol,
    $server_name,
    $port,
    preg_replace ('/^(\/*)/', '/', $path)
  ]);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: str
 * @Function Description: convert any data type to string
 * @Function Args: $data = null
 */
if (!function_exists ('str')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords str, convert to string, data to string
 */
function str ($data = null) {
  if (in_array (gettype ($data), ['array', 'object'])){
    return json_encode (lean_data ($data));
  } elseif (is_bool ($data)) {
    return $data ? 'true' : 'false';
  }

  return ((string)($data));
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_leanable
 * @Function Description: Verify if an object is leanable
 * @Function Args: $object = null
 */
if (!function_exists ('is_leanable')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords object, leanable-object
 */
function is_leanable ($object = null) {
  $leanableParents = [
    'Sammy\Packs\Sami\Base\ILeanable',
    'Sammy\Packs\ILeanable'
  ];

  if (!!(is_object ($object))) {
    $objectClassParents = class_parents (
      get_class ($object)
    );
    # map whole in the leanableParents
    # array in order verifying if one of
    # them is a parent for the given object
    # class.
    foreach ($leanableParents as $leanableParent) {
      # Verify if the current leanableParent
      # is a parent for the object class.
      if (in_array ($leanableParent, $objectClassParents)) {
        return true;
      }
    }
  }

  return false;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: lean_object
 * @Function Description: lean object
 * @Function Args: $object
 */
if (!function_exists ('lean_object')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords lean, object
 */
function lean_object ($object) {
  if (is_object ($object)) {
    if (is_leanable ($object)) {
      return $object->lean ();
    }
  } elseif (is_array ($object)) {
    foreach ($object as $key => $value) {
      $object [ $key ] = lean_object ($value);
    }
  }

  return $object;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: object_to_array
 * @Function Description: converts any class object to array
 * @Function Args: $object
 */
if (!function_exists ('object_to_array')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author AuthorName
 * @keywords Function Keywords
 */
function object_to_array ($object) {
  if (!(is_object ($object))) {
    return $object;
  }

  $object = (array)(lean_object ($object));

  $newObject = [];

  foreach ($object as $key => $value) {
    $newObject [ $key ] = object_to_array ($value);
  }

  return is_object ($newObject) ? ((array)($newObject)) : $newObject;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: array_to_object
 * @Function Description: converts any array to stdClass object
 * @Function Args: $array = null
 */
if (!function_exists ('array_to_object')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords array, object, converts
 */
function array_to_object ($array = null) {
  if (!(is_array ($array) && count ($array) >= 0)) {
    return is_array ($array) ? (object)($array) : $array;
  }

  $newArray = [];

  foreach ($array as $key => $value) {
    $newArray [$key] = array_to_object ($value);
  }

  return $newArray;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: path
 * @Function Description: Read a path from a given string
 * @Function Args: $path, $trace = null
 */
if (!function_exists ('path')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Saml'l
 * @keywords path
 */
function path ($path) {
  $trace = array_last_i (func_get_args ());
  $backTrace = debug_backtrace ();

  if (isset ( $trace [0] ) &&
    is_array ($trace [0]) &&
    isset ($trace [0]['file'])) {
    $backTrace = $trace;
  }

  if (isset ($trace ['file']) &&
    is_string ($trace ['file'])) {
    $backTrace = [ $trace ];
  }

  if (!(is_string ($path) && $path)) {
    return dirname ( @$backTrace [ 0 ]['file'] );
  }

  if ( preg_match ('/\.+(\/|\\\)/', $path) ) {
    $relativePath = dirname ( @$backTrace[ 0 ]['file'] ) . (
      DIRECTORY_SEPARATOR . $path
    );

    return is_file ($relativePath) ? $relativePath : $path;
  }

  return !class_exists ('php\module') ? $path : (
    php\module::ReadPath ( $path )
  );
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_anthng
 * @Function Description: Verify if items in a given data list are a given data type
 * @Function Args: array $args, string $dataType
 */
if (!function_exists ('are_anthng')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_anthng ($args = [], $dataType = null) {
  if (is_string ($dataType) && is_array ($args)) {
    if (count ($args) >= 1) {
      foreach ($args as $i => $arg) {
        $f = 'is_' . $dataType;
        if (!(function_exists ($f) && call_user_func_array ($f, [$arg]))) {
          return false;
        }
      }
    } else {
      return false;
    }

    return true;
  }

  return null;
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_strs
 * @Function Description: Verify if items in a given data list are_strs
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_strs')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_strs () {
  return are_anthng (func_get_args (), 'string');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_emptys
 * @Function Description: Verify if items in a given data list are_emptys
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_emptys')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_emptys () {
  return are_anthng (func_get_args (), 'empty');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_ints
 * @Function Description: Verify if items in a given data list are_ints
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_ints')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_ints () {
  return are_anthng (func_get_args (), 'int');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_arrays
 * @Function Description: Verify if items in a given data list are_arrays
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_arrays')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_arrays () {
  return are_anthng (func_get_args (), 'array');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_bools
 * @Function Description: Verify if items in a given data list are_bools
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_bools')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_bools () {
  return are_anthng (func_get_args (), 'bool');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_callables
 * @Function Description: Verify if items in a given data list are_callables
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_callables')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_callables () {
  return are_anthng (func_get_args (), 'callable');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_objects
 * @Function Description: Verify if items in a given data list are_objects
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_objects')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_objects () {
  return are_anthng (func_get_args (), 'object');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_doubles
 * @Function Description: Verify if items in a given data list are_doubles
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_doubles')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_doubles () {
  return are_anthng (func_get_args (), 'double');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_dirs
 * @Function Description: Verify if items in a given data list are_dirs
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_dirs')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_dirs () {
  return are_anthng (func_get_args (), 'dir');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_executables
 * @Function Description: Verify if items in a given data list are_executables
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_executables')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_executables () {
  return are_anthng (func_get_args (), 'executable');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_finites
 * @Function Description: Verify if items in a given data list are_finites
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_finites')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_finites () {
  return are_anthng (func_get_args (), 'finite');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_files
 * @Function Description: Verify if items in a given data list are_files
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_files')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_files () {
  return are_anthng (func_get_args (), 'file');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_floats
 * @Function Description: Verify if items in a given data list are_floats
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_floats')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_floats () {
  return are_anthng (func_get_args (), 'float');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_infinites
 * @Function Description: Verify if items in a given data list are_infinites
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_infinites')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_infinites () {
  return are_anthng (func_get_args (), 'infinite');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_integers
 * @Function Description: Verify if items in a given data list are_integers
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_integers')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_integers () {
  return are_anthng (func_get_args (), 'integer');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_links
 * @Function Description: Verify if items in a given data list are_links
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_links')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_links () {
  return are_anthng (func_get_args (), 'link');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_longs
 * @Function Description: Verify if items in a given data list are_longs
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_longs')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_longs () {
  return are_anthng (func_get_args (), 'long');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_null
 * @Function Description: Verify if items in a given data list are_null
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_null')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_null () {
  return are_anthng (func_get_args (), 'null');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_nan
 * @Function Description: Verify if items in a given data list are_nan
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_nan')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_nan () {
  return are_anthng (func_get_args (), 'nan');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_not_numbers
 * @Function Description: Verify if items in a given data list are_not_numbers
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_not_numbers')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_not_numbers () {
  return are_anthng (func_get_args (), 'nan');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_numerics
 * @Function Description: Verify if items in a given data list are_numerics
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_numerics')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_numerics () {
  return are_anthng (func_get_args (), 'numeric');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_not_numerics
 * @Function Description: Verify if items in a given data list are_not_numerics
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_not_numerics')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_not_numerics () {
    return are_anthng (func_get_args (), 'numeric');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_readables
 * @Function Description: Verify if items in a given data list are_readables
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_readables')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_readables () {
  return are_anthng (func_get_args (), 'readable');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_reals
 * @Function Description: Verify if items in a given data list are_reals
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_reals')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_reals () {
  return are_anthng (func_get_args (), 'real');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_resources
 * @Function Description: Verify if items in a given data list are_resources
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_resources')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_resources () {
  return are_anthng (func_get_args (), 'resource');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_scalars
 * @Function Description: Verify if items in a given data list are_scalars
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_scalars')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_scalars () {
  return are_anthng (func_get_args (), 'scalar');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_writeables
 * @Function Description: Verify if items in a given data list are_writeables
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_writeables')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_writeables () {
  return are_anthng (func_get_args (), 'writeable');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_writables
 * @Function Description: Verify if items in a given data list are_writables
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_writables')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_writables () {
  return are_anthng (func_get_args (), 'writable');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_funcs
 * @Function Description: Verify if items in a given data list are_funcs
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_funcs')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_funcs () {
  return are_anthng (func_get_args (), 'func');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_soap_faults
 * @Function Description: Verify if items in a given data list are_soap_faults
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_soap_faults')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_soap_faults () {
  return are_anthng (func_get_args (), 'soap_fault');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: are_uploaded_files
 * @Function Description: Verify if items in a given data list are_uploaded_files
 * @Function Args: ...$dataList
 */
if (!function_exists ('are_uploaded_files')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function are_uploaded_files () {
  return are_anthng (func_get_args (), 'uploaded_file');
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_email
 * @Function Description: Verify if a given data is a valid email
 * @Function Args: $data = null
 */
if (!function_exists ('is_email')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho sam'l
 * @keywords data, validation, email
 */
function is_email ($data = null) {
  return is_string ($data) && filter_var ($data, FILTER_VALIDATE_EMAIL);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_ip
 * @Function Description: Verify if a given data is a valid ip
 * @Function Args: $data = null
 */
if (!function_exists ('is_ip')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords data, validation, ip
 */
function is_ip ($data = null) {
  return is_string ($data) && filter_var ($data, FILTER_VALIDATE_IP);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_func
 * @Function Description: Verify if a given data is a valid callable object
 * @Function Args: $data = null
 */
if (!function_exists ('is_func')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function is_func ($data = null) {
  return ( boolean )(
    is_closure ($data) ||
    $data instanceof Sammy\Packs\Func
  );
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_func
 * @Function Description: Verify if a given data is a valid callable object
 * @Function Args: $data = null
 */
if (!function_exists ('is_closure')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords samils-helpers
 */
function is_closure ($data = null) {
  return ( boolean )($data instanceof Closure);
}}
/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: is_right_var_name
 * @Function Description: Verify if a given string is a valid variable name
 * @Function Args: $string = null
 */
if (!function_exists ('is_right_var_name')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords string, validateion, varname
 */
function is_right_var_name ($string = null) {
  return ( boolean ) (
    is_string ($string) &&
    @preg_match ('/^[a-zA-Z_]([a-zA-Z0-9_]*)$/', $string)
  );
}}

/**
 * Samils\Functions
 * @version 1.0
 * @author Sammy
 *
 * @keywords Samils, ils, ils-global-functions
 * ------------------------------------
 * - Autoload, application dependencies
 *
 * Make sure the command base internal function is not
 * declared in the php global scope defore creating
 * it.
 * It ensures that the script flux is not interrupted
 * when trying to run the current command by the cli
 * API.
 * ----
 * @Function Name: path_to_regex
 * @Function Description: Convert a path string to a regular expression
 * @Function Args: $path = null
 */
if (!function_exists ('path_to_regex')) {
/**
 * @version 1.0
 *
 * THE CURRENT ILS FUNCTION IS PROVIDED
 * TO AID THE DEVELOPMENT PROCESS IN ORDER
 * IT GET IN THE SAME WAY WHEN MOVING IT FROM
 * ANOTHER TO ANOTHER ENVIRONMENT.
 *
 * Note: on condition that this is an automatically
 * generated file, it should not be directly changed
 * without saving whole the changes into the original
 * repository source.
 *
 * @author Agostinho Sam'l
 * @keywords path, regex
 */
function path_to_regex ($path = null) {
  $specialCharsList = '/[\/\^\$\[\]\{\}\(\)\\\\.]/';

  return preg_replace_callback (
    $specialCharsList, function ($match) {
      return '\\' . $match[0];
  }, (string)$path);
}}
