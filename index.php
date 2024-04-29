<?php 

require_once './vendor/autoload.php';

$obj = new jack\currency\CurrencyService(); //  \jack\currency\CurrencyService() 都可以
$result = $obj->display(10);
echo $result . "<br>";

echo $obj->addNewFunction() . "<br>";

echo "本项目中composer.json中的jack/yiyi，需要是自己composer包的name（composer.json中的name）不是github的里的名字". "<br>";
echo "而且自己composer包中的依赖，也会在此项目中加入进来". "<br>";
echo "如果composer.json中删了某个包 composer update运行后也可以在vendor中删了" . "<br>";
echo "使用 git tag v1.0.0 和 git push --tags，可以给自己的包打标签，在此项目中引入" . "<br>";