<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('GoogleAuthenticator');
		$gaobj = new GoogleAuthenticator();
		$secret = "QFDK6TURKQMBAD2L";//$gaobj->createSecret();
		$token = $gaobj->getCode($secret);

		// echo($secret);
		// echo "<br>";
		// echo( $token);

		if(isset($_POST['MFA'])){

			$oneCode = $_POST['MFA'];
			$checkResult = $gaobj->verifyCode($secret, $oneCode, 2); // 2 = 2*30sec clock tolerance
			if (!$checkResult)
			{
				
				echo('Two-factor token Failed'); // index function load login page view
				
			}
			else
			{    
				// Two-factor code success and now steps for username and password verification
			} 
		}else{
			$qrMFA = $gaobj->getQRCodeGoogleUrl("Duong",$secret,"Tieu de");
			$data['subview'] = "index";
			$data['data'] =[
				'title'=>'Genarator Password',
				'qrMFA'=>$qrMFA,
			];
			$this->load->view("layout",$data);
			//echo "<img src='$img' />";
		}

	}
}
