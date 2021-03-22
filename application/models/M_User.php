<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Admin_Model
 * Model class for application's database handle
 *
 * @property CI_DB_query_builder $db
 *
 */
class M_User extends CI_Model {
    /**
     * Check admin credentials
     * 
     * @param string $email
     * @param string $password
     * @return object|bool
     */
    public function signIn(string $email, string $password) {
        $result = $this->db->get_where('users', array('user_email' => $email))->row();

        if (empty($result)) {
            $this->session->set_flashdata('error', 'Email does not exist!');
            return false;
        }

        if (password_verify($password, $result->user_password)) {
            return $result;
        } else {
            $this->session->set_flashdata('error', 'Password did not match!');
            return false;
        }
    }

    /**
     * Insert user data into table
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string $contact 
     * @param string $age
     * @return int|bool
     */
    public function insertUserData(string $name, string $email, string $password, string $contact, string $dob) {
        $userData = [
          'user_fullname' => $name,
          'user_email' => $email,
          'user_password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
          'user_contact	' => $contact,
          'user_dob' => $dob
        ];

        $result = $this->db->insert('users', $userData);
        return $result ? $this->db->insert_id() : false;
    }

    
    public function insertUserSymptoms($id, $symptoms) {
        $userSymptoms = [
          'user_id' => $id,
          'user_symptoms' => $symptoms
        ];

        $result = $this->db->insert('symptoms', $userSymptoms);
        return $result ? $this->db->insert_id() : false;
    }

    public function insertUserMedication($id, $medicine, $time) {
        $userMedication = [
          'user_id' => $id,
          'medicine' => $medicine,
          'medicine_time' => $time
        ];

        $result = $this->db->insert('medication', $userMedication);
        return $result ? $this->db->insert_id() : false;
    }

    public function insertUserDocAppoinment($id, $docname, $place, $date) {
        $userDocAppoinment = [
          'user_id' => $id,
          'doctor' => $docname,
          'place' => $place,
          'doc_date' => $date
        ];

        $result = $this->db->insert('userdocappoinment', $userDocAppoinment);
        return $result ? $this->db->insert_id() : false;
    }

    public function insertUserPeriod($id, $date, $content) {
        $userPeriod = [
          'user_id' => $id,
          'id' => '',
          'mydate' => $date,
          'content' => $content,
          'status' => '',
        ];

        $result = $this->db->insert('calendar', $userPeriod);
        return $result ? $this->db->insert_id() : false;
    }

    function getUserInfo($user_id)
    {
        $this->db->select('user_fullname, user_email, user_password, user_contact, user_dob, doctor, place, doc_date, medicine, medicine_time, mydate, content, user_symptoms');
        $this->db->from('users');
        $this->db->join('userdocappoinment', 'userdocappoinment.user_id = users.user_id', 'left');
        $this->db->join('medication', 'medication.user_id = users.user_id', 'left');
        $this->db->join('calendar', 'calendar.user_id = users.user_id', 'left');
        $this->db->join('symptoms', 'symptoms.user_id = users.user_id', 'left');
        $this->db->where('users.user_id', $user_id);
        
        $query = $this->db->get();

        return $query->result();
    }

    public function updateUserData($name, $email, $password, $contact, $dob) {
        $userInfo = [
            'user_fullname' => $name,
            'user_email' => $email,
            'user_password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
            'user_contact	' => $contact,
            'user_dob' => $dob
        ];
        $this->db->where('user_email', $email);
        $this->db->update('users', $userInfo);
        return TRUE;
    }

    public function updatePeriodUserData($user_id, $date, $content) {
        $userInfo = [
            'user_id' => $user_id,
            'mydate' => $date,
            'content' => $content
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('calendar', $userInfo);
        return TRUE;
    }
}




