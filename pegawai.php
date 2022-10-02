<?php
class Pegawai{
    //member1 variabel
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    //variabel konstanta & static di dlm class
    static $jml = 0;
    const PEGAWAI = 'Data Pegawai PT KUHH';
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    //member3 method2
    public function gaji_pokok($jabatan){
       switch ($this->jabatan) {
            case 'Manager': $this->gapok = 20000000; break;
            case 'Asisten': $this->gapok = 15000000; break;
            case 'Kabag': $this->gapok = 10000000; break;
            case 'Staff': $this->gapok = 4000000; break;
            default:;
        }
    }
    public function tunjangan_jabatan(){
       $this->tunj_jabatan = 20 * $this->gapok / 100;
    }

    public function tunjangan_keluarga(){
    if($this->status == 'Menikah') $this->tunj_keluarga = 10 * $this->gapok / 100;
     else $this->tunj_keluarga = 0;
    }

    public function gaji_kotor(){
    $this->gator = $this->gapok + $this->tunj_jabatan + $this->tunj_keluarga;
    }

     public function zakatprofesi(){
        if($this->agama == 'Islam' && $this->gator >= 6000000) $this->zakat_profesi = 2.5 * $this->gapok / 100;
    else $this->zakat_profesi = 0;
}
    
     public function gaji_bersih(){
       $this->gaber = $this->gator - $this->zakat_profesi;
    }

    public function mencetak(){
        echo '<b><u>'.self::PEGAWAI.'</u></b>'; 
        echo '<br/>Nip Pegawai: '.$this->nip;
        echo '<br/>Nama Pegawai: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: Rp. '.number_format($this->gapok, 0, ',', '.');
        echo '<br/>Tunjangan Jabatan: Rp. '.number_format($this->tunj_jabatan, 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: Rp. '.number_format($this->tunj_keluarga, 0, ',', '.');
        echo '<br/>Zakat Profesi: Rp. '.number_format($this->zakat_profesi, 0, ',', '.');
        echo '<br/>Gaji Bersih: Rp. '.number_format($this->gaber, 0, ',', '.');
        echo '<hr/>';
    }
}