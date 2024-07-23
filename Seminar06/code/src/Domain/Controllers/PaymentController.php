<?php

namespace Geekbrains\Application1\Domain\Controllers;

use Geekbrains\Application1\Application\Render;
use Geekbrains\Application1\Domain\Models\Payment;

class PaymentController
{
    public function actionIndex() {
        $render = new Render();

        $payments = Payment::getAllPayment();

        return $render->renderPage('payment-index.tpl', [
            'title' => 'Страница платежей',
            'payments' => $payments
        ]);
    }

    public function actionFind()
    {
        $render = new Render();
        $id = (int)$_GET['id'] ?? 0;

        $payments = Payment::getById();
        return $render->renderPage('payment-find.tpl', [
            'title' => 'Страница платежей выбранного юзера',
            'payments' => $payments,
            'id' => $id
        ]);
    }
}