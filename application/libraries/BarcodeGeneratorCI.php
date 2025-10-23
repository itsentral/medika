<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/Barcode/BarcodeGenerator.php');
require_once(APPPATH . 'libraries/Barcode/BarcodeGeneratorPNG.php');

class BarcodeGeneratorCI {
    protected $generator;

    public function __construct() {
        $this->generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    }

    public function generate($code, $type = 'C128') {
        if (!$code) return null;
        return $this->generator->getBarcode($code, $this->getType($type));
    }

    private function getType($type) {
        switch (strtoupper($type)) {
            case 'C39':
                return $this->generator::TYPE_CODE_39;
            case 'C128':
            default:
                return $this->generator::TYPE_CODE_128;
        }
    }
}
?>
