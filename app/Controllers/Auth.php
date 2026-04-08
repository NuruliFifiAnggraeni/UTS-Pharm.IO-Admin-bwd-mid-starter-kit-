<?php
namespace App\Controllers;

class Auth extends BaseController {
    public function index() {
        // Tampilkan halaman login
        return view('login_view');
    }

    public function login() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Login sederhana (Hardcoded) sesuai permintaan tanpa SQL
        if ($username === 'admin' && $password === '12345') {
            session()->set([
                'username'   => $username,
                'isLoggedIn' => true
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password Salah!');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/auth');
    }
}