<?php    
require(dirname(__FILE__).'/_config.php');        

glbHtml::page("Create Suit Template - (sys_name)",1);
glbHtml::page('imin');
echo    basJscss::imp("/tools/exdiy/style.css");
glbHtml::page('body');

$part = req('part','tpl');
$dir = req('dir');
$front = req('front');
$mod = req('mod');
$org = req('org');
$obj = req('obj');
$dmsg = '';

if($dir && $front && $mod){
    $flag = 'done';
    $dmsg = devBuild::create($dir, $front, $mod);
    $smsg = $dmsg=='OK' ? lang('tools.mktpl_crtok') : lang('tools.mktpl_crtng').$dmsg;
    $fmsg = $dmsg=='OK' ? 'OK' : lang('tools.mktpl_error');
}elseif($org && $obj){
    $dmsg = devBuild::clang($org, $obj);
}

include(vopShow::inc('/tools/exdiy/build.htm',DIR_ROOT));

glbHtml::page('end');
