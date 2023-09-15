<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="cont">
    <div class="content">
        <h1>Задание 1</h1>
        <?php
        // Создание массива со списком студентов
        $stud = ["Иванов", "Петров", "Смирнов", "Сидоров", "Козлов"];

        // Вывод списка студентов на экран
        echo "Список студентов:<br><br>";
        foreach ($stud as $student) {
            echo $student . "<br>";
        }

        // Подсчет количества студентов
        $num = count($stud);
        echo "Количество студентов: " . $num . "<br><br>";

        // Проверяем, есть ли "Сидоров" в списке
        if (in_array("Сидоров", $stud)) {
            echo "Фамилия Сидоров есть в списке. <br><br>";
        } else {
            echo "Фамилия Сидоров отсутствует в списке <br>";
        }

        // Удаление последней фамилии из списка и сохранение ее в переменной expelled
        $expelled = array_pop($stud);
        echo "Фамилия последнего отчисленного студента: " . $expelled;

        ?>
        </div>
        <div class="content">
        <h1>Задание 2</h1>
        <?php
        // Создание массива со значениями
        $data = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];

        // Сортировка массива по фамилиям
        asort($data);

        // Вывод отсортированного списка в формате "Кружок - Фамилия"
        foreach ($data as $circle => $fam) {
            echo $circle . " - " . $fam . "<br>";
        }
        ?>
        </div>
        <div class="content">
        <h1>Задание 3</h1>
        <?php
        // Создание многомерного массива с данными о студенте
        $student = array(
            "Имя" => "Алия",
            "Фамилия" => "Шакирова",
            "Группа" => "425",
            "Хобби" => "нет",
            "Соцсети" => array(
                "Facebook" => "en",
                "Instagram" => "en",
                "Twitter" => "en"
            )
        );

        // Вывод данных о студенте
        echo "Имя: " . $student["Имя"] . "<br>";
        echo "Фамилия: " . $student["Фамилия"] . "<br>";
        echo "Группа: " . $student["Группа"] . "<br>";
        echo "Хобби: " . $student["Хобби"] . "<br>";
        echo "Соцсети:<br>";
        foreach ($student["Соцсети"] as $network => $username) {
            echo $network . ": " . $username . "<br>";
        }
        ?>
    </div>
</div>
</body>
</html>