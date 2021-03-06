<?php

namespace APP\Model;

class Provider{
    private string $cnpj;
    private string $name;
    private ?Address $address;
    private ?string $phone;


    public function __construct(
        String $cnpj,
        String $name,
        ?String $phone = null,
        ?Address $address = null
    )
    {
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }   
}