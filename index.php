<?php
require("config.php");

$kxjConfig['view']['config']['template_dir'] = APP_PATH.'/template/'.$kxjConfig['ext']['view_themes'];    // 网站前台模版路径
require(KXJ_PATH."/sys.php");
spRun();