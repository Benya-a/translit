<?php

$text = 'Тошкентда видеорегистратор сотиб олиш';

// $letters = array(
//   'с' => 's',
//   'а' => 'a',
//   'л' => 'l',
//   'о' => 'o',
//   'м' => 'm',
//   ' ' => ' ',
//   ', ' => ', ',
//   'қ' => 'q',
//   'е' => 'e',
//   'н' => 'n',
//   '? ' => '? ',
//   'ё' => 'yo',
//   'и' => 'i',
//   'т' => 't',
//   'з' => 'z'
// );

$letters = array(
  ' Е'  => ' Ye',
  ' е'  => ' ye',
  'А' => 'A',
  'а' => 'a',
  'Б' => 'B',
  'б' => 'b',
  'Ч' => 'Ch',
  'ч' => 'ch',
  'Д' => 'D',
  'д' => 'd',
  'Э' => 'E',
  'э' => 'e',
  'Ф' => 'F',
  'ф' => 'f',
  'Г' => 'G',
  'г' => 'g',
  'Ғ' => 'Gʻ',
  'ғ' => 'gʻ',
  'Ҳ' => 'H',
  'ҳ' => 'h',
  'И' => 'I',
  'и' => 'i',
  'Ж' => 'J',
  'ж' => 'j',
  'К' => 'K',
  'к' => 'k',
  'Л' => 'L',
  'л' => 'l',
  'М' => 'M',
  'м' => 'm',
  'Н' => 'N',
  'н' => 'n',
  'О' => 'O',
  'о' => 'o',
  'Ў' => 'Oʻ',
  'ў' => 'oʻ',
  'П' => 'P',
  'п' => 'p',
  'Қ' => 'Q',
  'қ' => 'q',
  'Р' => 'R',
  'р' => 'r',
  'С' => 'S',
  'с' => 's',
  'Ш' => 'Sh',
  'ш' => 'sh',
  'Т' => 'T',
  'т' => 't',
  'У' => 'U',
  'у' => 'u',
  'В' => 'V',
  'в' => 'v',
  'Х' => 'X',
  'х' => 'x',
  'Й' => 'Y',
  'й' => 'y',
  'З' => 'Z',
  'з' => 'z',
  'Ё' => 'Yo',
  'ё' => 'yo',
  'Ъ' => 'ʼ',
  'ъ' => 'ʼ',
  'Я' => 'Ya',
  'я' => 'ya',
  'Ю' => 'Yu',
  'ю' => 'yu',  
  'Ь'  => '',
  'ь'  => '',
  '«' => '"',
  '»' => '"',
  'Ц' => 'S',
  'ц' => 's',
  'Е' => 'Ye',
  'е' => 'e',
  'ц' => 's'
  // ' Е' => 'Ye',
  // ' e' => 'ye'
  // ',' => ',',
  // '.' => '.',
  // ' ' => ' ',
  // '?' => '?',
  // '!' => '!',
  // '' => '',
  // '' => '',
  // '' => '',
  // '' => '',

);

$find       = array_keys($letters);
$replace    = array_values($letters);
$new_string = str_ireplace($find, $replace, $text);

// echo nl2br($new_string); // Only for converting texts (string)

echo $new_string; // Converting texts with HTML tags

?>
