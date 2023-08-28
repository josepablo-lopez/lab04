<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <div class="contenedor">
        <header>
            <div class="logo">
                <img src="images/logoumg.png" width="150" alt="">
                <a href="#">MIUMG STORE</a>
            </div>
    
            <nav>
                <a href="index.html">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="mision_vision.html">mision/vision</a>
                <a href="contactenos.html">Contactanos</a>
            </nav>
        </header>
    
        <section class="main">
            <article>
                <h2 class="titulo">BIENVENIDO A MIUMG STORE</h2>
                <p>Explora una experiencia de compra en línea única y descubre
                una amplia gama de productos de alta calidad que se adaptan a tus necesidades. 
                En MIUMG STORE, nos enorgullecemos de ofrecerte una selección cuidadosamentede productos 
                que abarcan desde tecnología innovadora hasta moda vanguardista y artículos para el hogar
                 que mejoran tu estilo de vida.</p>
            </article>
    
            <article>
                <h2 class="titulo">¿Qué nos hace especiales?</h2>
                <p>Nuestro compromiso con la calidad, la variedad y la satisfacción del cliente.
                Navega por nuestras distintas categorías para encontrar todo lo que buscas y más. 
                Desde gadgets electrónicos de última generación hasta prendas de vestir elegantes,
                encontrarás productos que enriquecerán tu día a día.</p>
            </article>
            <article>
            <?php
//Generar lista de productos
$productData = [
    ["id" => 1, "name" => 'Keyboard', "description" => 'laptop ROG strix', "price" => 482.32,"icon"=> 'images\compu1.jpg'],
    ["id" => 2, "name" => 'Mouse', "description" => 'laptop dell', "price" => 132.82,"icon"=> 'images\compu2.jpg'],
    ["id" => 3, "name" => 'Monitor', "description" => 'combo 1', "price" => 832.5, "icon"=> 'images\compu3.jpg']
];
?>



<?php
foreach ($productData as ["id" => $id, "icon" =>$icon,"name" => $name, "description" => $description, "price" => $price]) {
    $priceFormat = number_format($price, 2, '.', '');
    echo "<a href=$icon><img border='0' alt=$name src=$icon width='100' height='100'></a><br>";
    echo "<div class='productContainer'>\n";
    echo "<div class='productName'>Producto: $name<div>\n";
    echo "<div class='productDetail'><p>$description</p><div>\n";
    echo "<div class='productFooter'>Precio: $priceFormat <a class='buttonAddCart' href='addCart.php?productId=$id'>Agregar</a></div>\n";
    echo "</div>\n";
}




echo PHP_EOL;
?>

<?php 
// Datos de conexión a la base de datos
$servername = "MYSQL5049.site4now.net";
$dbname = "db_9d664d_devweb";
$username = "9d664d_devweb";
$password = "d354rr0LloW3bUm6";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->close();
?>

            </article>
        </section>
    
        <aside>
            <div class="widget">
                <div class="imagen"></div>
            </div>
    
            <div class="widget">
                <div class="imagen"></div>
            </div>
        </aside>
    
        <footer>
            <section class="links">
                <a href="index.html">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="mision_vision.html">mision/vision</a>
                <a href="contactenos.html">Contactanos</a>
                <a href="carrito.html">Contactanos</a>
            </section>
    
            <div class="social">
                <a href="#">FB</a>
                <a href="#">WTSP</a>
            </div>
        </footer>
    </div>
    
    
    <!-- Otras secciones y contenido de la página principal -->
    <script src="main.js"></script>
</body>
</html>
