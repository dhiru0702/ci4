<?php

namespace App\Controllers;
use App\Traits\CustomTrait;
class Home extends BaseController
{
    
    use CustomTrait; // Include the trait
    public function index(): string
    {
        return view('welcome_message');
    }
    function userList()
    {
        $data = [
            'a'=>$this->customMethod(),
        ];
        return view('index',$data);
    }
    function addUser()
    {
        
        return view('add_users');
    }
    function storeTestForm()
    {
        // return "fdf";
        
        dd($this->request->getVar());
        // echo "<pre>";
        // return print_r($this->request->getVar());
        // var_dump($this->request);
        // return $this->input->post();
    }
}

