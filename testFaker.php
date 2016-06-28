<?php
	require_once 'Faker/src/autoload.php';
	$faker = Faker\Factory::create();

	echo $faker->name."<br/>"; //姓名
	echo $faker->address."<br/>"; //地址
	echo $faker->text."<br/>"; //文本

    echo $faker->randomDigit ."<br/>"; //数字
    echo $faker->randomDigitNotNUll ."<br/>";//非0数字 
    echo $faker->randomLetter."<br/>";//字母

    //Faker\Provider\Base
    echo $faker->randomNumber(2)."<br/>";//给定位数数字
    echo $faker->randomFloat(2,10,15)."<br/>";//小数；小数点位数，最小值，最大值
    echo $faker->numberBetween(15,50)."<br/>";//整数；最小值，最大值
    var_dump($faker->randomElements(array(1,2,3),1));//数组中随机几个元素；数组，元素个数
    echo $faker->randomElement(array(1,2,3))."<br/>";//数组中某个元素；数组
    echo $faker->shuffle('hello,world')."<br/>";//字符串随机排列；字符串
    var_dump($faker->shuffle(array(1,2,3)))."<br/>";//数组元素随机排列；数组
    echo $faker->numerify('hello,###')."<br/>";//#处随机生成数字
    echo $faker->lexify('hello,???')."<br/>";//?处随机生成字符
    echo $faker->bothify('hello,##??')."<br/>";//
    echo $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}')."<br/>";//正则表达式

    //Faker\Provider\Lorem
    echo $faker->word."<br/>";//一个单词
    var_dump($faker->words(3,false))."<br/>";//单词数组;元素个数，是否是字符串
    echo $faker->sentence();