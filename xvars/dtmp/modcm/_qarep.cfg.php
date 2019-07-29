<?php
$_qarep = array (
  'kid' => 'qarep',
  'pid' => 'coms',
  'title' => '问答回复',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'pmod' => 'faqs',
  'f' => 
  array (
    'title' => 
    array (
      'kid' => 'title',
      'title' => '标题',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => NULL,
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '内容',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '内容10字符以上',
      'vmax' => '255',
      'fmsize' => '360x5',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => NULL,
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'title' => '昵称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => NULL,
    ),
    'miuid' => 
    array (
      'kid' => 'miuid',
      'title' => '聊天号',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '聊天号:QQ,MSN等',
      'vmax' => '120',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => NULL,
    ),
  ),
);
?>