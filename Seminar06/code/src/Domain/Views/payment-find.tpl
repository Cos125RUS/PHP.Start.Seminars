<p>Список транзакций пользователя с id: {{ id }}</p>

<ul id="navigation">
    {% for payment in payments %}
    <li>{{ payment }}</li>
    {% endfor %}
</ul>