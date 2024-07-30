<!DOCTYPE html>
<html>
    <head>
        <title>{{ title }}</title>
    </head>
    <body>
        <div id="header">
            {% include "auth-template.tpl" %}
        </div>
        <div id="menu">
            <a href="/">Главная</a>
            <a href="/user">Пользователи</a>
        </div>
        <p>Session page counter: {{counter}}</p>
        {% include content_template_name %}
    </body>
</html>