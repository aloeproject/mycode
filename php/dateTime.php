<?php
 /* File Name: dateTime.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2014年12月30日 星期二 07时59分48秒
 */
$from = date('Y-m-d H:i:s');
$to = '2014-01-01 12:00:00';//这个必须符合标准的格式 2014-01-01 12:0:0 也不行

$fromDate = DateTime::createFromFormat('Y-m-d H:i:s',$from);
$toDate = DateTime::createFromFormat('Y-m-d H:i:s',$to);
$dateIntval = $fromDate->diff($toDate);

echo $dateIntval->format("相差 %Y年%m月%d天 %h小时%i分%s秒\n");
