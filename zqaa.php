<!DOCTYPE html>
<html>
<head>
	<title>滚动消息条</title>
</head>
<body>

<div style="border:solid 1px #333; padding:5px;width:400px;height:30px;overflow:hidden;">
    <?php 
        //将消息存储到一个数组中，每一项代表一条消息
        $messages = array(
            "这里是第一条滚动消息",
            "这里是第二条滚动消息",
            "这里是第三条滚动消息"
        );
        //随机选择一个消息进行滚动显示
        $messageIndex = rand(0, count($messages)-1);
        $message = $messages[$messageIndex];
    ?>
    <marquee scrolldelay="150"><?php echo $message; ?></marquee>
</div>

</body>
</html>
