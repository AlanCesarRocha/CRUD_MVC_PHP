<?php
class homeController extends controller
{
    public function index()
    {
        $dados = [];
        $this->viewTemplateFull("home", $dados);
    }

}
