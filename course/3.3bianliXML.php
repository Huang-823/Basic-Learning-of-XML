<?php
// simplexml_load_file() 解析XML文档，返回PHP对象
$x = simplexml_load_file('3.1.xml');

// foreach($x->man as $v){
//     echo $v->name;
// }

// for 循环获取XML
$c = count($x->man);
for($i=0;$i<$c;$i++){
    echo $x->man[$i]->name;
}