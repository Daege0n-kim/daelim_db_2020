<?php
// 객체를 생성 
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(개체를 만드는 과정중,..)
// 인자값을 전달...
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db0) {
    echo "DB 접속 성공"."<br>";

    // 쿼리 스키마.테이블
    $tablename = "instargram";

    /*
    $query = "SELECT * FROM phpdaemin5." . $tablename . ";"; // SQL 쿼리문
    
    //쿼리 정보를 전송해서,
    // 결과값.
    $result = mysqli_query($db0, $query); // DB서버로 전송
    if ($result) {
        $rows = getRowData($result); // 데이터 읽어오기
        viewTable($rows); // 데이블로 출력하기
    } else {
        echo "데이터 읽기 실패";
    }
    */

    $title = $_GET['title'];
    $query = "INSERT INTO phpdaelim5.".$tablename." (`title`) VALUES ('".$title."');";
    echo $query;
    //exit;
    $result = mysqli_query($db0, $query); // DB서버로 전송

    // 페이지를 이동합니다.
    $url = "insta.php";
    //header("HTTP/1.1 301 Moved Permanently"); // post redirect get pattern
    header("location:" . $url);

} else {
    echo "접속 실패";
} 