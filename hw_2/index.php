<?php

/*1.Написать функцию, которая будет формировать аббревиатуру
заданного выражения. Например Донбасская государственная
машиностроительная академия – ДГМА.*/
abbreviation('Донбасская государственная машиностроительная академия');
function abbreviation($abbreviationText){
    $newText=mb_strtoupper(mb_substr($abbreviationText,0,1));
    for ($i=0;$i<mb_strlen($abbreviationText);$i++){
        if(mb_substr($abbreviationText,$i,1)==' '){
            $letter=mb_strtoupper(mb_substr($abbreviationText,$i+1,1));
            $newText .=$letter;
        }
    }
    echo $newText;
}
echo "<br>";
/*2. Напишите функцию cutText($text, $maxSymbol), которая
проверяет длину строки $text, и если она превосходит
/*$maxSymbol – заменяет конец $text на "..." , так чтобы ее
длина стала равна $maxSymbol.*/
function curText ($text,int $maxSymbol) {
        $newText = mb_strimwidth($text, 0, $maxSymbol, "...");
        echo $newText;
}
curText ("Донбасская государственная
машиностроительная академия",30);
echo "<br>";
/*3.Необходимо написать функцию, которая считает в заданной
строке количество заданного символа. Например,
getCountSymbol("телефон", "е"); //результат выполнения – 2.*/
getCountSymbol('Телефон','е');
function getCountSymbol($text,$searchSymbol){
    $count=substr_count($text,$searchSymbol);
    echo $count;
}
echo "<br>";
/*4.Необходимо написать функцию, которая будет обрабатывать
строку из формы, а именно функция должна выполнять
следующее:
• удалить концевые пробелы;
• удалить все html теги;
• спец символы преобразовать в html сущности.
Функция должна вернуть обработанную строку.*/
stringHanding("<h1>Какой-то текст                  </h1> <div>&quotТег в теге&quot     </div>     ");
function stringHanding($strHanding){
    $strHanding=trim($strHanding);
    $strHanding=htmlspecialchars($strHanding);
    $strHanding=strip_tags($strHanding);
    echo $strHanding;
}
echo "<br>";
/*5.Необходимо написать функцию, которая сокращает полное ФИО в
краткое, например getShortFio("Иванов Иван Иванович") //
результат Иванов И.И.*/
getShortFio("Иванов Иван Иванович");
function getShortFio($fio){
    $fio = explode(' ',$fio);
    $shortFio = $fio[0].' '.mb_strtoupper(mb_substr($fio[1],0,1)).'.'.mb_strtoupper(mb_substr($fio[2],0,1)).'.';
    echo $shortFio;
}
echo "<br>";
/*6.Необходимо в заданном имени файла выделить расширение файла
(без точки).*/
extensionFile('img.jpeg');
function extensionFile($fileName){
    $extension = mb_substr($fileName,mb_strrpos($fileName,'.')+1);
    echo $extension;
}
echo "<br>";
?>
