<?php
    include_once ('../libraries/Database.php');
   $host    = 'localhost:3306';
   $user    = 'root';
   $pass    = '';
   $db      = 'basic_mysql';
   $charset = 'utf8';
   $database = new Database($host, $db, $user, $pass);
   $result = $database->select(['oderstudents', 'time_star'], 'subjects');
   foreach($result as $item){
       echo 'Mon ' . $item['oderstudents'] . ' hoc trong ' . $item['time_star'] . ' ngay <br />';
}   
// // insert
// $dataInsert = [
//     'fields' => 'name,age,phone',
//     'values' => [
//         ['Diep An', 10, '0843757843545'],
//         ['Hanh', 11, '048357435'],
//         ['Dat', 12, '095374853']
//     ]
// ];
// $database->insert($dataInsert, 'students');
// // delete table
// //$database->delete('subjects');