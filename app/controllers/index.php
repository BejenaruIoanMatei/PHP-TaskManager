<?php

$_SESSION['name'] = 'Jeffrey';

$config = require BASE_PATH . '/config.php';
$db = new Database($config['database']);

$notes = $db->query('select * from notes')->get();

view('index.view.php', [
    'heading' => 'Welcome Home'
]);
