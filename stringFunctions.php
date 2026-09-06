<?php

$content = "BodyLove";

echo strlen("$content") . "<br>";
echo str_word_count("$content") . "<br>";
echo strpos($content, "Love") . "<br>";
echo str_replace("Body","PHP", $content);
echo substr($content,0,4) . "<br>";
echo strtoupper($content) . "<br>";
echo strtolower($content) . "<br>";
echo trim("Body") ."<br";

print_r(explode(" " , "Hello PHP")) . "<br>";
"<br>";
echo implode("-" , ["Hello", "PHP"]);


?>