<?php

namespace Geekbrains\Application1\Domain\Models;

use Geekbrains\Application1\Application\Application;
use \PDO;

class Payment
{
    private ?int $id_user_payment;
    private ?float $amount;
    private ?int $payment_timestamp;
    private ?int $id_user;

    public function getIdUserPayment(): int
    {
        return $this->id_user_payment;
    }

    public function setIdUserPayment(?int $id_user_payment): void
    {
        $this->id_user_payment = $id_user_payment;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    public function getPaymentTimestamp(): int|null
    {
        return $this->payment_timestamp;
    }

    public function setPaymentTimestamp(?int $payment_timestamp): void
    {
        $this->payment_timestamp = $payment_timestamp;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(?int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function __toString(): string
    {
        $date = strtotime($this->getPaymentTimestamp() ?? time());
        return "{$this->getIdUserPayment()} . {$this->getAmount()} . $date . {$this->getIdUser()}";
    }


    public static function getAllPayment(): false|array
    {
        $sql = "SELECT * FROM user_payment";

        $connect = Application::$storage->get();
        $request = $connect->query($sql);
        $request->setFetchMode(PDO::FETCH_CLASS, 'Geekbrains\Application1\Domain\Models\Payment');
        $payments = $request->fetchAll();
//        $request->setFetchMode(PDO::FETCH_ASSOC);
//        $data = $request->fetchAll();
//        $payments = [];
//        foreach ($data as $item) {
//            $payment = new Payment();
//            $payment->setIdUserPayment($item['id_user_payment']);
//            $payment->setAmount($item['amount']);
//            $payment->setPaymentTimestamp($item['payment_timestamp']);
//            $payment->setIdUser($item['id_user']);
//            $payments[] = "$payment";
//        }
        return $payments;
    }
}