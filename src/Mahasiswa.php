<?php
// src/Mahasiswa.php

class Mahasiswa {

    // Tambahkan type hinting untuk keamanan kode
    public function tambahData(string $nama, string $npm): bool
    {
        // 1. Validasi Nama (harus diisi dan minimal 3 karakter)
        if (trim($nama) === '' || strlen(trim($nama)) < 3) {
            return false; // nama kosong / terlalu pendek = gagal
        }
        
        // 2. Validasi NPM (Asumsi 6 digit angka, sesuai dengan test Anda)
        if (!preg_match('/^\d{6}$/', $npm)) {
             return false; // NPM tidak 6 digit angka = gagal
        }

        // Jika semua validasi sukses
        return true; 
    }
}