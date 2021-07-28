<?php

interface PayableInterface
{
    public function pay();
}

class CreditCardPayment implements PayableInterface
{
    public function pay()
    {
        return [
            '1'=>'Masukkan nomor kartu kredit',
            '2'=>'Masukkan kode CVT',
            '3'=>'Masukkan nama pemegang kartu'
        ];
    }
}

class PaypalPayment implements PayableInterface
{
    public function pay()
    {
        return [
            '1'=>'Masukkan username dan password',
            '2'=>'Masukkan kode transaksi'        ];
    }
}

class ATMTransferPayment implements PayableInterface
{
    public function pay()
    {
        return [
            '1'=>'Masukkan kartu ATM',
            '2'=>'Masukkan 6 digit PIN',
            '3'=>'Pilih menu transaksi',
            '4'=>'Pilih nomor rekening virtual',
            '5'=>'Masukkan kode transaksi'
        ];
    }
}

class PaymentFactory
{
    public function initializePayment($type)
    {
        if ($type === 'credit') {
            return new CreditCardPayment();
        }
        if ($type == 'paypal') {
            return new PaypalPayment();
        }
        if ($type === 'atm') {
            return new ATMTransferPayment();
        }

        throw new Exception("Unsupported payment method");
    }
}

$jenis = 'credit';
$paymentFactory = new PaymentFactory();
$payment = $paymentFactory->initializePayment($jenis);
print_r($payment->pay());