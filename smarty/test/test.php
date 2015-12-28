<?php
header("content-type:text/html; charset=utf-8");
require('../smarty/Smarty.class.php');
$smarty = new Smarty();
//smarty"五配置和两方法"
$smarty->left_delimiter = "{";  //左定界符
$smarty->right_delimiter = "}";   //右定界符
$smarty->template_dir = "tpl";   //定义html模板存放的位置
$smarty->compile_dir = "template_c"; //模板编译生成的文件
$smarty->cache_dir = "cache";  //缓存

//开启缓存的两个配置，应为不常用smarty的缓存机制，只作为了解
$smarty->caching = true;  //开启缓存
$smarty->cache_lifetime = 120;   //缓存时间


//对smarty模板变量的赋值
//$smarty->assign("articletitle","文章标题");
//$smarty->display("tpl/test.tpl");

//$arr=array('articlecontent'=>array('title'=>'smarty的学习','author'=>'廖东'));
//$smarty->assign('arr',$arr);
//$smarty->display("tpl/test.tpl");


//变量调节器
/*$str="i am a designer";
$smarty->assign('str',$str);
$smarty->display("tpl/test.tpl");
{$str|capitalize}  
*/

/*$cat="hello";
$smarty->assign('cat',$cat);
$smarty->display('tpl/test.tpl');
{$cat|cat:' world'}*/


/*$date=time();
$smarty->assign('date',$date);
$smarty->display('tpl/test.tpl');
{$date|date_format:"%B %e,%Y  %H:%M:%S"}*/

/*$url='http://www.onload11.com/mid/index.html';
$smarty->assign('url',$url);
$smarty->display('tpl/test.tpl');
{$url|escape:'url'}*/


/*$br='liao dong 
liaodong
liaodong';
$smarty->assign('br',$br);
$smarty->display('tpl/test.tpl');
{$br|nl2br}
*/


//条件判断
/*$core=61;
$smarty->assign('core',$core);
$smarty->display('tpl/test.tpl');
{if $core gt 90}
优秀
{elseif $core gt 60}
及格
{else}
不及格
{/if}*/

//循环 section、foreach
$articlelist=array(
	array(
	'title'=>'第一篇文章',
	'author'=>'小明',
	'content'=>'该写点什么呢？'
	),
	array(
	'title'=>'第二篇文章',
	'author'=>'小话',
	'content'=>'不知道写点什么'
	),
	array(
	'title'=>'第三篇文章',
	'author'=>'小话',
	'content'=>'今天的天气真好'
	)
);

/*$smarty->assign('articlelist',$articlelist);
$smarty->display('tpl/test.tpl');*/
/*{section name=articlelist loop=$articlelist show=1}
	{$articlelist[articlelist].title} 
    {$articlelist[articlelist].author} 
    {$articlelist[articlelist].content}
    <br/>
{/section}*/
/*{foreach $articlelist as $article}
	{$article.title}
    {$article.author}
    {$article.content}
    <br/>
{foreachelse}
当前没有文章
{/foreach}*/


//文件的引入
//{include file="tpl/header.tpl" sitename="慕课网"}


//类与对象的赋值与使用
/*class My_Object{
	function meth1($params){
		return $params[0].'已经'.$params[1];
		}
	}
$myobj= new My_Object();
$smarty->assign('myobj',$myobj);
$smarty->display('tpl/test.tpl');
{$myobj->meth1(array('小明','回来了'))}
<br/>
{$myobj->meth1(array('苹果','熟了'))}*/



//smarty函数
//使用PHP内置函数显示时间
//$time=time();
//$smarty->assign('time',$time);
//$smarty->display('tpl/test.tpl');
//{$time|date_formate}  //smaty变量调节器写法
//{"Y-m-d H:m:s"|date:$time}  //PHP内置函数时间写法


//使用PHP内置函数替换字符串
/*$smarty->assign('str','qwertyui');
echo "<br/>";
$smarty->display('tpl/test.tpl');
{'y'|str_replace:'Z':$str}
*/


//smarty自定义函数
/*function test($params){
	$p1=$params['p1'];
	$p2=$params['p2'];
	return '传入的第一个参数是'.$p1.',传入的第二个参数是'.$p2;
	};
$smarty->registerPlugin('function','f_test','test');
$smarty->display('tpl/test.tpl');
{f_test p1='abc' p2=12345}*/



//smarty插件的学习
//function插件的制作和使用
//$smarty->display('tpl/area.tpl');

//modifier插件的制作和使用
//$smarty->assign('time',time());
//$smarty->display('tpl/datetime.tpl');

//block插件的制作和使用
$str="hello，hanmeimei，I am Lilei，glad to see you。";
$smarty->assign('str',$str);
$smarty->display('tpl/content.tpl');




?>