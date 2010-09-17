<?php
header("Content-Type: text/event-stream\n\n");

echo 'data: ' . json_encode(
                  array(
                    0 => array(
                      'time' => time(),
                      'message' => 'Some kind of foo'
                    ),
                    1 => array(
                      'time' => time(),
                      'message' => 'Some kind of quux'
                    )
                  )
                ) . "\n";

?>