<?php
$levels = array(
 1 => array(
     'name' => 'Murphy' , 'age' => '21'
 ),
 2 => array(
     'name' => 'Frank' , 'age' => '26'
 ),
 3 => array(
     'name' => 'Jason' , 'age' => '20'
 )

);
function _DATA {
    
}
echo $levels[2]['age'];
echo '<pre>',
print_r($levels, true),
'</pre>'
?>