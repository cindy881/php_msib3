<?php
abstract class Bidang
{
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract protected function luasBidang();
    abstract protected function kelilingBidang();
}
