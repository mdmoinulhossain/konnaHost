<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Admin Controller
 *
 * @property M_User $mu
 * @property CI_Session $session
 *
 */

/**
 * Detect if admin is logged in or not
 * @var bool
 */
$isLoggedIn = false;

function __construct() {
    if ($this->session->has_userdata('logged_in') && $this->session->userdata('logged_in') === true) {
        $this->isLoggedIn = true;
    }
}

class User extends CI_Controller {
    /**
     * Process user sign in
     */
    public function index() {
        if ($this->input->post('email')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === true) {
                $email = $this->input->post('email', true);
                $password = $this->input->post('password', true);
                $userInfo = $this->mu->signIn($email, $password);
                if (!empty($userInfo)) {
                    $this->session->set_userdata('name', $userInfo->user_fullname);
                    $this->session->set_userdata('dob', $userInfo->user_dob);
                    $this->session->set_userdata('id', $userInfo->user_id);
                    redirect('user/dashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Please, fill the form properly!');
                redirect('user/login');
            }
        }

        $this->signIn();
    }

    /**
     * Show user sign-up form
     */
	public function signUp() {
        $this->load->view('user/signup');
    }

    /**
     * Show user sign-in form
     */
    public function signIn() {
        $this->load->view('user/login');
    }

    /**
     * Process user sign up
     */
    public function processSignUp() {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('contact', 'Contact No', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/sign-up');
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $contact = $this->input->post('contact', true);
            $dob = $this->input->post('dob', true);
            $userInfo = $this->mu->insertUserData($name, $email, $password, $contact, $dob);

            if ($userInfo) {
                $this->session->set_flashdata('success', 'Congatulations! you can sign in now!');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('error', 'Sign-up failed! Database error occured');
                redirect('user/sign-up');
            }
        }
    }

    /**
     * Show User dashboard
     */
    public function dashboard($year = NULL , $month = NULL) {
        $this->load->model('Mycal_model');
		$data['calender'] = $this->Mycal_model->getcalender($year , $month);
		$this->load->view('user/dashboard', $data);
    }

    /**
     * User logout
     */
    public function logout()
    {
        $this->session->unset_userdata('name', $userInfo->user_fullname);  
        redirect('/');
    }

    public function symptoms() {
        $this->load->view('user/symptoms');
    }

    public function medication() {
        $this->load->view('user/medication');
    }

    public function insertSymptoms() {
        $this->form_validation->set_rules('id', 'User ID', 'required');
        $this->form_validation->set_rules('symptoms', 'Symptoms', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/symptoms');
        } else {
            $id = $this->input->post('id', true);
            $symptoms = $this->input->post('symptoms', true);
            $userSymptoms = $this->mu->insertUserSymptoms($id, $symptoms);

            if ($userSymptoms) {
                $this->session->set_flashdata('success', 'Congatulations! you can sign in now!');
                redirect('user/symptoms');
            } else {
                $this->session->set_flashdata('success', 'We will get back to you soon!');
                redirect('user/symptoms');
            }
        }
    }

    public function insertMedication() {
        $this->form_validation->set_rules('id', 'User ID', 'required');
        $this->form_validation->set_rules('medicine', 'Medicine Name', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/medication');
        } else {
            $id = $this->input->post('id', true);
            $medicine = $this->input->post('medicine', true);
            $time = $this->input->post('time', true);
            $userMedication = $this->mu->insertUserMedication($id, $medicine, $time);

            if ($userMedication) {
                $this->session->set_flashdata('success', 'Failed');
                redirect('user/medication');
            } else {
                $this->session->set_flashdata('success', 'Congratulations!');
                redirect('user/medication');
            }
        }
    }

    public function insertDoctorsAppoinment() {
        $this->form_validation->set_rules('id', 'User ID', 'required');
        $this->form_validation->set_rules('docname', 'Doctors Name', 'required');
        $this->form_validation->set_rules('place', 'Place', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/doctor');
        } else {
            $id = $this->input->post('id', true);
            $docname = $this->input->post('docname', true);
            $place = $this->input->post('place', true);
            $date = $this->input->post('date', true);
            $userDocAppoinment = $this->mu->insertUserDocAppoinment($id, $docname, $place, $date);

            if ($userDocAppoinment) {
                $this->session->set_flashdata('success', 'Congatulations! you can sign in now!');
                redirect('user/doctor');
            } else {
                $this->session->set_flashdata('success', 'We will get back to you soon!');
                redirect('user/doctor');
            }
        }
    }

    public function insertPeriod() {
        $this->form_validation->set_rules('id', 'User ID', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/period');
        } else {
            $id = $this->input->post('id', true);
            $date = $this->input->post('date', true);
            $content = $this->input->post('content', true);
            $userPeriod = $this->mu->insertUserPeriod($id, $date, $content);

            if ($userPeriod) {
                $this->session->set_flashdata('success', 'Congatulations! you can sign in now!');
                redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('success', 'We will get back to you soon!');
                redirect('user/dashboard');
            }
        }
    }

    public function ageTips () {
        $this->load->view('tips/ageWiseTips');
    }

    public function edit ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/edit', $data);
    }

    public function editPeriod ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/edit-period', $data);
    }

    public function data ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/data', $data);
    }

    public function symptomLog ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/symptom-log', $data);
    }

    public function medicationReminder ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/medication-reminder', $data);
    }

    public function doctorReminder ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/doctor-reminder', $data);
    }

    public function periodDate ($user_id) {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->view('user/dashboard', $data);
    }

    public function doctorcal () {
        $this->load->view('user/doctorcalview');
    }

    public function period () {
        $this->load->view('user/period');
    }

    public function update() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('contact', 'Contact No', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/edit');
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $contact = $this->input->post('contact', true);
            $dob = $this->input->post('dob', true);
            $userInfo = array('user_fullname'=>$name, 'user_email'=>$email, 'user_password'=>$password,
                                    'user_contact'=>$contact, 'user_dob'=>$dob);
            $userUpdate = $this->mu->updateUserData($name, $email, $password, $contact, $dob);

            if ($userInfo) {
                $this->session->set_flashdata('success', 'Congatulations! your profile is updated!');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('error', 'Sign-up failed! Database error occured');
                redirect('user/sign-up');
            }
        }
    }

    public function periodUpdate() {
        $this->form_validation->set_rules('id', 'User Id', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please, fill the form properly!');
            redirect('user/edit-period');
        } else {
            $user_id = $this->input->post('id', true);
            $date = $this->input->post('date', true);
            $content = $this->input->post('content', true);
            // $userInfo = array('user_fullname'=>$name, 'user_email'=>$email, 'user_password'=>$password,
            //                         'user_contact'=>$contact, 'user_dob'=>$dob);
            $userPeriodUpdate = $this->mu->updatePeriodUserData($user_id, $date, $content);

            if ($userPeriodUpdate) {
                $this->session->set_flashdata('success', 'Congatulations! your profile is updated!');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('error', 'Sign-up failed! Database error occured');
                redirect('user/sign-up');
            }
        }
    }
}