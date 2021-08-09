<?php
 class StopWatch
 {
     private $startTime;
     private $endTime;
     public function __construct() {
         $this->startTime = microtime();
     }
     public function getStartTime() {
         return $this->startTime;
     }
     public function getEndTime() {
         return $this->endTime;
     }
     public function start() {
       $this->startTime = microtime();
     }
     public function end() {
         $this->endTime = microtime();
     }
     public function  getElapsedTime() {
         $second = $this->endTime - $this->startTime;
         return $second;
     }
 };
 $stopDemo = new StopWatch();
  echo "Star time: " .($stopDemo->getStartTime());
  echo "<br>";
  sleep(9);
  $stopDemo->end();
  echo "End time: " .($stopDemo->getEndTime());
  echo "<br>";
  echo "Elapsed Time: " .($stopDemo->getElapsedTime());
