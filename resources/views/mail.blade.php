<h2>Входящее сообщение!</h2> <br>

У Вас новое обращение через форму обратной связи (из popUp)!<br><br>

@if(isset($page))
Сообщение отправлено со страницы: {{ $page }}<br>
@endif

Детали сообщения: <br>

Имя: {{ $name }} <br>
Телефон: {{ $phone }} <br>
@if(isset($service))
Услуга: {{ $service }} <br>
@endif
