<?php 

namespace App\Provider;

require_once  __DIR__."/../pdo.php";

class ItemDbProvider implements IProvider
{
    public function findAll(): array
    {
        try{
            $pdo = getPdoInstance();
        } catch (\PDOException $e){
            throw $e;
        }
        $res = $pdo->query("SELECT * FROM item");
        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findTop(): array
    {
        try{
            $pdo = getPdoInstance();
        } catch (\PDOException $e){
            throw $e;
        }
        $res = $pdo->query("SELECT * FROM item WHERE item_visible=1 LIMIT 6");
        return $res->fetchAll(\PDO::FETCH_ASSOC);   
    }

    public function findActiv(): array
    {
        try{
            $pdo = getPdoInstance();
        } catch (\PDOException $e){
            throw $e;
        }
        $res = $pdo->query("SELECT * FROM item WHERE item_visible=1");
        return $res->fetchAll(\PDO::FETCH_ASSOC);    
    }
}   
