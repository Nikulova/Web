<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никулова Ксения ПИ-323</title>
</head>
<body>
<a href="index.php">Главная</a>
<FORM method="post" action="s3-6_p.php">
    <h2>Процентное отношение строчных и прописных букв</h2>
    Введите ваше предложение
    <input type="text" name="prhase">
    <P><INPUT type="submit" name="firstButton" value="Проверить">
</FORM>
<div class="second">
    <FORM method="post" action="s3-6_p.php">
        <h2>Удалить из заданного предложения заданное слово</h2>
        Введите предложение: <br>
        <input type="text" name="text" size="20"> <br>
        Введите слово, которое хотите удалить: <br>
        <input type="text" name="word" size="10"> <br>
        <input type="submit" name="secondButton" value="Проверить">
    </form>
</div>
<div class="third">
    <FORM method="post" action="s3-6_p.php">
        <h2>Подсчитать число различных гласных, входящих в данный текст</h2>
        <p>Введите текст <input type="text" name="text1" size="20"></p>
        <input type="submit" name="thirdButton" value="Проверить">
    </form>
</div>
</body>
</html> 