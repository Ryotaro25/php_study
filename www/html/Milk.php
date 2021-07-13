<?php
require_once("DateTool.php");
class Milk {
    //use DateTool trait
    use DateTool;
    public $theDate;
    public $limitTime;

    function __construct()
    {
        $now = new DateTime();
        $this->theDate = $this->ymdString(($now));
        $this->limitDate = $this->addYmdString($now, 10);
    }
}