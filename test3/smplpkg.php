<?php

class test3_smplpkg extends smplpkg {
  public $comment = "this is test3 class library";
  public $depends = array("test1");
  public $repo = "git@github.com:hsk/smplpkg_test2.git";
}
