<?php
//选择排序
function selection_sort($arr){
    $len = count($arr);
    if($len <= 1) return $arr;

    for($i=0; $i<$len; $i++){
        $min = $arr[$i];
        $pos = $i;
        for($j=$i+1; $j<$len; $j++){
            if($min > $arr[$j]){
                $min = $arr[$j];
                $pos = $j;
            }
        }
        if($pos != $i){
            $arr[$pos] = $arr[$i];
            $arr[$i] = $min;
        }
    }
    return $arr;
    
}

//插入排序
function insertion_sort($arr){
    $len = count($arr);
    if($len <= 1) return $arr;

    for($i=1; $i<$len; $i++){
        $insertion = $arr[$i];
        $j = $i - 1;
        while($insertion < $arr[$j]){
            $arr[$j+1] = $arr[$j];
            $j--;
            if($j < 0)break;
        }
        if($j == $i-1) continue;
        $arr[$j+1] = $insertion;
    }
    return $arr;
}

//冒泡排序
function bubble_sort($arr){
    $len = count($arr);
    if($len <= 1) return $arr;

    for($i=0; $i<$len; $i++){
        for($j=$len-1; $j>$i;  $j--){
            if($arr[$j] < $arr[$j-1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $tmp;
            }
        }
    }
    return $arr;
}

//快速排序
function quick_sort($arr){
    $len = count($arr);
    if($len <= 1) return $arr;

    $base = current($arr);
    $left_arr = array();
    $right_arr = array();

    for($i=1; $i<$len; $i++){
        if($arr[$i] <= $base) $left_arr[] = $arr[$i];
        if($arr[$i] > $base) $right_arr[] = $arr[$i];
    }

    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, array($base), $right_arr);

}

//归并排序
$arr1=array(1,3,5,7,29);
$arr2=array(2,4,6,8,22,23);
merge_sort($arr1, $arr2, 5, 6, $t);
function merge_sort(&$arr1, &$arr2, $n, $m, &$t){
    $i=0;$j=0;
    while($i<$n && $j<$m){
        if($arr1[$i]==$arr2[$j]){
            $t[]=$arr1[$i++];
            $t[]=$arr2[$j++];
        }elseif($arr1[$i]>$arr2[$j]){
            $t[]=$arr2[$j++];
        }else{
            $t[]=$arr1[$i++];
        }
    }
    while($i<$n){
        $t[]=$arr1[$i++];
    }
    while($j<$m){
        $t[]=$arr2[$j++];
    }
}

//test
echo "原数组：";
$arr = array(-15,4,-10,3,50,2, 1, 6);
print_r($arr);
echo "<br />";

echo "选择排序：";
$arr1_sorted = selection_sort($arr);
print_r($arr1_sorted);
echo "<br />";

echo "插入排序：";
$arr2_sorted = insertion_sort($arr);
print_r($arr2_sorted);
echo "<br />";

echo "冒泡排序：";
$arr3_sorted = bubble_sort($arr);
print_r($arr3_sorted);
echo "<br />";

echo "快速排序：";
$arr4_sorted = quick_sort($arr);
print_r($arr4_sorted);
echo "<br />";

echo "归并排序：";
echo "<br />";
echo "数组1：";
print_r($arr1);
echo "<br />";
echo "数组2：";
print_r($arr2);
echo "<br />";
print_r($t);