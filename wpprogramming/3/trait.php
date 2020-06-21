<?php


//زمانی که چند کلاس به یک رفتار نیاز دارند
trait logger
{
    public function log($data)
    {
        echo $data . 'Not logged yet';
    }
}

class sample
{
    use logger;
}

(new sample())->log('Hello World ');