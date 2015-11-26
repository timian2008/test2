<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 26.11.2015
 * Time: 16:11
 */
$news = array(
    1 => array(
        'title'=> 'ЧП!',
        'text' => 'Бабушка рассыпала сетку с мандаринами'
    ),
2=> array(
    'title'=> 'Открытие века!',
    'text' => 'Обнаружена 10 планета'
)

);
$id = $_GET['id'];
$article = $news[$id];
?>
<h1><?php echo $article['title']; ?></h1>
<p><?php echo $article['text']; ?></p>
