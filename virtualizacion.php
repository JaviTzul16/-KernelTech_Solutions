<!-- virtualizacion.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Virtualización - KernelTech</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #34495e; color: white; }
    </style>
</head>
<body>

    <header>
        <h1>Portal Educativo SysOS</h1>
        <p>Módulo I: Virtualización y Contenedores</p>
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
                <li><strong>Hipervisores Tipo 1 vs Tipo 2:</strong> El Tipo 1 (Bare-metal) se ejecuta directamente sobre el hardware (ej. KVM), mientras que el Tipo 2 se ejecuta sobre un sistema operativo anfitrión[cite: 2].</li>
                <li><strong>Aislamiento a nivel de Kernel:</strong> Los contenedores comparten el mismo kernel del sistema operativo anfitrión, a diferencia de las Máquinas Virtuales (VMs) que ejecutan un kernel completo por cada instancia[cite: 2].</li>
                <li><strong>Namespaces y CGroups:</strong> Tecnologías clave en Linux para los contenedores; los Namespaces aíslan los recursos (procesos, red, montajes), mientras que los CGroups (Control Groups) limitan y monitorean el uso de recursos (CPU, memoria)[cite: 2].</li>
                <li><strong>VMs vs Contenedores:</strong> Las VMs ofrecen aislamiento fuerte pero son más pesadas; los contenedores son más ligeros, portátiles y rápidos al no emular hardware completo[cite: 2].</li>
            </ul>
        </div>

        <div class="card">
            <h2>Casos Prácticos y Ejemplos</h2>
            
            <h3>Cuadro Comparativo: KVM vs Docker</h3>
            <p>Comparación del consumo de recursos y tiempo de arranque entre el hipervisor KVM y la plataforma de contenedores Docker[cite: 2]:</p>
            <table>
                <tr>
                    <th>Característica</th>
                    <th>KVM (Máquina Virtual)</th>
                    <th>Docker (Contenedor)</th>
                </tr>
                <tr>
                    <td>Tiempo de Arranque</td>
                    <td>Minutos (requiere arrancar un SO completo)[cite: 2]</td>
                    <td>Segundos o milisegundos[cite: 2]</td>
                </tr>
                <tr>
                    <td>Consumo de Recursos (RAM/CPU)</td>
                    <td>Alto (emula hardware y SO propio)[cite: 2]</td>
                    <td>Bajo (comparte el kernel del SO anfitrión)[cite: 2]</td>
                </tr>
                <tr>
                    <td>Aislamiento</td>
                    <td>Alto (aislamiento por hardware emulado)[cite: 2]</td>
                    <td>Medio (aislamiento lógico vía Namespaces/CGroups)[cite: 2]</td>
                </tr>
            </table>
        </div>
    </main>

</body>
</html>