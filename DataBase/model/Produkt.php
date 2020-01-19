<?php


class Produkt
{
    private $id;
    private $nazwa;
    private $stan;
    private $zamiennik;
    private $kategoria;
    private $cena;
    private $refund;
    private $opakowanie;
    private $recepta;

    public function _construct($id,$nazwa,$stan,$zamiennik,$kategoria,$cena,$refund,$opakowanie,$recepta){
        $this->id=$id;
        $this->nazwa=$nazwa;
        $this->stan=$stan;
        $this->zamiennik=$zamiennik;
        $this->kategoria=$kategoria;
        $this->cena=$cena;
        $this->recepta = $recepta;
        $this->refund = $refund;
        $this->opakowanie=$opakowanie;
    }

    /**
     * @return mixed
     */
    public function getRecepta()
    {
        return $this->recepta;
    }

    /**
     * @return mixed
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * @return mixed
     */
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * @return mixed
     */
    public function getZamiennik()
    {
        return $this->zamiennik;
    }

    /**
     * @return mixed
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @return mixed
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

}