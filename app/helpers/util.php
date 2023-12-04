<?php

namespace App\helpers;
class Util
{

    public static function convertYoutubeUrlToEmbedUrl($url) {
        // Parse the URL to extract query parameters
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                // Construct and return the embed URL
                return 'https://www.youtube.com/embed/' . $queryParams['v'];
            }
        }
        return false; // Return false if URL is invalid or the video ID is not found
    }
}



?>