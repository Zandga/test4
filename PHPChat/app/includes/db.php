<?php

class DB {
    public static function fetch(string $request, array $data, bool $all = false) {

        $pdo = new PDO('mysql:host=localhost;dbname=webchat', "zandga", "zandga123");

        $request = $pdo -> prepare($request);
        $request -> execute($data);

        if($all === true) {
            return $request -> fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $request -> fetch(PDO::FETCH_ASSOC);
        } 
    }
}
