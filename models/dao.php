<?php
class dao{

    public function select($query, $params = array()) {
    $stmt = connection::connectar()->prepare($query);
    $this->setParams($stmt, $params);
    $stmt->execute();
    $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resp;
}
    public function setBind($stmt, $key, $value) {
    $stmt->bindValue($key, $value);
}

    public function setParams($stmt, $params=array()) {
    foreach ($params as $key => $value) {
        $this->setBind($stmt, $key, $value);
    }
}
    public function sql($query,$params = []){
        $stmt = connection::connectar()->prepare($query);
         $this->setParams($stmt,$params);
         $stmt->execute();
    }
}