<p>Список пользователей в хранилище</p>

<ul id="navigation">
    {% for user in users %}
        <li><a href="/payment/find/?id={{ user.getUserId() }}">{{ user.getUserName() }} {{ user.getUserLastName() }}. День рождения: {{ user.getUserBirthday() | date('d.m.Y') }}</a></li>
    {% endfor %}
</ul>