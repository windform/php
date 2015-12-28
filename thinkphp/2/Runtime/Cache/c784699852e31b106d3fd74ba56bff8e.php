<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<br>

<br>

<br>

<br/>
<!--
<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,1,2,true);if( count($__LIST__)==0 ) : echo "对不起，没有数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>----------<br/><?php endforeach; endif; else: echo "对不起，没有数据" ;endif; ?>
-->
<!--<?php if(is_array($person)): foreach($person as $key=>$data): echo ($data["name"]); ?>----------<?php echo ($data["age"]); ?><br/><?php endforeach; endif; ?>-->

<!--
<?php $__FOR_START_10226__=1;$__FOR_END_10226__=50;for($j=$__FOR_START_10226__;$j < $__FOR_END_10226__;$j+=1){ ?><br/><?php } ?>
-->
<!--
<?php if($num > 50): ?>num大于50
	<?php elseif($num < 50): ?>num小于50
	<?php else: ?> num等于50<?php endif; ?>
-->
<?php switch($name): case "laoshi": ?>小明，滚出去<?php break;?>
    <?php case "xiaohong": ?>小明，你给我滚出去<?php break;?>
    <?php default: ?>小明自己滚出去<?php endswitch;?>
	
</body>
</html>