<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2017/9/8
 * Time: 20:19
 */

require_once 'user_info.php';

$host = 'localhost';
$dbname = 'shanxue0.1';
$user = 'root';
$password = '';

$ID = $_GET["ID"];

//$ID = 1;
try{
    '<pre>';
    $pdo = new PDO("mysql:dbname=$dbname;host=$host",$user,$password);
    $pdo->query("SET NAMES 'UTF-8'");
    $pdo->query("SET CHARACTER SET UTF8");
    $pdo->query("SET CHARACTER_SET_RESULTS=UTF8'");

    $smt = $pdo->prepare("SELECT * FROM tbl_user_info WHERE ID=?");
    $smt->bindParam(1,$ID);

    if($smt->execute()){
        $user_info = $smt->fetchObject("user_info");

        echo json_encode(array("user_info"=>$user_info));
    }else{
        print_r( $smt->errorInfo() );
    }

}catch (PDOException $ex) {
    echo $ex->getMessage();
}