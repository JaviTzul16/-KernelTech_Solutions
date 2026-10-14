<!-- procesos.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Procesos - KernelTech</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header>
        <h1>Portal Educativo SysOS</h1>
        <p>Módulo I: Gestión de Procesos y Concurrencia</p>
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
                <li><strong>Estados de procesos:</strong> Nuevo, Listo, En Ejecución, Bloqueado y Terminado[cite: 2].</li>
                <li><strong>Hilos (POSIX Threads):</strong> Unidades básicas de utilización de CPU que comparten código y datos con otros hilos del mismo proceso[cite: 2].</li>
                <li><strong>Planificación:</strong> Algoritmos como Round Robin (porción de tiempo), SJF (el trabajo más corto primero) y Prioridades para asignar la CPU[cite: 2].</li>
                <li><strong>Sincronización y Condición de Carrera:</strong> Uso de semáforos y mutex para evitar que múltiples hilos modifiquen recursos compartidos simultáneamente, previniendo condiciones de carrera[cite: 2].</li>
            </ul>
        </div>

        <div class="card">
            <h2>Casos Prácticos y Ejemplos</h2>
            
            <h3>Diagrama de Transición de Estados</h3>
            <!-- Asegúrate de subir la imagen a la carpeta img/ -->
            <img src="assets/img/diagrama_estados.png" alt="Diagrama de Transición de Estados" style="max-width: 100%; border: 1px solid #ddd;">
            <p><em>Nota: Recuerda guardar tu diagrama en assets/img/diagrama_estados.png[cite: 2].</em></p>

            <h3>Simulación Conceptual: Problema de los Filósofos Comensales</h3>
            <p>Este problema clásico ilustra los retos de la sincronización[cite: 2]. Cinco filósofos se sientan alrededor de una mesa redonda; cada uno necesita dos tenedores para comer, pero solo hay cinco tenedores en total (uno entre cada filósofo). Si todos toman el tenedor de su izquierda al mismo tiempo, ocurre un <strong>interbloqueo (deadlock)</strong>. Para solucionarlo, se implementan semáforos (Mutex) que regulan el acceso exclusivo a los tenedores.</p>
        </div>
    </main>

</body>
</html>