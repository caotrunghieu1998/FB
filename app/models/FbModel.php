<?php
class FbModel extends Db
{
    public function login($userName, $password)
    {
        $sql = parent::$connection->prepare("INSERT INTO `users`(`userName`,`password`) 
        VALUE (? , ?)");
        $sql->bind_param('ss', $userName, $password);
        return $sql->execute();
    }
}
