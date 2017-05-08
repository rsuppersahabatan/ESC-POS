<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  
  // using by vendor
  // class Guzzle {
  //   public function Guzzle() {
  //     // require_once('vendor/autoload.php');
  //     require 'vendor/autoload.php';
  //   }
  // }
  

  class Escpos
  {
  	public function __construct()
  	{
  		// require_once APPPATH . 'third_party/guzzle/autoloader.php';
      require_once APPPATH . 'third_party/Mike42/autoloader.php';
      // require_once APPPATH . 'third_party/guzzle6/autoloader.php';
  	}
  }
  
