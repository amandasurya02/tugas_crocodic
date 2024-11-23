<?php
// Class utama Product
class Product {
    protected $name;
    protected $price;
    protected $stock;

    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function showInformation() {
        echo "<br> <br> Nama: {$this->name}, Harga: {$this->price}, Stock: {$this->stock}\n";
    }
}

// Class turunan ProductElectronic
class ProductElectronic extends Product {
    public function calculateDiscount() {
        return $this->price - 5000; // Diskon 5000
    }

    public function showInformation() {
        parent::showInformation();
        echo "<br> Harga setelah diskon: " . $this->calculateDiscount() . "\n";
    }
}

// Class turunan ProductFashion
class ProductFashion extends Product {
    public function calculateDiscount() {
        return $this->price - 5000; // Diskon 2000
    }

    public function showInformation() {
        parent::showInformation();
        echo "<br> Harga setelah diskon: " . $this->calculateDiscount() . "\n";
    }
}

// Membuat objek dari class ProductElectronic
$laptop = new ProductElectronic("Laptop", 10000, 23);
$laptop->showInformation();

// Membuat objek dari class ProductFashion
$kaos = new ProductFashion("Kaos", 7000, 3);
$kaos->showInformation();
?>