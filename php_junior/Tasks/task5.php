1) Переделываем роуты на /login/.....
2) Доделываем LoginController - login / register
3) Функция redirect('путь') - в core
4) Базовый Controller.php и наследуем от него Home and Login
---
5) Делаем автозагрузку классов через spl_autoload_register
6) Добавляем поле админ для пользователей и поле аватар
7) Делаем класс работы с авторизацией
- CSV::read...
- Auth::login(id), logout(), user(), isAdmin(), userID()
8) Страница редактирования профиля /user
- проверям логинен ли юзер, если нет -> login и делаем возврат после логина
- редактирования данных
9) Функция одна - взависимости от параметров - есть/нет - splashMessage() сообщения
10) Функция oldData() похоже на 9.
--
11) При переходе на сразу /user - редирект логин - и вернуть обратно куда он шел
12) Показ одного (использование ид товара в ссылке) делаем роут типа /show?id=5
13) Функция route($routName, [params, ...])
14) Роуты делаем из двух - типа auth/login
15) Загрузка аватара - http://php.net/manual/ru/features.file-upload.post-method.php
----
16) Используем Trait для хранения функций валидации
17)* function update делаем с параметрами массив [поле => значение]
