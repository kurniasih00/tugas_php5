<?php
class Mahasiswa{
    //member1 -variabel
        public $nim;
        public $nama;
        public $kuliah;
        public $mata_kuliah;
        public $nilai;

    //member2 - constructor
    public function __construct($nim, $nama, $kuliah, $mata_kuliah, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    //member3 -function return
    public function getStatus(){
        if ($this->nilai >= 65) return "Lulus";
        else return "Tidak Lulus";
    }
    public function getGrade(){
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 75) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } elseif ($this->nilai >= 40) {
            return 'D';
        } elseif ($this->nilai >= 0) {
            return 'E';
        } else {
            return '';
        }
    }
    public function getPredikat(){
        switch ($this->nilai) {
            case ($this->nilai >= 85):
                return 'Sangat Memuaskan';
                break;
            case ($this->nilai >= 75):
                return  'Memuaskan';
                break;
            case ($this->nilai >= 60):
                return 'Cukup';
                break;
            case ($this->nilai >= 40):
                return 'Kurang';
                break;
            case ($this->nilai >= 0):
                return 'Sangat Kurang';
                break;
            default:
                return  '';
        }
    }
}