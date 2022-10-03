<?php
require_once 'Bidang.php';
class Lingkaran extends Bidang
{
    public $jari2;

    public function __construct($nama, $jari2)
    {
        parent::__construct($nama);
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
    }
    public function luasBidang()
    {
        $this->jari2 = $jari2;
        $luas = 3.14 * $jari2 * $jari2;
        return $luas;
    }
    public function kelilingBidang()
    {
        echo '<br/>Suara Anjing Guk...Guk...Guk';
    }
}
