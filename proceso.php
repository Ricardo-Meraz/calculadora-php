<?php
    function sumar($a, $b) {
        return $a + $b;
    }

    function restar($a, $b) {
        return $a - $b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        if ($b == 0) {
            return 'No se puede divir entre 0';
        }
        return $a / $b;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $operador = $_POST['Operaciones'];
        $resultado = '';

        switch ($operador) {
            case 'sumar':
                $resultado = sumar($valor1, $valor2);
                break;
            case 'restar':
                $resultado = restar($valor1, $valor2);
                break;
            case 'multiplicar':
                $resultado = multiplicar($valor1, $valor2);
                break;
            case 'dividir':
                $resultado = dividir($valor1, $valor2);
                break;
            default:
                break;
        }

        echo "<h2>El total es: $resultado</h2>";
    }
    ?>