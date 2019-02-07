<?php

class auto
{

    public $merk;
    public $prijs;
    public $kilometers;
    public $deuren;
    public $motor;


    public function __construct($merk, $prijs, $kilometers, $deuren, $motor)
    {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->kilometers = $kilometers;
        $this->deuren = $deuren;
        $this->motor = $motor;
    }


}
class klant
{
    public $naam;
    public $address;
    public $email;
    public $verkoopdatum;
    public $apkdatum;

    public function __construct($naam, $address, $email, $verkoopdatum, $apkdatum)
    {
        $this->naam = $naam;
        $this->address = $address;
        $this->email = $email;
        $this->verkoopdatum = $verkoopdatum;
        $this->apkdatum = $apkdatum;
    }
}
$auto = new auto("Bmw",4000,4215,4,"geefgas21");
$klant = new klant("Piet", "Doos", "pizza@gmail.com", 26-05-2011, 12-2-2019);


var_dump($auto, $klant);
?>
