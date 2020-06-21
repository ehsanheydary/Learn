<?php
if
(
    isset($_GET['test'])
    &&
    isset($_GET['test1'])
    &&
    $_GET['test']!=''
    &&
    $_GET['test1']!=''
)
{
    $a = $_GET['test'];
    $b = $_GET['test1'];
    $c = explode($b, $a);

    $month = $c[1];

    if (is_numeric($month)) {
        if ($month > 6) {
            echo 'نیمه دوم';
        } else {
            echo 'نیمه اول';
        }
        switch ($month) {
            case 1:
                echo 'farvardin';
                break;
            case 2:
                echo 'ordibehesht';
                break;
            case 3:
                echo 'khordad';
                break;
            case 4:
                echo 'tir';
                break;
            case 5:
                echo 'mordad';
                break;
            case 6:
                echo 'shahrivar';
                break;
            case 7:
                echo 'mehr';
                break;
            case 8:
                echo 'aban';
                break;
            case 9:
                echo 'azar';
                break;
            case 10:
                echo 'day';
                break;
            case 11:
                echo 'bahman';
                break;
            case 12:
                echo 'esfand';
                break;
        }
    }else{
        switch ($month){
            case 'farvardin':
                $tester = '1';
                break;
            case 'ordibehesht':
                $tester = '2';
                break;
            case 'khordad':
                $tester = '3';
                break;
            case 'tir':
                $tester='4';
                break;
            case 'mordad':
                $tester='5';
                break;
            case 'shahrivar':
                $tester='6';
                break;
            case 'mehr':
                $tester='7';
                break;
            case 'abam':
                $tester='8';
                break;
            case 'azar':
                $tester='9';
                break;
            case 'day':
                $tester='10';
                break;
            case 'bahman':
                $tester='11';
                break;
            case 'esfand':
                $tester='12';
                break;
        }
        if($tester>6){
            echo 'نیمه دوم';
        }else{
            echo 'نیمه اول';
        }
        echo $tester;
    }
}
?>