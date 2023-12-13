<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BooyerMoreProvider extends ServiceProvider
{

    public function BooyerMore($text, $pattern)
    {
        $n = strlen($text);
        $m = strlen($pattern);
        $last = array();

        // Initialize last occurrence array
        for ($i = 0; $i < 256; $i++) {
            $last[$i] = -1;
        }

        // Fill last occurrence array with positions of characters in pattern
        for ($i = 0; $i < $m; $i++) {
            $last[ord($pattern[$i])] = $i;
        }

        $i = $m - 1; // Index for the end of the pattern
        $j = $m - 1; // Index for the end of the text

        while ($i < $n) {
            if ($text[$j] == $pattern[$i]) {
                // Match found
                if ($i == 0) {
                    return $j; // Return the position of the match
                }
                $i--;
                $j--;
            } else {
                // No match, shift based on the last occurrence of the character in pattern
                $i = $m - 1;
                $j += $m - min($i, 1 + $last[ord($text[$j])]);
            }
        }

        return -1; // No match found

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
