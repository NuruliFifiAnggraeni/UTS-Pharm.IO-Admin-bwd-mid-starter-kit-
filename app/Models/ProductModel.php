<?php
namespace App\Models;

class ProductModel {
    // Simulasi data produk obat Pharm.io
    public function getInitialProducts() {
        return [
            ['id' => 1, 'nama' => 'Paracetamol 500mg', 'kategori' => 'Obat Bebas', 'stok' => 100, 'harga' => 5000],
            ['id' => 2, 'nama' => 'Amoxicillin', 'kategori' => 'Obat Keras', 'stok' => 50, 'harga' => 12000],
            ['id' => 3, 'nama' => 'Termometer Digital', 'kategori' => 'Alkes', 'stok' => 30, 'harga' => 45000],
            ['id' => 4, 'nama' => 'Vitamin C 1000mg', 'kategori' => 'Suplemen', 'stok' => 200, 'harga' => 3500],
            ['id' => 5, 'nama' => 'Masker Medis (Box)', 'kategori' => 'Alkes', 'stok' => 50, 'harga' => 35000],
            ['id' => 6, 'nama' => 'Betadine 30ml', 'kategori' => 'Obat Luar', 'stok' => 30, 'harga' => 18000],
            ['id' => 7, 'nama' => 'Antasida Doen', 'kategori' => 'Obat Bebas', 'stok' => 80, 'harga' => 4000],
            ['id' => 8, 'nama' => 'Hand Sanitizer 100ml', 'kategori' => 'Alkes', 'stok' => 40, 'harga' => 15000],
            ['id' => 9, 'nama' => 'Tensimeter Digital', 'kategori' => 'Alkes', 'stok' => 10, 'harga' => 250000],
            ['id' => 10, 'nama' => 'Cetirizine 10mg', 'kategori' => 'Obat Keras', 'stok' => 60, 'harga' => 8500],
    
        ];
    }
}