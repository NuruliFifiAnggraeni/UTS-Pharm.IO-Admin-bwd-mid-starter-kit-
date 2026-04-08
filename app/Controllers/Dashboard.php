<?php
namespace App\Controllers;
use App\Models\ProductModel;

class Dashboard extends BaseController {
    public function index() {
        // Cek apakah user sudah login melalui session
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth')->with('error', 'Silakan login terlebih dahulu!');
        }

        $model = new ProductModel();
        $data = [
            'title' => 'Dashboard Manajemen Obat - Pharm.io',
            'username' => session()->get('username'),
            'products' => $model->getInitialProducts()
        ];

        return view('dashboard_view', $data);
    }
}