<?php
/*
это отдельный файл с конфигурацией
подключения к базе данных
*/
/*
ранее на php1 параметры подключения к бд
хранили прямо в функции, которая подключается к БД
*/

/*
хост пользователь пароль записали в массив db
*/

/*
здесь нужно задать не только имя массива, но и обернуть в return
тогда файл будет возвращать массив
*/

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'test'
    ]
];