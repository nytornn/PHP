<?php
$content = file_get_contents('https://random-data-api.com/api/v2/beers?size=10');
$content_array = json_decode($content, true);

function compare_alcohol($a, $b) {
    if ($a['alcohol'] == $b['alcohol']) {
        return 0;
    }
    return ($a['alcohol'] < $b['alcohol']) ? -1 : 1;
}

usort($content_array, 'compare_alcohol');
