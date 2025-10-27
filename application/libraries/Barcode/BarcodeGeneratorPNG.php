<?php
namespace Picqer\Barcode;

class BarcodeGeneratorPNG extends BarcodeGenerator
{
    public function getBarcode($code, $type)
    {
        if (!is_string($code)) {
            throw new \InvalidArgumentException('Barcode code must be a string');
        }

        // pola sederhana Code128
        $pattern = $this->encodeCode128($code);

        $barWidth = 3;
        $barHeight = 60;
        $margin = 10;

        $width = strlen($pattern) * $barWidth + ($margin * 2);
        $height = $barHeight + ($margin * 2);

        $image = imagecreate($width, $height);
        $white = imagecolorallocate($image, 255, 255, 255);
        $black = imagecolorallocate($image, 0, 0, 0);
        imagefill($image, 0, 0, $white);

        $x = $margin;
        for ($i = 0; $i < strlen($pattern); $i++) {
            if ($pattern[$i] === '1') {
                imagefilledrectangle($image, $x, $margin, $x + $barWidth - 1, $barHeight + $margin, $black);
            }
            $x += $barWidth;
        }

        ob_start();
        imagepng($image);
        $pngData = ob_get_clean();
        imagedestroy($image);

        return $pngData;
    }

    private function encodeCode128($code)
    {
        // Sederhana: tiap karakter diubah ke 8-bit binary
        $pattern = '';
        for ($i = 0; $i < strlen($code); $i++) {
            $ascii = ord($code[$i]);
            $pattern .= str_pad(decbin($ascii % 128), 8, '0', STR_PAD_LEFT);
        }
        return $pattern;
    }
}
?>
