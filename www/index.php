<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 26.11.2015
 * Time: 16:11
 */
$news = array(
    1 => array(
        'title'=> '��!',
        'text' => '������� ��������� ����� � �����������'
    ),
2=> array(
    'title'=> '�������� ����!',
    'text' => '���������� 10 �������'
)

);
$id = $_GET['id'];
$article = $news[$id];
?>
<h1><?php echo $article['title']; ?></h1>
<p><?php echo $article['text']; ?></p>
