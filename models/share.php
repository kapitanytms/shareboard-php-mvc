<?php
/**
 * Created by PhpStorm.
 * User: Tamas
 * Date: 2018-03-04
 * Time: 4:07 PM
 */

class ShareModel extends Model {
    public function index() {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
//        print_r($rows);
        return $rows;
    }
}