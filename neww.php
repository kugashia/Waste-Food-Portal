<?php
/**
 *  Dijkstra's algorithm in PHP by zairwolf
 * 
 *  Demo: http://www.you4be.com/dijkstra_algorithm.php
 *
 *  Source: https://github.com/zairwolf/Algorithms/blob/master/dijkstra_algorithm.php
 *
 *  Author: Hai Zheng @ https://www.linkedin.com/in/zairwolf/
 *
 */

//set the distance array
//rome(1)_paris(2)_lan(3)_ams(4)_LA(5)_NYC(6)_tok(7)
$_distArr = array();
$_distArr[1][2] = 2;
$_distArr[1][3] = 3;
$_distArr[1][4] = 3;
$_distArr[2][3] = 1;
$_distArr[2][4] = 1;
$_distArr[3][6] = 10;
$_distArr[4][5] = 8;
$_distArr[5][7] = 2;
$_distArr[6][7] = 3;
//the start and the end
$a = 1;
$b = 7;

//initialize the array for storing
$S = array();//the nearest path with its parent and weight
$Q = array();//the left nodes without the nearest path
foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
$Q[$a] = 0;

//start calculating
while(!empty($Q)){
    $min = array_search(min($Q), $Q);//the most min weight
    if($min == $b) break;
    foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
        $Q[$key] = $Q[$min] + $val;
        $S[$key] = array($min, $Q[$key]);
    }
    unset($Q[$min]);
}

//list the path
$path = array();
$pos = $b;
while($pos != $a){
    $path[] = $pos;
    $pos = $S[$pos][0];
}
$path[] = $a;
$path = array_reverse($path);

//print result
echo "<img src='http://www.you4be.com/dijkstra_algorithm.png'>";
echo "<br />From $a to $b";
echo "<br />The length is ".$S[$b][1];
echo "<br />Path is ".implode('->', $path);