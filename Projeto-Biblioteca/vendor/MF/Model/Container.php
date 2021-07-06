<?php

namespace MF\Model;
use App\Connection;

class Container{
    // Quando o método é estático, torna-se possivel executa-lo sem a necessidade de instanciar um objeto,
    //é possivel executar o método a partir da referencia da classe (Ex:(Constainer::"nome_metodo))
    public static function getModel($model){
        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::getDB();

        return new $class($conn);
    }
}


?>