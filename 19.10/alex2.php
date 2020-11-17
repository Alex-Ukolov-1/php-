<?php
$data=[$author=>
    [301=>
	[
	'id'=>301,
    'name' => 'Адександр Сергеевич Пушкин',
    'email' => 'alexander_pushkin@example.com',
	'birthYear'=>1799,
    ],
    10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
    ],
];

echo "===Авторы===<br/>";
foreach ($data[$author] as $v) {
echo $v['name'].' - '.$v['email'].'-'.$v['birthYear'].'<br>';
}
echo "===Книги===<br/>";
foreach ($data['books'] as $v) {
echo $v['title'].' - '.$data[$author][$v['author']]['name'].'-'.$v['publishedAt'].'<br>';
}
?> 