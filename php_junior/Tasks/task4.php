
1) Создаем контроллер для авторзации - логин и регистрация
2) Создаем таблицу пользователей, поля email, password (хеш md5())
3) Создваем роут и страницу логина и регистрации
логин - ?page=login&act=index, для POST запроса типа - ?page=login&act=check
регистрация, аналогично. для POST типа ?page=registration&act=save

SQL примеры:

получение пользователя по емайл

$email = $_POST['email'];
$db_connect = DB::connection();
$stmt = $db_connect->stmt_init();
$stmt->prepare('SELECT * FROM users WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_row();

запись в базу

$email = $_POST['email'];
$password = md5($_POST['password']);
$db_connect = DB::connection();
$stmt = $db_connect->stmt_init();
$stmt->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
$stmt->bind_param('ss', $email, $password);
$stmt->execute();
$result = $stmt->insert_id;



4) Кто успеет - делаем страницу добавления товара в админке. (аналог регистрации)