<?php

class Buku{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }
    

    /**
     * Get the value of judul
     */ 
    public function getJudul()
    {
        return $this->judul;
    }

    /**
     * Get the value of pengarang
     */ 
    public function getPengarang()
    {
        return $this->pengarang;
    }

    /**
     * Get the value of penerbit
     */ 
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    /**
     * Get the value of tahun
     */ 
    public function getTahun()
    {
        return $this->tahun;
    }
}