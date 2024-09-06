<?php

class Consolelogger {
    public function log($message){
        echo "$message\n";
    }
}

class Task {
    public function work(consolelogger $logger){
        for($i=0;$i<10;$i++){
            $logger->log($i);
        }
    }
}

interface logger {
    public function log($message);
}

//-----------------------------------

class Nothinglogger{
    public function log($message){

    }
}

class Filelogger {
    public function log($message){
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$logger = new Filelogger;
$task = new task();
$task->work($logger);