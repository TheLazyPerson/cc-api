<?php

/**
* Test enitity class for healthcheck
*/
class GeneralInformationEntity 
{
	protected $id;
	protected $contactusemail;
	protected $phoneno;
    protected $sqfeetconstructed;
	protected $happyfamilies;
	protected $noofprojects;
    protected $facebook;
    protected $twitter;
    protected $instagram;

	public function __construct(array $data) {
        $this->id = $data['id'];
        $this->contactusemail = $data['contactusemail'];
        $this->phoneno = $data['phoneno'];
        $this->sqfeetconstructed = $data['sqfeetconstructed'];
        $this->happyfamilies = $data['happyfamilies'];
        $this->noofprojects = $data['noofprojects'];
        $this->facebook = $data['facebook'];
        $this->twitter = $data['twitter'];
        $this->instagram = $data['instagram'];
        
    }
    public function getId() {
        return $this->id;
    }
    public function getContactUsEmail() {
        return $this->contactusemail;
    }
    public function getPhoneNumber() {
        return $this->phoneno;
    }
    public function getSquareFeetConstructed() {
        return $this->sqfeetconstructed;
    }
    public function getNumberOfHappyFamilies() {
        return $this->happyfamilies;
    }
    public function getNumberOfProjects() {
        return $this->noofprojects;
    }
    public function getFacebookLink() {
        return $this->facebook;
    }
    public function getTwitterLink() {
        return $this->twitter;
    }
    public function getInstagramLink() {
        return $this->instagram;
    }
}