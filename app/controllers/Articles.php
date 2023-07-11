<?php

class Articles extends Controller{
    // public function __construct()
    // {
    //     echo "article class";
    // }

    public function index()
    {
        $this->view('mohamad');
    }

    public function edit($id)
    {
        echo $id;
    }
}