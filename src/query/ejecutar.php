<?php

namespace MyApp\data;
namespace MyApp\query;
use PDO;
use PDOException;
use MyApp\data\Database;

class ejecutar
{
    public function ejecutar($qry)
    {
        try
        {
            $con = new Database("new_schema1","root","");
            $objetoPDO = $con->getPDO();
            $objetoPDO -> query($qry);
            $con->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>