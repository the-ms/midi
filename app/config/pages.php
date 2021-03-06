<?php
$config['pages'] = [
    'index' => ['route' => '/', 'title' => 'Главная'],
    '404' => ['route' => '/404/', 'controller' => 'PageController', 'action' => 'notfound', 'title' => 'Страница не найдена'],
    'admin' => ['route' => '/admin/', 'controller' => 'AdminController', 'auth' => 'admin', 'title' => 'Администрирование'],
    'contacts' => ['route' => '/contacts/', 'controller' => 'PageController', 'action' => 'contacts', 'title' => 'Контакты'],
    'feedback' => ['route' => '/feedback/', 'controller' => 'FeedbackController', 'title' => 'Обратная связь'],
    'gallery' => ['route' => '/gallery/', 'controller' => 'GalleryController', 'title' => 'Фотогалерея'],

    'login' => ['route' => '/login/', 'controller' => 'UsersController', 'action' => 'login', 'title' => 'Авторизация'],
    'logout' => ['route' => '/logout/', 'controller' => 'UsersController', 'action' => 'logout', 'title' => 'Выход'],
    'register' => ['route' => '/register/', 'controller' => 'UsersController', 'action' => 'register', 'title' => 'Регистрация'],
    'restore' => ['route' => '/restore/', 'controller' => 'UsersController', 'action' => 'restore', 'title' => 'Восстановление пароля'],
    'verify' => ['route' => '/verify/(.+)/', 'controller' => 'UsersController', 'action' => 'verify', 'params' => ['restore_code'], 'title' => 'Восстановление пароля'],
    'users' => ['route' => '/users/', 'controller' => 'UsersController', 'action' => 'index', 'auth' => 'admin', 'title' => 'Пользователи'],
    'users_item' => ['route' => '/users/(\d+)/', 'controller' => 'UsersController', 'action' => 'item', 'params' => ['id'], 'title' => 'Страница пользователя'],
    'users_add' => ['route' => '/users/add/', 'controller' => 'UsersController', 'action' => 'add', 'auth' => 'admin', 'title' => 'Добавление пользователя'],
    'users_del' => ['route' => '/users/del/(\d+)/', 'controller' => 'UsersController', 'action' => 'del', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Удаление'],
    'users_edit' => ['route' => '/users/edit/(\d+)/', 'controller' => 'UsersController', 'action' => 'edit', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Редактирование'],

    'module' => ['route' => '/module/', 'controller' => 'ModuleController', 'title' => 'Модуль'],
    'module_cat' => ['route' => '/module/cat/(\d+)/', 'controller' => 'ModuleController', 'action' => 'cat', 'params' => ['id'], 'title' => 'Рубрика'],
    'module_addcat' => ['route' => '/module/addcat/', 'controller' => 'ModuleController', 'action' => 'addcat', 'auth' => 'admin', 'title' => 'Добавление рубрики'],
    'module_editcat' => ['route' => '/module/editcat/(\d+)/', 'controller' => 'ModuleController', 'action' => 'editcat', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Редактирование рубрики'],
    'module_delcat' => ['route' => '/module/delcat/(\d+)/', 'controller' => 'ModuleController', 'action' => 'delcat', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Удаление рубрики'],
    'module_reordercat' => ['route' => '/module/reordercat/', 'controller' => 'ModuleController', 'action' => 'reordercat', 'auth' => 'admin', 'title' => 'Сортировка рубрик'],
    'module_items' => ['route' => '/module/items/', 'controller' => 'ModuleController', 'action' => 'items', 'title' => 'Модуль'],
    'module_item' => ['route' => '/module/item/(\d+)/', 'controller' => 'ModuleController', 'action' => 'item', 'params' => ['id'], 'title' => 'Подробная информация'],
    'module_add' => ['route' => '/module/add/', 'controller' => 'ModuleController', 'action' => 'add', 'auth' => 'admin', 'title' => 'Добавление'],
    'module_edit' => ['route' => '/module/edit/(\d+)/', 'controller' => 'ModuleController', 'action' => 'edit', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Редактирование'],
    'module_del' => ['route' => '/module/del/(\d+)/', 'controller' => 'ModuleController', 'action' => 'del', 'params' => ['id'], 'auth' => 'admin', 'title' => 'Удаление'],
    'module_addcomment' => ['route' => '/module/addcomment/(\d+)/', 'controller' => 'ModuleController', 'action' => 'addcomment', 'params' => ['item'], 'title' => 'Добавление комментария'],
    'module_editcomment' => ['route' => '/module/editcomment/(\d+)/', 'controller' => 'ModuleController', 'action' => 'editcomment', 'params' => ['id'], 'title' => 'Редактирование комментария'],
    'module_delcomment' => ['route' => '/module/delcomment/(\d+)/', 'controller' => 'ModuleController', 'action' => 'delcomment', 'params' => ['id'], 'title' => 'Удаление комментария'],
    'module_reorder' => ['route' => '/module/reorder/', 'controller' => 'ModuleController', 'action' => 'reorder', 'auth' => 'admin', 'title' => 'Сортировка'],
    'module_rss' => ['route' => '/module/rss/', 'controller' => 'ModuleController', 'action' => 'rss', 'title' => 'RSS'],
];