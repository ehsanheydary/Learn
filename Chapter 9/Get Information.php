<?php
    echo "file path ".__FILE__;

    echo '<br/>';

    echo "line ".__LINE__;

    echo '<br/>';

    echo dirname(__file__);

    echo '<br/>';

    echo "dir path".__DIR__;

    echo '<br/>';

    function func1()
    {
        echo __function__;
        echo '<br/>';
    }
    func1();
    /*
     * __CLASS__ : Name of current class
     * __MEHTOD__ : THE CURRENT METHOD of CLASS
     * __NAMESPACE__ : THE CURRENT NAMESPACE
     * __TRAIT__ : THE CURRENT TRAIT
     */