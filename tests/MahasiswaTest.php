<?php
// tests/MahasiswaTest.php
use PHPUnit\Framework\TestCase;

// Memuat (include) class yang akan diuji
require 'src/Mahasiswa.php'; 

class MahasiswaTest extends TestCase {
    
    // Test Skenario 1: Penambahan Data Berhasil
    public function testTambahDataSukses(): void {
        $mahasiswa = new Mahasiswa();
        
        // Data input yang valid
        $nama_valid = 'Budi Santoso';
        $nim_valid = '1234567890'; // 10 digit
        
        $hasil = $mahasiswa->tambahData($nama_valid, $nim_valid);
        
        // Assertion: Memastikan hasilnya TRUE (berhasil disimpan)
        $this->assertTrue($hasil, "Data mahasiswa valid seharusnya berhasil ditambahkan.");
    }

    // Test Skenario 2: NIM Gagal (kurang dari 10 digit)
    public function testTambahDataNIMGagal(): void {
        $mahasiswa = new Mahasiswa();
        
        $nama_valid = 'Susi';
        $nim_gagal = '12345'; // NIM hanya 5 digit
        
        $hasil = $mahasiswa->tambahData($nama_valid, $nim_gagal);
        
        // Assertion: Memastikan hasilnya FALSE (gagal disimpan karena NIM salah)
        $this->assertFalse($hasil, "Data gagal karena NIM kurang dari 10 digit.");
    }

    // Test Skenario 3: Nama Gagal (kosong)
    public function testTambahDataNamaGagal(): void {
        $mahasiswa = new Mahasiswa();
        
        $nama_gagal = '  '; // Hanya spasi (dianggap kosong)
        $nim_valid = '0987654321';
        
        $hasil = $mahasiswa->tambahData($nama_gagal, $nim_valid);
        
        // Assertion: Memastikan hasilnya FALSE (gagal disimpan karena Nama kosong)
        $this->assertFalse($hasil, "Data gagal karena Nama kosong.");
    }
}