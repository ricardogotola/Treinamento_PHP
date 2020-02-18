<?php

$fileName = "logo-a.png";

$base64 = base64_encode(file_get_contents($fileName));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);

$mimeType = $fileInfo->file($fileName);

echo $mimeType;
echo "<br>";
echo "data:" . $mimeType . ";base64," . $base64;