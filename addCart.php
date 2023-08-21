<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Mensajes de confirmación y error
$mensaje_confirmacion = '';
$mensaje_error = '';

// Validar y procesar la solicitud
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["productId"]) && isset($_POST["quantity"]) &&
        is_numeric($_POST["quantity"]) && $_POST["quantity"] > 0) {

        $product_id = $_POST["productId"];
        $quantity = (int)$_POST["quantity"];

        // Agregar producto al carrito
        if (array_key_exists($product_id, $_SESSION['carrito'])) {
            $_SESSION['carrito'][$product_id] += $quantity;
        } else {
            $_SESSION['carrito'][$product_id] = $quantity;
        }

        // Mensaje de confirmación
        $mensaje_confirmacion = 'Producto agregado al carrito exitosamente.';
    } else {
        // Mensaje de error
        $mensaje_error = 'Error al agregar producto al carrito.';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>MIUMG STORE - Carrito de Compras</title>
</head>
<body>
    <!-- Contenedor principal y encabezado -->

    <section class="main">
        <!-- Mostrar mensajes de confirmación y error -->
        <?php
        if (!empty($mensaje_confirmacion)) {
            echo '<p class="mensaje-confirmacion">' . $mensaje_confirmacion . '</p>';
        }
        if (!empty($mensaje_error)) {
            echo '<p class="mensaje-error">' . $mensaje_error . '</p>';
        }
        ?>

        <!-- Contenido del carrito de compras -->
        <h2>Carrito de Compras</h2>
        <?php
        if (!empty($_SESSION['carrito'])) {
            echo '<table>';
            echo '<tr><th>Producto</th><th>Cantidad</th><th>Precio unitario</th><th>Total</th></tr>';

            foreach ($_SESSION['carrito'] as $product_id => $quantity) {
                $producto = obtenerProductoPorId($product_id); // Se debe implementar la funcion xd
                $precio_total = $producto["precio"] * $quantity;

                echo '<tr>';
                echo '<td>' . $producto["nombre"] . '</td>';
                echo '<td>' . $quantity . '</td>';
                echo '<td>$' . $producto["precio"] . '</td>';
                echo '<td>$' . $precio_total . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>El carrito está vacío.</p>';
        }
        ?>
    </section>

    <!-- Pie de página y enlaces a JavaScript -->
    <script src="main.js"></script>
</body>
</html>