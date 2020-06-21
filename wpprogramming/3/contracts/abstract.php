<?php

abstract class onlineGateway
{
    protected $options;

    public function __construct()
    {
         $this->options = array(
             'mellat' => array(
                 'merchant' => '12323486',
                 'username'=> 'sd894sdf',
                 'password' => '9s8d74cc'
             ),
             'saman' => array(
                 'api_key'=>'seioeij23j23njkjnewjfewjnj2312'
             ),
             'parsian' => array(
                 'username' => '123123215',
                 'password' => '9s8d74c'
             )
         );
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();
}

class Mellat extends onlineGateway
{
    private $gatewayName;
    private $mellatOptions;
    public function __construct()
    {
        $this->gatewayName='mellat';
        parent::__construct();
        $this->mellatOptions = $this->options[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellatOptions);
    }
    public function verifyRequest()
    {

    }

}
//$mellat = new Mellat();
//$mellat->sendRequest();

$gateway = Factory::make('mellat');
$gateway->sendRequest();

class Factory
{
    public static function make($class)
    {

        $className = ucfirst($class);
        if (!class_exists($className))
        {
            return false;
        }
        return new $className;
    }
}