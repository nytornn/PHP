<?php
require_once "Block.php";
require_once "Chain.php";
require_once "IChain.php";

$ch = new Chain();
$ch->addBlock(new Block("Liberec"));
$ch->addBlock(new Block("Hrádek nad Nisou"));
$ch->addBlock(new Block("Praha"));

var_dump($ch);

/*object(Chain)#1 (1) {
    ["blocks":"Chain":private]=>
    array(3) {
      [0]=>
      object(Block)#2 (4) {
        ["id"]=>
        int(1)
        ["dttm"]=>
        string(18) "08-May-23 22:56:31"
        ["hash"]=>
        string(32) "79a8db391f23f791084765442e3e6163"
        ["data"]=>
        string(7) "Liberec"
      }
      [1]=>
      object(Block)#3 (4) {
        ["id"]=>
        int(2)
        ["dttm"]=>
        string(18) "08-May-23 22:56:31"
        ["hash"]=>
        string(32) "9384292b452360c216988d0707c920bc"
        ["data"]=>
        string(17) "Hrádek nad Nisou"
      }
      [2]=>
      object(Block)#4 (4) {
        ["id"]=>
        int(3)
        ["dttm"]=>
        string(18) "08-May-23 22:56:31"
        ["hash"]=>
        string(32) "5ef66fc876fb0c44a53408499ba5045e"
        ["data"]=>
        string(5) "Praha"
      }
    }
  }
*/
  