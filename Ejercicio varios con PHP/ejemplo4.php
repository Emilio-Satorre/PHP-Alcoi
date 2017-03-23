<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4.4</title>
</head>
<body>
    <?php
        $biblioteca =[
            "cine" => [
                "El guion",
                "Hitchcock",
            ],
            "programacion" =>[
                "Patterns",
                "Clean Code",
                "Refactoring",
            ],
        ];

            echo "<ul>";
        foreach($biblioteca as $categoria => $elementos){
            echo "<li>$categoria<ul>";
            //libros
            foreach($elementos as $elemento){
                echo "<li>$elemento</li>";
            };
            echo "</ul></li>";
        };
            echo "</ul>";
    ?>
</body>
</html>