<?php 
//-----------------------请修改以下配置------------------------------------

//防盗链域名，多个用|隔开，（不设置盗链请留空，请填写授权是顶级域名的二级域名）
define('REFERER_URL', 'api.idato.xyz'); //如：define('REFERER_URL', 'www.1717yun.com|123.1717yun.com|1717yun.com');

//此处设置防盗信息及错误提示
define('ERROR', '<html><meta name="robots" content="noarchive"><head><title>大头无广告解析 - 全网视频无广告解析</title></head><style>h1{color:#C7636C; text-align:center; font-family: Microsoft Jhenghei;}p{color:#f90; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style><body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>本站接口不对外开放</h1><p>如需使用，请联系本站管理员2871359433@qq.com进行授权</p></table></body></html>');
//此处进行用户相关配置
$user = array(

		'uid' => '17173320', //填写你的UID信息,填写到单引号''里,用户授权UID，在 http://api.1717yun.com/ 平台可以查看到

		'token' => '5ecf0e4a9c3877998d135cd8cd868fd8', //填写你的TOKEN密钥信息,填写到单引号''里,用户授权TOKEN密钥，在 http://api.1717yun.com/ 平台可以查看到

		'path' => '/1717yun', //解析插件目录 如需跟换目录名请修改1717yun文件夹名字即可，修改格式 '/1717yun' (修改二级目录一定看好格式).如果放在网站根目录请留空即可！ 

		'hdd' => '3', //视频默认清晰度，1标清，2高清，3超清，4原画，如果没有高清会自动下降一级（注:目前请保持默认，无需修改）
  
  		'p2p' => '0', //是否显示P2P加速信息 默认开启 1:开启,0:关闭 （关闭显示不影响加速效果）

		'autoplay' => '1', //电脑端autoplay是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

		'h5' => '1', //手机端h5是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

		'online' => '1', //当前无法解析的地址是否启动备用解析接口  默认开启,1:开启,0:关闭  开启时要在下面填入备用解析接口
  
		'ather' => 'https://www.1717yun.com/beiyongjiexi/?url=', //备用接口:默认已为大家设置好备用接口,如无特殊要求,无需修改!//填写实例：'ather' => 'https://www.1717yun.com/beiyong/?url=',

		'dplayer' => '大头视频解析,https://api.idato.xyz', //用户设置dplayer播放器右键,不设置请留空。填写实例:'dplayer' => '1717yun视频解析,https://www.1717yun.com'
		
		'title' => '大头视频解析-https://api.idato.xyz', //设置解析页面title名称   例如：'title' => '1717yun视频解析',

		'skin' => '3', //ckplayer播放器样式共4种,修改参数后更换播放器样式. 参数说明：1,2,3,4

		'hand' => '大头视频解析,https://api.idato.xyz', //ckplayer播放器右键,例如:'hand'=>'1717yun视频解析,https://www.1717yun.com'

) 			
//-----------------------修改区域结束---------------------------------------