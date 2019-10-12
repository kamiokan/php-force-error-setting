<?php
// エラーを強制表示する
error_reporting(E_ALL);
ini_set('display_errors', "On");

// エラーを起こしてみる
trigger_error("E_USER_NOTICEのエラー！！");
trigger_error("E_USER_WARNINGのエラー！！",E_USER_WARNING);
trigger_error("E_USER_ERRORのエラー！！",E_USER_ERROR);
