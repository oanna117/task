<?php

// 接続に必要な情報を定数として定義
define('DSN', 'mysql:host=db;dbname=task_app;charset=utf8');
define('USER', 'task_admin');
define('PASSWORD', '1234');

// エラーメッセージを定数として定義
define('MSG_TITLE_REQUIRED', 'タスク名を入力してください');
define('MSG_TITLE_NO_CHANGE', 'タスク名が変更されていません');

// doneの状態を定数として定義
define('TASK_NOTYET', 0);
define('TASK_DONE', 1); 

// 定数を定義するときは基本大文字で
