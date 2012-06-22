#Стандарты именования и кодирования

**Кодирование**

- Необходимо использовать стандарт [ZEND](http://framework.zend.com/manual/ru/coding-standard.html), за исключением нескольких моментов моментов:
- Для имен переменных не используется «верблюжий» регистр.
- Начальные и конечные фигурные скобки(функций, if, swich, for, foreach, …) должны
располагаться на новой строке.
- Имена классов не должны начинаться с префикса «С», т.к. с него начинаются классы фреймворка.
- Ограничение на длину строки кода: 120 символов
- Отступ между функциями 2 пустых строки
- Любые решения при разработке, которые вызывают сомнения или трудности, нужно
согласовывать с другими программистами: звонить, писать, обсуждать, советоваться.
При необходимости можно организовать «Мозговой Штурм» или «Парное Программирование».



**Создание Базы Данных**

- Запрещается использовать тип движка `MyIsam`. Необходимо использовать `InnoDb` с реализацией внешних ключей.
- Кодировка всех таблиц БД – `utf8`
- Каждое поле таблицы должно содержать комментарий, на их основе появляются лэйблы у форм и списков.
- Комментарий не должен содержать сокращений и должен подробно описывать содержание того или иного поля БД (вместо «Название» - «Название новости»)
- Если логика поля слишком сложна, для описания в комментариях, необходимо воспользоваться механизмом hint-подсказок генератора форм.
- Таблицы и поля именуются в нижнем регистре, через подчеркивание.
- Название полей таблиц БД не должно содержать само название таблицы, пример таблица пользователи users:
Не правильно: `user_id, user_first_name, user_last_name`
Правильно: `id, first_name, last_name`
- Старайтесь для большинства таблиц использовать первичный ключ с названием `id`
- Поле для сохранения порядка всегда именуется `order`
- Поле хранящее алиас для подставления в `URL` всегда именуется `alias`


**Именование классов**

- Название модели должно быть в единственном числе.
- Названия контроллеров и форм содержат название соответствующей модели и должны быть описаны в единственном числе: {modelId}Controller, {modelId}AdminController.
- Директории модуля создаются в нижнем регистре, за исключением если название директории не содержит несколько слов, как например следующая папка /views/documentAdmin.

