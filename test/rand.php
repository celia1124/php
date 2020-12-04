<?php

for ($i = 0; $i < 10; $i++) {
    echo rand(0, 100) . "<br>";
}

echo "------<br>";

for ($i = 0; $i < 10; $i++) {
    printf("%'.07d <br>", rand(0, 100));
}


    