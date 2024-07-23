<p>Список транзакций</p>

<ul id="navigation">
    {% for payment in payments %}
{*    <li>{{ payment.getIdUserPayment() }} | {{ payment.getAmount() }} | {{ payment.getPaymentTimestamp() | date('d.m.Y') }} | {{ payment.getIdUser() }}</li>*}
    <li>{{ payment }}</li>
    {% endfor %}
</ul>