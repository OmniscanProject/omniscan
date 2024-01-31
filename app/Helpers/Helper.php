<?php
 
 namespace App\Helpers;
  
 use Laravel\Cashier\Events\WebhookReceived;
  
 class Helper
 {

    public static function transformToSlug(string $text): string
    {
        // Check if it is empty
        if(!$text) {
            return null;
        }

        // Strip html tags
        $text = strip_tags($text);
        // Replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // Transliterate
        setlocale(LC_ALL, 'en_US.utf8');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // Remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // Trim
        $text = trim($text, '-');
        // Remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // Lowercase
        $text = strtolower($text);
        // Return result

        return $text;
    }
 }