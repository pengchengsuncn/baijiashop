<?php
session_start();//开启（session）
session_unset();//释放当前在内存中已经创建的所有$_SESSION变量，但不删除session文件以及不释放对应的sessionid
session_destroy();//删除当前用户对应的session文件以及释放sessionid，内存中的$_SESSION变量内容依然保留因此，释放用户的session所有资源
?>
