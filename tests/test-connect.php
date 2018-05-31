<?php
$database = include_once('../libraries/connect-mysql.php');
$menus = [
    'fields' => 'name',
    'values' => [
        ['Trang chủ'],
        ['Nhật ký'],
        ['Lập trình'],
        ['Về tôi'],
        ['Liên hệ']
    ]
];
//$database->insert($menus, 'menus')->execute(); them du lieu
//$database->delete('menus')->execute(); xoa du lieu
$infomation = [
    'fields' => '`key`, value',
    'values' => [
        ['phone', '01656574210'],
        ['name', 'Hanh'],
        ['age', '19'],
        ['facebook', 'facebook.com/laihuuhanh1']
    ]
];
// 
$result = $database->select(['*'],'menus')->fetchAll();
var_dump($result);
//ínert banner
$banners = [
    'fields' => 'title,conten,image',
    'values' =>[
        ['title 1', 'conten 1', 'banner1.jpg'],
        ['title 2', 'conten 2', 'banner2.jpg'],
        ['title 3', 'conten 3', 'banner3.jpg'],
        ['title 4', 'conten 4', 'banner4.jpg'],

    ]
    ];
$database->insert($banners, 'banners')->execute();