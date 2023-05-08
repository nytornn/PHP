<?php

class Block
{
    public int $id;
    public string $dttm;
    public string $hash;
    public string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDttm()
    {
        return $this->dttm;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function getData()
    {
        return $this->data;
    }
}