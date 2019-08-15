<?php
//CRUD nome ,email,telefone,senha
class user
{
    private $nome;
    private $email;
    private $telefone;
    private $password;
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function userInsert()
    {
        $db = new dao();
        $db->sql("CALL sp_insert_user(:u_nome,:u_email,:u_tel,:u_pass);", array(
            ":u_nome" => $this->getNome(),
            ":u_email" => $this->getEmail(),
            ":u_tel" => $this->getTelefone(),
            ":u_pass" => password_hash($this->getPassword(), PASSWORD_BCRYPT)
        ));
    }
    public function userRead()
    {
        $response = [];
        $db = new dao();
        $user = $db->select("CALL sp_read_user()", array());
        if (count($user) > 0) {
            return $user;
        }
    }
    public function userUpdate($id)
    {
        $db = new dao();
        $db->sql("CALL sp_update_user(:u_id,:u_nome,:u_email,:u_tel)", array(
            "u_id" => $id,
            ":u_nome" => $this->getNome(),
            ":u_email" => $this->getEmail(),
            ":u_tel" => $this->getTelefone()
        ));
    }
    public function userDelete($id)
    {
        $db = new dao();
        $db->sql("CALL sp_delete_user(:id)", array(":id" => $id));
    }
}
