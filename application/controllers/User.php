<?php
class User extends CI_controller{
    function index(){
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data["users"] = $users;
        $data['title'] = "List Users";
        $this->load->view('include_files/header', $data);
        $this->load->view('include_files/navbar');
        $this->load->view('list', $data);
        $this->load->view('include_files/footer');
    }

    function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
            $data['title'] = "Create User";
            $this->load->view('include_files/header', $data);
            $this->load->view('include_files/navbar');
            $this->load->view('create');
            $this->load->view('include_files/footer');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['created_at'] = date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Record added successfully!');
            redirect(base_url().'index.php/user/index');
        }
    }

    function edit($userID){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userID);
        $data = array();
        $data['user'] = $user;
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
            $data['title'] = "Edit User";
            $this->load->view('include_files/header', $data);
            $this->load->view('include_files/navbar');
            $this->load->view('edit', $data);
            $this->load->view('include_files/footer');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->User_model->updateUser($userID, $formArray);
            $this->session->set_flashdata('success', 'Record updated successfully!');
            redirect(base_url().'index.php/user/index');
        }
    }

    function delete($userID){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userID);
        if(empty($user)){
            $this->session->set_flashdata('failuer', 'User not found!');
            redirect(base_url().'index.php/user/index');
        }
        $this->User_model->deleteUser($userID);
        $this->session->set_flashdata('warning', 'User Deleted!');
        redirect(base_url().'index.php/user/index');
    }
}
