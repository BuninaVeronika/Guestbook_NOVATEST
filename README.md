# Guestbook_NOVATEST
Простая гостевая книга для сайта.
sql/migration.php - файл миграции таблиц в базу данных.
sql/bd_connect.php - файл подключения базы данных к миграции и взаимодействию с базой данных.

php - 5.6
Apache - 2.4
MySQL - 5.6

Регистрация реализована с простой проверкой повторений почты.
Данные авторизации сохраняются в сесии.

Гостевая книга дает доступ для модерации комментариев через права в базе данных в поле "role"=1.
Права для редактирования и удаления у остальных пользователей присутствуют только на личные комментарии.

Фильтр топ слов обрабатывается через массив на сервере.