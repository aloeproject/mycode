<?php
/**
 * File Name:appinsight.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

class Appinsight
{
	const LOGIN_URL = 'http://appinsight.cmcm.com/user/login';
	
	const LOGIN_CODE_URL = 'http://appinsight.cmcm.com/user/captcha';

	private $cookieFile = '/tmp/cookie';

	private function createCookie(){
		$curl = curl_init();//初始化curl模块 
		curl_setopt($curl, CURLOPT_URL,self::LOGIN_URL);//登录提交的地址 
		curl_setopt($curl, CURLOPT_HEADER, 1);//是否显示头信息 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//是否自动显示返回的信息 
		curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookieFile); //设置Cookie信息保存在指定的文件中 
		$rs = curl_exec($curl);//执行cURL 
		curl_close($curl);//关闭cURL资源，并且释放系统资源 
	}

	private function createVCode(){
		$curl = curl_init();//初始化curl模块 
		curl_setopt($curl, CURLOPT_URL,self::LOGIN_CODE_URL);//登录提交的地址 
		curl_setopt($curl, CURLOPT_HEADER, 0);//是否显示头信息 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//是否自动显示返回的信息 
		curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookieFile); //设置Cookie信息保存在指定的文件中 
		$rs = curl_exec($curl);//执行cURL 
		curl_close($curl);//关闭cURL资源，并且释放系统资源 
		file_put_contents('/tmp/verify.jpg',$rs);
	}

	public function post($code){
		$post = [
			'LoginForm[email]'=>'yudan@cmcm.com',		
			'LoginForm[password]'=>'yudan',		
			'LoginForm[verifyCode]'=>$code,
			'LoginForm[rememberMe]'=>1,
		];
		$curl = curl_init();//初始化curl模块 
		curl_setopt($curl, CURLOPT_URL, self::LOGIN_URL);//登录提交的地址 
		curl_setopt($curl, CURLOPT_HEADER, 1);//是否显示头信息 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//是否自动显示返回的信息 
		curl_setopt($curl, CURLOPT_COOKIEFILE,$this->cookieFile);
	#	curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookieFile); //设置Cookie信息保存在指定的文件中 
		curl_setopt($curl, CURLOPT_POST, 1);//post方式提交 
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//要提交的信息 
		$res = curl_exec($curl);//执行cURL 
		
		$httpCode = curl_getinfo($curl,CURLINFO_HTTP_CODE); 
		curl_close($curl);//关闭cURL资源，并且释放系统资源 
		var_dump($httpCode);
		list($header, $body) = explode("\r\n\r\n", $res);  
		// 解析COOKIE  
		var_dump($header);
		preg_match("/set\-cookie:([^\r\n]*)/i", $header, $matches);  
		
	}

	public function work(){
		$this->createCookie();
		$this->createVCode();
	}

	public function getData(){
		$url = 'http://appinsight.cmcm.com/product/au_ratio_ajax';
		$curl = curl_init();//初始化curl模块 
		curl_setopt($curl, CURLOPT_URL,$url);
		#curl_setopt($curl, CURLOPT_HEADER, 1);//是否显示头信息 
		curl_setopt($curl, CURLOPT_HEADER, 0);//是否显示头信息 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//是否自动显示返回的信息 
		$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,"; 
		$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5"; 
		$header[] = "Cache-Control: max-age=0"; 
		$header[] = "Connection: keep-alive"; 
		$header[] = "Keep-Alive: 300"; 
		$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7"; 
		$header[] = "Accept-Language: en-us,en;q=0.5"; 
		$header[] = "Pragma: "; // browsers keep this blank. 
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
		curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookieFile); //设置Cookie信息保存在指定的文件中 
		$rs = curl_exec($curl);//执行cURL 
		$httpCode = curl_getinfo($curl); 
		curl_close($curl);//关闭cURL资源，并且释放系统资源 
		print_r(json_decode($rs));
	}

}
$a = new Appinsight();
$params = $argv;
if (isset($params[1]) && $params[1]=='getData'){
	$a->getData();
	exit;
}
echo "work";
if (isset($params[1]) && !empty($params[1])){
	$a->post($params[1]);
} else {
	$a->work();
}


