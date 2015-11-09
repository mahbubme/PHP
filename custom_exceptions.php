<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'a_database';

class ServerException extends exception{};
class DatabaseException extends exception{};

try{
    if (!@mysql_connect($db_host, $db_user, $db_pass)) {
        throw new ServerException('Could not connect to server.');
    }else if (!@mysql_select_db($db_name)) {
        throw new DatabaseException('Could not select database.');
    }else {
        echo 'Connected.';
    }
}catch (ServerException $ex) {
    echo 'Error: '.$ex->getMessage();
}catch (DatabaseException $ex) {
    echo 'Error: '.$ex->getMessage();
}


?>