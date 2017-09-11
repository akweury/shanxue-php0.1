<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2017/9/8
 * Time: 20:30
 */

require_once 'userlearnrecord.php';
require_once 'rhesis.php';
$host = 'localhost';
$dbname = 'shanxue0.1';
$user = 'root';
$password = '';
$record_count=0;
$entry_count=0;

$ID = $_GET["ID"];
$book_ID = $_GET["book_ID"];
$study_num = $_GET["study_num"];

//$ID = 1;
//$book_ID = 1;
//$study_num = 15;
try{
    '<pre>';
    $pdo = new PDO("mysql:dbname=$dbname;host=$host",$user,$password);
    $pdo->query("SET NAMES 'UTF-8'");
    $pdo->query("SET CHARACTER SET UTF8");
    $pdo->query("SET CHARACTER_SET_RESULTS=UTF8'");

    $smt = $pdo->prepare("SELECT * FROM tbl_user_learn_record WHERE ID=? AND book_ID=? AND study_nextDateTime < now()");
    $smt->bindParam(1,$ID);
    $smt->bindParam(2,$book_ID);

    if($smt->execute()){
        while(($row = $smt->fetchObject("userlearnrecord")) &&  $record_count<$study_num){
            //获得所有词条的study_item_ID
            $rhesis_ID[] =  $row->study_item_ID;
            //获取用户ID所有学习记录rows
            $learn_record[] = $row;
            ++$record_count;
        }

    }else{
        print_r( $smt->errorInfo() );
    }
    echo json_encode(array("learn_record"=>$learn_record));

    $smt = $pdo->prepare("SELECT * FROM tbl_entry_rhesis WHERE rhesis_ID=:rhesis_ID");
    for($i=0;$i<count($rhesis_ID);++$i){
        $smt->bindParam(":rhesis_ID",$rhesis_ID[$i]);
        if($smt->execute()){
            while (($row =  $smt->fetchObject("rhesis")) && $entry_count < $study_num){
                //获得所学词条rhesis
                $rhesis[] = $row;
                ++$entry_count;
            }
        }
    }
    sort($rhesis_ID);
    $max = end($rhesis_ID);
    while($entry_count < $study_num){
        //学习记录数目小于所需学习词条数目->继续添加词条到rhesis[]
        $smt->bindParam(":rhesis_ID",$max);
        if($smt->execute()){
            $row = $smt->fetchObject("rhesis");
            $rhesis[]=$row;
            ++$entry_count;
            ++$max;
        }else{
            print_r( $smt->errorInfo() );
        }
    }
    echo json_encode(array("rhesis"=>$rhesis)).'<br>';


}catch (PDOException $ex) {
    echo $ex->getMessage();
}