<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $theme = 'theme1';

	function __construct()
	{
		// parent::__construct();
		parent::__construct();
		$this->load->library('session');
		$theme = $this->session->userdata('theme_name'); 
		$this->theme = isset($theme) ? $theme : $this->theme;
	}

	public function index2()
	{
		$this->load->library('parser');
		
		$menu = array();
		$data['theme'] = 'http://themicon.co/theme/angle/v3.8.5/html5jquery-bs4/app/';
		$data['menu'] = $menu;			

		echo $this->parser->parse($this->theme.'/'.'blog_template', $data);
	}

	function index(){
	   $this->load->helper('form'); 
	   $this->load->library('form_builder');	 	
	   $this->load->view('dynamic_form');  
	}

	function index3(){
// ref : https://docs.aws.amazon.com/AWSECommerceService/latest/DG/RG_Medium.html
// ref : https://www.sitepoint.com/amazon-product-api-exploration-lets-build-a-product-search/
		
		try {

		      $query = [
		                 'Service' => 'AWSECommerceService',
		                 'Operation' => 'ItemLookup',
		                 'ResponseGroup' => 'Medium',
		                 'IdType' => 'ASIN',
		                 'ItemId' => 'B00BGO0Q9O'
		                 // 'AssociateTag' => $this->associate_tag,
		                 // 'AWSAccessKeyId' => $this->access_key,
		                 // 'Timestamp' => date('c')
		               ];

		      $req = array(
		                  'access_key'=>'AKIAIJ47TIKONV2SYLOA',
		                  'secret_key'=>'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',
		                  'associate_tag'=>'openshopi-21'
		               );

				$this->load->library('depp',$req);
		      	$reqult = $this->depp->doQuery($query);
		      	echo "<pre>";
		      	print_r(json_decode(json_encode((array)$reqult), TRUE));

		} catch(Exception $e) {
		      echo "something went wrong: <br>";
		      echo $e->getMessage();
		}
	}
	
}
