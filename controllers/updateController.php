<?php

class updateController extends controller
{
    public function index()
    {
        $dados = [];
        $this->viewTemplateFull("update", $dados);
    }
    public function update($id)
    {

        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data) and !empty($id)) {
            $user = new user();
            $user->setNome($data['eNome']);
            $user->setEmail($data['eEmail']);
            $user->setTelefone($data['eTelefone']);

            $user->userUpdate($id);
            header("location:/read");
        }
    }
}
