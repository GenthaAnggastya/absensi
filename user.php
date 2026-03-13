<?php

// Interface
interface UserInterface {
    public function getRole();
}

// Parent Class
class User {

    // Property
    protected $nama;

    // Constructor Method
    public function __construct($nama){
        $this->nama = $nama;
    }

    // Method
    public function getNama(){
        return $this->nama;
    }

}

// Child Class (Inheritance)
class Mahasiswa extends User implements UserInterface {

    // Polymorphism (method dari interface)
    public function getRole(){
        return "Mahasiswa";
    }

}

?>