<?php
// src/Mahasiswa.php

class Mahasiswa {
    // Fungsi ini mensimulasikan penambahan data ke database.
    // Untuk tujuan Unit Test, kita hanya mengecek apakah inputnya layak diproses (validasi).
    public function tambahData(string $nama, string $nim): bool {
        
        // 1. Validasi Nama
        if (trim($nama) === '' || strlen($nama) < 3) {
            return false; // Nama terlalu pendek/kosong
        }
        
        // 2. Validasi NIM (Asumsi NIM harus 10 digit)
        if (!preg_match('/^\d{10}$/', $nim)) {
            return false; // NIM tidak 10 digit angka
        }
        
        // Di aplikasi nyata, di sini akan ada kode SQL INSERT INTO...
        
        // Jika validasi sukses, anggap data berhasil ditambahkan
        return true; 
    }
}