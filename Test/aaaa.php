<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 4/18/2018
 * Time: 7:43 PM
 */
$arr = array('one','two','three','four','five');
$html = "<div style='background:red;color:black;'>";
foreach($arr as $value){
    $html .= $value.'<br />';
}
$html .= "</div>";


?>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>




<div id="divToPrint" style="display:none;">
    <div style="width:200px;height:300px;background-color:teal;">
        <?php echo $html; ?>
    </div>
</div>
<div>
    <input type="button" value="print" onclick="PrintDiv();" />
</div>
