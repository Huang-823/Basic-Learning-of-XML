<?php
// simplexml_load_file() 解析XML文档，返回PHP对象
$x = simplexml_load_file('3.1.xml');
// 对象中的addChild()方法可以添加子节点
$man = $x->addChild('man');
// 对象中的addChildfang方法创建节点并给创建后的节点添加内容
$man->addChild('name','张三');
$man->addChild('age','18');

var_dump($x);
// 将添加后的对象重新解析成XML文档，写入文档
$x->asxml('3.1.xml');