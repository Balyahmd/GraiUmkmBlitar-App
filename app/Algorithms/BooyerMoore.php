<?php
class BooyerMoore
{
    public function badChar($string, $size)
    {
        $badChar = array();

        for ($i = 0; $i < $size; $i++) {
            $badChar[$string[$i]] = $i;
        }

        return $badChar;
    }

    public function search($text, $pattern)
    {
        $m = strlen($pattern);
        $n = strlen($text);

        $badChar = $this->badChar($pattern, $m);

        $s = 0;
        while ($s <= $n - $m) {
            $j = $m - 1;

            while ($j >= 0 && $pattern[$j] == $text[$s + $j]) {
                $j--;
            }

            if ($j < 0) {
                echo "Pola ditemukan pada index " . ($s) . "\n";
                $s += $m - $badChar[$pattern[$m - 1]];
            } else {
                $s += max(1, $j - $badChar[$pattern[$j]]);
            }
        }
    }
}
