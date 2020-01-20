<?php


class Item
{
    private $id;
    private $nazwa;
    private $refund;
    private $recepta;
    private $rodzaj;
    private $producent;

    public function __construct($id,$nazwa,$refund,$recepta,$rodzaj,$producent){
        $this->id=$id;
        $this->nazwa=$nazwa;
        $this->recepta = $recepta;
        $this->refund = $refund;
        $this->rodzaj = $rodzaj;
        $this->producent = $producent;
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

    public function getRecepta()
    {
        return $this->recepta;
    }


    /**
     * @return mixed
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * @return mixed
     */
    public function getProducent()
    {
        return $this->producent;
    }

}