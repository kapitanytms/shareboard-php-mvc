<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 3:57 PM
 */

abstract class Model {
    protected $dbh;
    protected $stmt;

    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);

    }

    public function bind($param, $value, $type = null){
        if(is_null($type)) {
            switch (true) {
                CASE is_int($value): $type = PDO::PARAM_INT; break;
                CASE is_bool($value): $type = PDO::PARAM_BOOL; break;
                CASE is_null($value): $type = PDO::PARAM_NULL; break;
                DEFAULT: $type = PDO::PARAM_STR; break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

}