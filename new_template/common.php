<?php
    # error_reporting(E_ALL);
    # error_reporting(E_ALL & ~E_NOTICE &~E_WARNING);
    # ini_set("display_errors", 1);

    # 기본 세팅
    date_default_timezone_set('Asia/Seoul');
    
    include_once ("{$_SERVER['DOCUMENT_ROOT']}/common/define.php");
    
    # 세션시작
    @session_start();
    
    # 헤더 설정
    header("Content-Type:text/html; charset=UTF-8");
?>