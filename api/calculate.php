<?php
/**
 * Created by PhpStorm.
 * User: fessnecro
 * Date: 05.06.18
 * Time: 14:35
 */
require_once (__DIR__. '/../class/Mmr.php');


$start = isset($_GET['start']) ? (int) $_GET['start'] : 0;
$end = isset($_GET['end']) ? (int) $_GET['end'] : 0;

$mmr = new Mmr($start, $end);
echo $mmr->calculate();