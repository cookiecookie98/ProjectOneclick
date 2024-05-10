<?php
require_once('database.php');
$role = $_GET['role'] ?? 'customer';

if($role === 'admin'){
    require_once('./views/admin/index.php');
}else{
    require_once('./views/customers/index.php');
}