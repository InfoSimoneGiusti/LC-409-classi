<?php

class User {

    public $name;
    public $lastname;
    public $age;
    public $addresses;

    //LC attributi e metodi statici
    public static $nazionalita = "Italiana";

    public static function getProvaFunzioneStatica() {
        return "Ciao, io sono un metodo statico";
    }


    public function __construct($name, $lastname, array $addresses)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->addresses = $addresses;

        foreach ($addresses as $address) {
            if (!$address instanceof Address) {
                echo 'Ogni indirizzo deve essere una instanza della classe Address!';
                die();
            }
        }

    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function getNazionalita() {
        return self::$nazionalita;
    }

    public function getFullAddress() {

        /*
        $indirizzo = '';
        if (is_null($this->address)) {
            $indirizzo = null;
        } else {
            $indirizzo = $this->address->street;
        }
        */

        $indirizzi = '';

        foreach( $this->addresses as $address ) {
            $indirizzi .= $address->street . ', ' . $address->city . ', ' . $address->postcode . '<br>';
        }

        return $indirizzi;

    }

}