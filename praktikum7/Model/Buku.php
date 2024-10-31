    <?php

    class Buku{
        protected $id;
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
        

        public function setId($id)
        {
            $this->id = $id;
        }
        
        public function getId()
        {
            return $this->id;
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