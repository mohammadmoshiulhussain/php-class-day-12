<?php
namespace App\classes;
class FullName
{
    public $firstName;
    public $lasttName;
    public $fullName;

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lasttName = $data['last_name'];
    }

    public function index()
    {
        $this->fullName = $this->firstName.' '.$this->lasttName;
        return $this->fullName;
    }
}