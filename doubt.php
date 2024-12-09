<?php
$a = "/-/-/-abc/s/t/a/df--//-";
echo $a,"\n";
echo strlen($a),"\n";
$a = trim($a,'/-af');//remove space from boyh side(default) if you passed second argument then it will remove that character from string both side 
echo $a, "\n";
echo strlen($a);

?>