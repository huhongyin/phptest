<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/9
 * Time: 16:27
 */

//异常处理
//function test($x){
//    if(!$x){
//        throw new Exception('异常');
//    }
//
//    return 1/$x;
//}
//
//try{
//    echo test(5) .'<br/>';
//}catch (Exception $exception){
//    echo '异常信息'.$exception->getMessage().'<br/>';
//}finally{
//    echo '最终输出'.'<br/>';
//}
//
//try{
//    echo test(0).'<br/>';
//}catch (Exception $exception){
//    echo '异常信息:'.$exception->getMessage().'<br/>';
//}finally{
//    echo '本次最终输出'.'<br/>';
//}
//
//
//function xrange($start, $limit, $step)
//{
//    for($i = $start; $i <= $limit; $i += $step){
//        yield $i;
//    }
//}
//
//foreach (xrange(1, 9, 2) as $number) {
//    echo "$number ";
//}

//$img = imagecreatetruecolor(300, 200);
//$red = imagecolorallocate($img, 255, 0, 0);
//
//imagerectangle($img, 0, 0, 300, 300, null);
//
//header("Content-type: image/png");
//imagepng($img);
//imagedestroy($img);
