<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BooyerMoreProvider extends ServiceProvider
{
    public static function badCharacterHeuristic($pattern, $size, &$badChar)
    {
        $badChar = array_fill(0, 256, -1);

        for ($i = 0; $i < $size; $i++) {
            $badChar[ord($pattern[$i])] = $i;
        }
    }

    public static function search($text, $pattern)
    {
        $text = strtolower($text);
        $pattern = strtolower($pattern);

        $textLength = strlen($text);
        $patternLength = strlen($pattern);
        $badChar = [];

        self::badCharacterHeuristic($pattern, $patternLength, $badChar);

        $shift = 0;
        while ($shift <= $textLength - $patternLength) {
            $j = $patternLength - 1;

            while ($j >= 0 && $pattern[$j] == $text[$shift + $j]) {
                $j--;
            }

            if ($j < 0) {
                // Match found
                return $shift;
            } else {
                $shift += max(1, $j - $badChar[ord($text[$shift + $j])]);
            }
        }

        // No match found
        return -1;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
