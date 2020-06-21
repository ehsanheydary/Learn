<?php class dostan
{
    private $x,$y;
    public function __construct($z,$w)
    {   $this->x = $z;
        $this->y = $w;
    }
    public function test(){
        echo $this->x*$this->y;
        echo '<br>';
        $this->test1();
    }
    private function test1(){
        echo $this->x/$this->y;
    }
}