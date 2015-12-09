<?php ini_set('display_errors', '1'); ?>
<?php

  $DB_SERVER = "localhost";
  $DB_USER   = "104dbb01";
  $DB_PASS   = "104dbb01";
  $DB_NAME   = "10401dbb";
//------------------------
//     連結資料庫
//------------------------

  $link = @mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
  if (!$link) {
        echo '連結錯誤代碼： ' . mysqli_connect_errno() . '<br>';
        echo '連結錯誤訊息： ' . mysqli_connect_error() . '<br>';
        exit;
  }
  $link->set_charset("utf8");

//------------------------
//        設定資料
//------------------------

?>