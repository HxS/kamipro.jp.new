<?php 
/**
 * index.php
*/
 
// Smartyパス設定
define('SMARTY_PATH', './');
define('SMARTY_TEMPLATES_DIR', SMARTY_PATH . 'contents/');
define('SMARTY_COMPIlE_DIR', SMARTY_PATH . 'template_c/');
define('SMARTY_CACHE_DIR', SMARTY_PATH . 'cache/');
 
// インスタンス生成
require_once(SMARTY_PATH . 'libs/Smarty.class.php');
$objSmarty = new Smarty();
 
// ディレクトリの指定
$objSmarty->template_dir = SMARTY_TEMPLATES_DIR;
$objSmarty->compile_dir = SMARTY_COMPIlE_DIR;
$objSmarty->cache_dir = SMARTY_CACHE_DIR;
 
// テンプレート出力
$objSmarty->display('index.tpl');
?>