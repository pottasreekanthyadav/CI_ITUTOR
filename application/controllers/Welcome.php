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
		$this->load->view('welcome_message');
	}
	public function get_cur_location_name()
	{
		$latitude = $this->input->post('lat');
		$longitude = $this->input->post('lng');
		$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE";
		$streamContext = stream_context_create([
		'ssl' => [
		'verify_peer'  => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true,
		'verify_depth'  => 0
		]
		]);
		$get_adrs = file_get_contents($url,false, $streamContext);
		$get_adrs = json_decode($get_adrs);
		$results = $get_adrs->results;
		$adrs = $results[0]->formatted_address;
		$response = array();
		$response['location_name'] = $adrs;
		echo json_encode($response);
	}
	public function get_latlng()
	{
		$adrs = $this->input->post('adrs');
		$url = "https://maps.googleapis.com/maps/api/geocode/json?address=$adrs&key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE";
		$streamContext = stream_context_create([
		'ssl' => [
		'verify_peer'  => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true,
		'verify_depth'  => 0
		]
		]);
		$get_latlng = file_get_contents($url,false, $streamContext);
		print_r($get_latlng);exit;
	}
}
