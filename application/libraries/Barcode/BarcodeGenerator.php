<?php
namespace Picqer\Barcode;

abstract class BarcodeGenerator {
    const TYPE_CODE_128 = 'C128';
    const TYPE_CODE_39 = 'C39';

    abstract public function getBarcode($code, $type);
}
?>
