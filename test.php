<?php
$result = json_encode(array(
     "a" => array(
        "b" => array(
          "c" => "d"
       ),
     )
));
print_r($result);
?>


{"a":{"b":{"c":"d"}}}