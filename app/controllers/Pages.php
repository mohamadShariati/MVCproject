<?php


class Pages extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
       $this->view('pages/index');
    }

    public function edit($id)
    {       
        echo 3;
    }


    public function about()
    {
       
        $data= ['name'=>'mohamad shariati'];
        $this->view('pages/about',$data);
    }
}