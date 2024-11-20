<?php
echo "Имя файла: " . __FILE__ . "\n";
echo "Номер строки: " . __LINE__ . "\n\n";

$multilineText = <<<HEREDOC
Это пример текста,
который занимает
несколько строк.
HEREDOC;

echo $multilineText . "\n\n";

$a = 'Рыба';
$b = 'человек';
echo "$a рыбою сыта, а $b человеком.";
?>