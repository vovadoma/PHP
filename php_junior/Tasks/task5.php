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
9) Функции - splashMessage() сообщения
10) Функция oldData()
