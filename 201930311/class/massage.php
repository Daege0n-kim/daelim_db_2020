<?php
// 클래스 선언
// 클래스 = 함수 + 변수
class message
{
    function hello($name){
        echo $name;
    }

    function hi($name){
        echo $name;
    }
}

$obj = new message;

$obj->hello("대림대학교");