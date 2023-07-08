<?php


class Pages{
    public function __construct()
    {
        
    }

    public function index()
    {
        echo "index of pages";
    }

    public function edit($id)
    {       
        echo $id;
    }
}