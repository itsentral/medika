<?php
// === Manual require utama ===
require_once(APPPATH . 'libraries/Barcode/BarcodeGenerator.php');
require_once(APPPATH . 'libraries/Barcode/BarcodeGeneratorPNG.php');

// === Tambahkan autoload untuk folder Types ===
spl_autoload_register(function ($class) {
    $prefix = 'Picqer\\Barcode\\Types\\';
    $base_dir = APPPATH . 'libraries/Barcode/Types/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . $relative_class . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeGeneratorCI {

    public function generate($text)
    {
        if (empty($text)) {
            $text = '000000';
        }

        $generator = new BarcodeGeneratorPNG();
        return $generator->getBarcode((string)$text, $generator::TYPE_CODE_128);
    }
}
