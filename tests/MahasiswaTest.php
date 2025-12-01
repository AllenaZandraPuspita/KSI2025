<?php
// tests/MahasiswaTest.php
use PHPUnit\Framework\TestCase;

// Hapus require_once karena kita pakai Autoload Composer

class MahasiswaTest extends TestCase {

    // Test 1: Skenario Sukses
    public function testTambahDataSukses(): void
    {
        // Kita asumsikan class Mahasiswa bisa di-load via Composer
        $mhs = new Mahasiswa(); 

        // Data valid: Nama minimal 3 karakter dan NPM 6 digit
        $hasil = $mhs->tambahData("Allena", "123456");

        // Assertion: Harus TRUE
        $this->assertTrue($hasil, "Data valid seharusnya sukses ditambahkan.");
    }
    
    // Test 2: Skenario Nama Gagal (Test Anda yang sudah ada)
    public function testTambahDataNamaGagal(): void
    {
        $mhs = new Mahasiswa();

        // Nama kosong dan NPM valid
        $hasil = $mhs->tambahData("", "123456"); 

        // Assertion: Harus FALSE
        $this->assertFalse($hasil, "Data gagal karena Nama kosong.");
    }
    
    // Test 3: Skenario NPM Gagal
    public function testTambahDataNPMGagal(): void
    {
        $mhs = new Mahasiswa();

        // Nama valid tapi NPM tidak 6 digit
        $hasil = $mhs->tambahData("Budi", "123"); 

        // Assertion: Harus FALSE
        $this->assertFalse($hasil, "Data gagal karena NPM tidak sesuai format.");
    }
}