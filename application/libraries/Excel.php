<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'/libraries/PHPExcel-1.8/Classes/PHPExcel.php');
// include_once APPPATH . '/third_party/fpdf/fpdf.php';

class Excel extends PHPExcel{

    public function __construct(){

        parent::__construct();

    }

}
