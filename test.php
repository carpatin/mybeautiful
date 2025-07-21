<?php

print 'LOTO 6/49'.PHP_EOL;

for ($i = 0; $i < 6; $i++) {
    echo random_int(1, 49).' ';
}