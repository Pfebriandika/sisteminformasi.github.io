<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testing extends CI_Controller
{


	public function index()
	{
		$photo = "assets/images/acc.png";
		$new_filename = "mynewfilename.png";

		// fopen($photo, 'r+');
		$a = $this->space->space->UploadFile($photo, "public", "testing/" . $new_filename, "image/png");

		#space will create new folder automatically
		$url_upload = $a['ObjectURL'];
		var_dump($url_upload);
		// $this->load->view('welcome_message');
	}

	public function delete()
	{
		$filename = "mynewfilename.png";
		$a = $this->space->space->DeleteObject("testing/" . $filename);

		var_dump($a);
		// $this->load->view('welcome_message');
	}

	public function list()
	{
		$filename = "mynewfilename.png";
		$a = $this->space->space->ListObjects();

		var_dump($a);
		// $this->load->view('welcome_message');
	}
}
