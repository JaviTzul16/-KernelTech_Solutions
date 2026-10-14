<!-- memoria.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Memoria Virtual - KernelTech</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header>
        <h1>Portal Educativo SysOS</h1>
        <p>Módulo I: Gestión de Memoria Virtual</p>
    </header>

    <nav class="menu">
        <a href="index.php">Dashboard</a>
        <a href="procesos.php">Procesos y Concurrencia</a>
        <a href="memoria.php">Memoria Virtual</a>
        <a href="archivos.php">Sistemas de Archivos</a>
        <a href="virtualizacion.php">Virtualización</a>
    </nav>

    <main>
        <div class="card">
            <h2>Conceptos Clave</h2>
            <ul>
                <li><strong>Memoria Virtual, Paginación y Segmentación:</strong> Técnicas del SO para administrar la memoria. La paginación divide la memoria en bloques de tamaño fijo (páginas), mientras que la segmentación utiliza bloques de tamaño variable[cite: 2].</li>
                <li><strong>Reemplazo de Páginas:</strong> Cuando la memoria RAM está llena, se utilizan algoritmos como LRU (Menos Recientemente Usada), FIFO (Primero en Entrar, Primero en Salir) y el algoritmo Óptimo para decidir qué página retirar[cite: 2].</li>
                <li><strong>Fragmentación Interna y Externa:</strong> La interna es el espacio desperdiciado dentro de un bloque asignado, mientras que la externa son pequeños espacios libres dispersos en la memoria que no pueden ser utilizados por requerir bloques contiguos[cite: 2].</li>
            </ul>
        </div>

        <div class="card">
            <h2>Casos Prácticos y Ejemplos</h2>
            
            <h3>Explicación Gráfica: Fallo de Página (Page Fault)</h3>
            <!-- Asegúrate de subir la imagen a la carpeta img/ -->
            <img src="assets/img/fallo_pagina.png" alt="Explicación gráfica del fallo de página" style="max-width: 100%; border: 1px solid #ddd;">
            <p>Un fallo de página (Page Fault) ocurre cuando un proceso intenta acceder a una porción de memoria que actualmente no se encuentra cargada en la RAM física[cite: 2]. El SO debe intervenir, buscar la página en el disco (swap) y cargarla en un marco libre de la RAM.</p>

            <h3>Cálculo de Conversión: Dirección Lógica a Física</h3>
            <p>La Unidad de Manejo de Memoria (MMU) convierte las direcciones lógicas generadas por la CPU a direcciones físicas en la RAM[cite: 2]. El cálculo conceptual es el siguiente:</p>
            <ol>
                <li>La dirección lógica se divide en dos partes: <strong>Número de Página (p)</strong> y <strong>Desplazamiento (d)</strong>[cite: 2].</li>
                <li>Se consulta la Tabla de Páginas usando el número de página (p) para encontrar su <strong>Marco base (f)</strong> en la RAM física[cite: 2].</li>
                <li>La dirección física final se calcula sumando la dirección base del marco y el desplazamiento: <code>Dirección Física = (Marco de Página * Tamaño de Página) + Desplazamiento</code>[cite: 2].</li>
            </ol>
        </div>
    </main>

</body>
</html>