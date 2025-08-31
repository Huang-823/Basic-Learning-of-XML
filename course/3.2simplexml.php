<?php
// simplexml_load_file() 解析XML文档，返回PHP对象
$x = simplexml_load_file('3.1.xml');
var_dump($x);
echo $x->man[0]->name;