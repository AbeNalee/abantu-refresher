<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class ImplicitController extends Controller {

    public function __construct(\MyClass $myclass)
    {
        $this->myClass = $myclass;
    }

    /**
     * Responds to requests to GET /test
     */
    public function index(\MyClass $myClass){
        dd($myClass);
    }

    /**
     * Responds to requests to GET /test/show/1
     */
    public function show($id) {
        dd($this->myClass);
    }

    /**
     * Responds to requests to GET /test/admin-profile
     */
    public function getAdminProfile() {
        echo 'admin profile method';
    }

    /**
     * Responds to requests to POST /test/profile
     */
    public function postProfile() {
        echo 'profile method';
    }
}