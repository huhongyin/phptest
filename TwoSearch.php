<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 13:49
 */

/**
 * 二分查找
 */
function find2InArray($targetArr, $target)
{
    echo "<pre/>";
    if(empty($targetArr) && empty($target))
        die('数组或者查找目标不能为空');

    if(count($targetArr) == 1){
        //长度为一,判断元素
        if($targetArr[0] == $target){
            die('长度为一，找到元素:'.$target);
        }

        die('未查找到元素:'.$target);
    }

    //升序排序数组元素
    sort($targetArr);

    //查找数组的中间元素 ceil向上取整
    $index = ceil(count($targetArr) / 2);

    if(empty($targetArr[$index]))
        die('不存在的索引');

    $findTarget = $targetArr[$index];

    if($findTarget == $target){
        die('找到元素：'.$target.',索引为:'.$index);
    }elseif($findTarget < $target){
        //查找到的元素小于要查找的元素,生成新数组
        $targetArr = array_slice($targetArr, $index + 1);

    }elseif($findTarget > $target){
        //查找到的元素大于要查找的元素,生成新数组
        $targetArr = array_slice($targetArr, 0, $index);
    }

    $targetArr = array_values($targetArr);

    find2InArray($targetArr, $target);
}

/**
 * TwoSearch Test Case
 *
 */

$arr = [0, 3, 4, 7, 8, 2, 5, 1, 12, 19];
$value = 12;

find2InArray($arr, $value);