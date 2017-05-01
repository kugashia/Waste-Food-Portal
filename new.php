<?php
/*
 * Author: doug@neverfear.org
 */
require("Dijkstra.php");
function runTest() {
	$g = new Graph();
	//rome(a)_paris(b)_landon(c)_amst(d)_LA(e)_NYC(f)_tk(g)
	$g->addedge("a", "b", 2);
	$g->addedge("a", "d", 3);
	$g->addedge("a", "c", 3);
	$g->addedge("b", "c", 1);
	$g->addedge("b", "d", 1);
	$g->addedge("c", "f", 10);
	$g->addedge("d", "e", 8);
	$g->addedge("e", "g", 2);
	$g->addedge("f", "g", 3);
	list($distances, $prev) = $g->paths_from("a");
	
	$path = $g->paths_to($prev, "g");
	
	print_r($path);
	
}
runTest();
