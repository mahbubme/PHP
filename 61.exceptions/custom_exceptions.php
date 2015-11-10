<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'a_database';

class ServerException extends exception{
    public function showSpecific() {
        return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
    }
}

class DatabaseException extends exception{
    public function showSpecific() {
        return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
    }
}

try{
    if (!@mysql_connect($db_host, $db_user, $db_pass)) {
        throw new ServerException();
    }else if (!@mysql_select_db($db_name)) {
        throw new DatabaseException();
    }else {
        echo 'Connected.';
    }
}catch (ServerException $ex) {
    echo $ex->showSpecific();
}catch (DatabaseException $ex) {
    echo $ex->showSpecific();
}


?>