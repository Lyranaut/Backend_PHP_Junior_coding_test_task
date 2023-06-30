<?php
$text = "Lorem Ipsum is simply one: dummy text of the printing and two: typesetting industry. Lorem Ipsum has been the industry's one: standard dummy text ever since the three: 1500s.";

$keysData = [];

$pattern = '/(?:one|two|three):\s*(.*?)(?=\s*(?:one|two|three):|$)/';

preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);

foreach ($matches as $match) {
    $keyData = $match[1];

    // Extract the key from the matched string
    preg_match('/^(one|two|three):/', $match[0], $keyMatch);
    $key = $keyMatch[1];

    $keysData[$key] = $keyData;
}

print_r($keysData);
?>