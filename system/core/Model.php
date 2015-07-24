<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {

	/* ================================================================= */
	//Put the codes below in system/core/Controller.php, Model.php
	// for Eclipse auto completion
	
	/**
	 * @var CI_Benchmark
	 */
	private $benchmark;
	/**
	 * @var CI_Calendar
	 */
	private $calendar;
	/**
	 * @var CI_Cart
	 */
	private $cart;
	/**
	 * @var CI_Config
	 */
	private $config;
	/**
	 * @var CI_DB_active_record
	 */
	private $db;
	/**
	 * @var CI_Email
	 */
	private $email;
	/**
	 * @var CI_Encrypt
	 */
	private $encrypt;
	/**
	 * @var CI_Form_validation
	 */
	private $form_validation;
	/**
	 * @var CI_Ftp
	 */
	private $ftp;
	/**
	 * @var CI_Image_lib
	 */
	private $image_lib;
	/**
	 * @var CI_Input
	 */
	private $input;
	/**
	 * @var CI_Javascript
	 */
	private $javascript;
	/**
	 * @var CI_Lang
	 */
	private $lang;
	/**
	 * @var CI_Loader
	 */
	private $load;
	/**
	 * @var CI_Log
	 */
	private $log;
	/**
	 * @var CI_Output
	 */
	private $output;
	/**
	 * @var CI_Pagination
	 */
	private $pagination;
	/**
	 * @var CI_Parser
	 */
	private $parser;
	/**
	 * @var CI_Security
	 */
	private $security;
	/**
	 * @var CI_Session
	 */
	private $session;
	/**
	 * @var CI_Sha1
	 */
	private $sha1;
	/**
	 * @var CI_Table
	 */
	private $table;
	/**
	 * @var CI_Trackback
	 */
	private $trackback;
	/**
	 * @var CI_Typography
	 */
	private $typography;
	/**
	 * @var CI_URI
	 */
	private $uri;
	/**
	 * @var CI_Unit_test
	 */
	private $unit;
	/**
	 * @var CI_Upload
	 */
	private $upload;
	/**
	 * @var CI_User_agent
	 */
	private $agent;
	/**
	 * @var CI_Utf8
	 */
	private $utf8;
	/**
	 * @var CI_Xmlrpc
	 */
	private $xmlrpc;
	/**
	 * @var CI_Xmlrpcs
	 */
	private $xmlrpcs;
	/**
	 * @var CI_Zip
	 */
	private $zip;
	
	/* ================================================================= */
	
	/**
	 * Constructor
	 *
	 * @access public
	 */
	function __construct()
	{
		log_message('debug', "Model Class Initialized");
	}

	/**
	 * __get
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string
	 * @access private
	 */
	function __get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
}
// END Model Class

/* End of file Model.php */
/* Location: ./system/core/Model.php */