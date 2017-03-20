<?php

/**
* Test enitity class for healthcheck
*/
class ContactingPersonEntity 
{
	protected $id;
	protected $name;
	protected $email;
    protected $phone;
	protected $subject;
	protected $message;


	public function __construct(array $data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->subject = $data['subject'];
        $this->message = $data['message'];
        
    }
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getSubject() {
        return $this->subject;
    }
    public function getMessage() {
        return $this->message;
    }
}