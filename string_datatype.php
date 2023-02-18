<?php

// Strings

$firstName = 'Agent';
$fullName = "{$firstName} Smith";

echo $fullName . '<br />';

// String Indexing
echo $firstName[1] . '<br />';
echo $fullName[-4] . '<br />';

// Heredoc
$text = <<<TEXT
Sinners in the hand of angry nature
Sinners in the HAND of angry nature
TEXT;

echo nl2br($text);
