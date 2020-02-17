<?php

$fileName = "logo-a.png";

$base64 = base64_encode(file_get_contents($fileName));

echo "data:image/png;base64,".$base64;