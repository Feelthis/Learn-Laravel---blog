<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $FirstName = 'Sergey';
        $LastName = 'Shashkov';
        $fullname = $FirstName . ' ' . $LastName;
        $email = 'sshashkov@bk.ru';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact()
    {

    }
    
}