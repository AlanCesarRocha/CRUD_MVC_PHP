<?php
class deleteController extends controller
{
    public function index()
    {
        $dados = [];
        $this->viewTemplateFull("home", $dados);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $user = new user();
            $user->userDelete($id);
            header("location:/read");
        }
    }
}
