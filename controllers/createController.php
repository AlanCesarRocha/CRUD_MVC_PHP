<?php
class createController extends controller
{
    public function index()
    {
        $dados = [];
        $this->viewTemplateFull("create", $dados);
    }
public function create()
    {
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       
        if (!empty($data)) {
            $user = new user();
            $user->setNome($data['eNome']);
            $user->setEmail($data['eEmail']);
            $user->setTelefone($data['eTelefone']);
            $user->setPassword($data['ePass']);
            
            $user->userInsert();
            header("location:/read");
        }
    }
}