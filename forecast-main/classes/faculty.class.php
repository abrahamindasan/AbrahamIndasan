<?php

Class Faculty{
    //attributes

    public $firstName;
    public $lastName;
    public $email;
    public $rank;
    public $department;
    public $role;
    public $status;


    //Methods
    function add_faculty(){
        $faculty = array(
            "firstname" => $this->firstName,
            "lastname" => $this->lastName,
            "email" => $this->email,
            "academic_rank" => $this->rank,
            "department" => $this->department,
            "admission_role" => $this->role,
            "status" => $this->status
        );
        if(array_push($_SESSION['faculty'], $faculty)){
            return true;
        }
        return false;
    }
}

?>