<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$parentid = $menu_db->insert(array('name'=>'legal_advice', 'parentid'=>'821', 'm'=>'custom', 'c'=>'legalAdvice', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);

$language = array('legal_advice'=>'法律咨询');

$parentid = $menu_db->insert(array('name'=>'custom_news', 'parentid'=>'821', 'm'=>'custom', 'c'=>'admin_news', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);

$language = array('custom_news'=>'最新消息');
?>
