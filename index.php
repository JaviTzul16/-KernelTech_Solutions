<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - KernelTech</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Portal Educativo SysOS</h1>
        <p>Módulo II: Dashboard de Diagnóstico del Servidor Anfitrión</p>
    </header>

    <nav class="menu">
        <a href="index.php">Dashboard</a>
        <a href="procesos.php">Procesos y Concurrencia</a>
        <a href="memoria.php">Memoria Virtual</a>
        <a href="archivos.php">Sistemas de Archivos</a>
        <a href="virtualizacion.php">Virtualización</a>
    </nav>

    <main>
        <h2>Monitoreo en Vivo (Ubuntu Server 26.04)</h2>
        
        <div class="dashboard-grid">
            <div class="card">
                <h3>Carga y Uptime del Sistema</h3>
                <!-- Ejecución de uptime para mostrar tiempo en línea y promedio de carga[cite: 2] -->
                <pre><?php echo shell_exec('uptime'); ?></pre>
            </div>

            <div class="card">
                <h3>Monitoreo de Memoria RAM</h3>
                <!-- Extracción de métricas vía free -h[cite: 2] -->
                <pre><?php echo shell_exec('free -h'); ?></pre>
            </div>

            <div class="card">
                <h3>Almacenamiento de Disco</h3>
                <!-- Estado de montaje y porcentaje de uso del sistema de archivos principal[cite: 2] -->
                <pre><?php echo shell_exec('df -h /'); ?></pre>
            </div>

            <div class="card">
                <h3>Top 10 Procesos del Sistema</h3>
                <!-- Despliegue dinámico de los 10 procesos con mayor consumo de recursos[cite: 2] -->
                <pre><?php echo shell_exec('ps aux --sort=-%cpu | head -n 11'); ?></pre>
            </div>
        </div>
    </main>

</body>
</html>