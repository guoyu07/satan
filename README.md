MedzFramework
=============

Medz Framework Framework released

简单说明：

	./demo.php 这个文件是配置的一个简单的demo，为了更方便的了解请运行下哦！
	
	目录以及文档说明：
	-------------------------------------------------------------------------------------------
		./class/				公用类文件夹
			- file/				文件处理类文件夹
				-- fileDetect.class.php	文件处理类文件
			- common.class.php		公用模板统计处理类文件
			- conf.class.php		控制层继承类文件
			- include.php			项目框架引入文件
			- tpl.class.php			视图/模板处理类文件
		./conf/					公用配置文件
			- test/				项目创建demo源码文件夹
				-- run.htm.php		项目创建demo模板源码
				-- run.php		项目创建demo控制层源码
				-- xml.php		项目创建demo配置xml源码
			- global.php			常量配置文件
			- jc.php			检查/创建项目文件
			- mvca.php			变量m/v/a获取配置文件
		./control/				项目文件夹（插件的项目会在这里自动生成）
		./data/					数据储存/缓存文件夹
			- cache/			检测文件储存/缓存文件夹
				-- md5/			模板编译校对md5值存放目录
			- tpl/				模板编译存放目录
		./plug/					平台项目插件储存目录（该目录可删除，一般不使用）
			- GBK/				平台项目GBK编码插件储存目录
			- UTF/				平台项目UTF-8编码插件储存目录
		./res/					公用静态资源储存目录
			- css/				公用静态资源css（样式表）文件储存目录
			- images/			公用静态资源images（图像）文件储存目录
			- js/				公用静态资源js（Java Script）脚本文件储存目录
		./demo.php				test 的演示demo文件！做项目！
	----------------------------------------------------------------------------------------------
	
	简单的项目创建说明：
		
		创建一个项目很简单：我用demo项目为例
			1.首先在根目录建立个“demo.php”文件，其内容如下：
				<?php
					define('POR', 'demo');//定义项目名称
					require './class/include.php';//公用类库
					load::export();//执行export方法
				说明：每个项目都一样，先定义一个ROP常量，该值为当前项目名称，然后用require或include映入class目录下的include.php这个文件然后执行静态方法load::export()一个项目创建完成。
			2.我们访问demo.php这个文件
			3.打开./control/这个目录，会发现里面多出了个“demo”文件夹，demo文件夹详细说明如下：
				./control/demo/					项目文件夹
					- c/					控制层文件夹
						-- run				M为默认的run控制层文件夹（如果手动指定m=其他则其他同此）
							--- run.class.php	c为默认的run控制层文件
					- res/					项目资源文件夹
					- tpl/					项目模板文件夹
						-- run.htm			项目默认run模板
					- SRC/					项目服务类储存目录
					- install.xml				项目配置xml文件
			4.好了，现在可以自己慢慢的研究项目开发了！
	
	模板的说明：（这里统一用$test）
		1.变量的输出：		{$test/}
		3.常量的输出：		{PATH/}		更多的常量请看“./conf/global.php”
		3.原始php嵌入：		<?php ?>
		4.asp格式php嵌入:	 <%%>
		5.注释格式php嵌入:	<!--##-->
		6.简短注释格式php嵌入:	<-##->
		7.模板片段的嵌入/组合	<tpl src="CCT.cs/1"/> 表示当前项目下cs/目录下的1.htm文件 “CCT”是常量
------------------------------------------------------------------------------------------------------------------
