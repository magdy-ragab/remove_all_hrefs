<?php
$input_file= "index.html";
$output_file= "1.html";
$pattern = '~<a ([^>]*)href="((?!#|javascript:|js:)[^"]+)"([^>]*)>~';

$replace= '<a \\1href="#"\\2>';
$text= file_get_contents($input_file);

preg_match_all($pattern, $text, $match);

print_r($match);

$new_content=preg_replace($pattern, $replace, $text);
file_put_contents($output_file, $new_content);
?>