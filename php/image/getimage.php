<?php
/**
 * File Name:getimage.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
$filename = '20160314_zh_CN_min';

class LogUrl{
	const HTTP = 'https:';
	/*
	 * $array params [url=>pkgname]
	 */
	protected function getImage($array){
		$mh = curl_multi_init(); 
		foreach ($array as $i => $data) { 
			$url = current($data);
			$url = self::HTTP.$url;
			$conn[$i] = curl_init($url); 
			curl_setopt($conn[$i], CURLOPT_REFERER, 'http://www.lao8.org');//伪装一个来路
			curl_setopt($conn[$i], CURLOPT_USERAGENT, 'Baiduspider+(+http://www.baidu.com/search/spider.htm)'); //伪装成百度蜘蛛 
			curl_setopt($conn[$i], CURLOPT_TIMEOUT,30);   //只需要设置一个秒的数量就可以  
			curl_setopt($conn[$i], CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)"); 
			curl_setopt($conn[$i], CURLOPT_HEADER ,0); 
			curl_setopt($conn[$i], CURLOPT_CONNECTTIMEOUT,60); 
			curl_setopt($conn[$i],CURLOPT_FOLLOWLOCATION,1);
			curl_setopt($conn[$i], CURLOPT_SSL_VERIFYPEER, false);//这个是重点
			curl_setopt($conn[$i],CURLOPT_RETURNTRANSFER,true); // 不将爬取代码写到浏览器，而是转化为字符串 
			curl_multi_add_handle ($mh,$conn[$i]); 
		} // 初始化 
		do { 
			curl_multi_exec($mh,$active); 
		} while ($active); // 执行 
		foreach ($array as $i => $data) { 
			$filename = key($data);
			$imageCode = curl_multi_getcontent($conn[$i]); // 获得爬取的代码字符串 
			file_put_contents("images/{$filename}.png",$imageCode);
			curl_multi_remove_handle($mh,$conn[$i]); 
			curl_close($conn[$i]); 
		} // 结束清理 
		curl_multi_close($mh);
	}

	protected function getLogUrl($str,$line){
		if (!empty($str)) {
			$data = json_decode($str,true);
			$logUrl = $data['LogoUrl'];
			$pkgname = $data['PkgName'];
			$ret[$pkgname] = $logUrl;
			return 	$ret;
		} else {
			file_put_contents('error_log',"失败行数{$line}\n",FILE_APPEND);
		}
	}

	protected function getFileLines($filename){ 
		$content = array(); 
		#$count = exec("cat {$filename}|wc -l");
		$count = 1000;
		$indexFile = 'start_index';
		$startIndex = exec("cat {$indexFile}");
		$fp = new SplFileObject($filename, 'rb'); 
		$startIndex = empty($startIndex)?0:$startIndex;
		$fp->seek($startIndex); // 转到第N行, seek方法参数从0开始计数 
		$index = 0;
		for ($i = 0; $i <= $count; ++$i) { 
			$index++;
			$string = $fp->current(); // current()获取当前行内容 
			$contents[] = $this->getLogUrl($string,$i);
			$fp->next(); // 下一行 
			file_put_contents($indexFile,$i);
			if ($index >= 5) {
				//50个并发 延迟100ms
				//usleep(1000*100);
				$index = 0;
				$this->getImage($contents);
				$contents = null;			
				exit;
			}
		} 
	} 

	public function work($filename){
		$this->getFileLines($filename);
	}
}

$log = new LogUrl();
$log->work($filename);
