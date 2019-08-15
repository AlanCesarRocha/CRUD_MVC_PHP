<?php
class readController extends controller
{
    public function index()
    {
        $data = [];
        $user = new user();
        $data = $user->userRead();
        $this->viewTemplateFull("read", $data);
    }
    
}