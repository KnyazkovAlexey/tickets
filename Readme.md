<pre>
Набросал интерфейсы основных классов, а также структуру БД (файл db-structure.jpg).
Этого должно быть достаточно, исходя из условия задачи.

Предполагаемые API методы:

1). Логин юзера:
POST /api/v1/login
Content-Type: application/json

{"login" : "Max2000", "password" : "12345"}

2). Просмотр заказов юзера:
GET /api/v1/user/order

3). Рассчет стоимости заказа:
POST /api/v1/order/calc-price
Content-Type: application/json

{"event_id" : 1, "event_parts_ids" : [1, 2, 3]}

4). Создание заказа:
POST /api/v1/order
Content-Type: application/json

{"event_id" : 1, "event_parts_ids" : [1, 2, 3]}

5). Веб-хук об успешной оплате заказа:
POST /api/v1/payment/{id}/ok
Content-Type: application/json

{"secret" : "xxx"}
</pre>