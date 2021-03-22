<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function news()
	{
		$this->load->view('news');
	}
	public function reports()
	{
		$this->load->view('reports');
	}
	public function ambulance()
	{
		$this->load->view('ambulance');
	}
	public function hospital()
	{
		$this->load->view('hospitalSuggestion');
	}
	public function freezer()
	{
		$this->load->view('freezer');
	}
	public function generaltips()
	{
		$this->load->view('tips/generalTips');
	}
	public function agetips()
	{
		$this->load->view('tips/ageWiseTips');
	}
	public function symptomtips()
	{
		$this->load->view('tips/symptomWiseTips');
	}

	// Features pages

	public function periodCycle()
	{
	$this->load->view('features/PeriodCycle');
	}
	public function healthTips()
	{
	$this->load->view('features/HealthTips');
	}
	public function healthAssistence()
	{
	$this->load->view('features/HealthAssistance');
	}
	public function healthDirectory()
	{
	$this->load->view('features/HealthDirectory');
	}
	public function awareness()
	{
	$this->load->view('features/Awareness');
	}
}
