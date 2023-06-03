<pre>
Набросал интерфейсы основных классов, а также структуру БД (файл db-structure.jpg).
Этого должно быть достаточно, исходя из условия задачи.

Предполагаемые API методы:

1). Логин юзера:
POST /api/v1/login
{"login" : "Max2000", "password" : "12345"}

2). Просмотр заказов юзера:
GET /api/v1/user/{id}/order

3). Получение доступных мероприятий:
GET /api/v1/event

4). Рассчет стоимости билета:
POST /api/v1/ticket/calc-price
{"event_id": 1, "event_parts_ids" : [1, 2, 3]}

5). Создание заказа:
POST /api/v1/order
{"events" : [{"id": 1, "event_parts_ids" : [1, 2, 3]}]}

6). Веб-хук об успешной оплате заказа:
POST /api/v1/payment/{id}/ok
{"secret" : "xxx"}
</pre>