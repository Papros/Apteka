<?php


class order
{
    private $id;
    private $userID;
    private $paymentMetod;
    private $deliveryMetod;
    private $finished;
    private $cancled;
    private $payment;
    private $ready;
    private $productID;

    public function _construct($id,$userId,$paymentMetod,$deliveryMetod,$finished,$cancled,$payment,$ready,$productID){
        $this->id=$id;
        $this->userID=$userId;
        $this->paymentMetod=$paymentMetod;
        $this->deliveryMetod=$deliveryMetod;
        $this->finished=$finished;
        $this->cancled=$cancled;
        $this->payment=$payment;
        $this->ready=$ready;
        $this->productID=$productID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }
    /**
     * @return mixed
     */
    public function getCancled()
    {
        return $this->cancled;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMetod()
    {
        return $this->deliveryMetod;
    }

    /**
     * @return mixed
     */
    public function getFinished()
    {
        return $this->finished;
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
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return mixed
     */
    public function getPaymentMetod()
    {
        return $this->paymentMetod;
    }

    /**
     * @return mixed
     */
    public function getReady()
    {
        return $this->ready;
    }

    /**
     * @param mixed $cancled
     */




}