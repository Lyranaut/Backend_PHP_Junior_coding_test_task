<?php
$text = 'Lorem Ipsum is simply [tag1 description="Some value"]dummy text[/tag1] of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the [tag2]1500s[/tag2], when an unknown printer took...';

$tagsData = [];
$tagsDescription = [];

$pattern = '/\[(\w+)(?:\s+description="([^"]+)")?\](.*?)\[\/\1\]/';

preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);

foreach ($matches as $match) {
    $tagName = $match[1];
    $tagDescription = isset($match[2]) ? $match[2] : '';
    $tagData = $match[3];

    $tagsData[$tagName] = $tagData;
    $tagsDescription[$tagName] = $tagDescription;
}

print_r($tagsData);
print_r($tagsDescription);
?>