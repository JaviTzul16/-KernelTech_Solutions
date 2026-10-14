<!-- archivos.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistemas de Archivos - KernelTech</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header>
        <h1>Portal Educativo SysOS</h1>
        <p>Módulo I: Sistemas de Archivos y E/S</p>
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
                <li><strong>Estructura de Inodos:</strong> Estructura de datos en sistemas de archivos tipo UNIX que almacena metadatos sobre un archivo (tamaño, permisos, propietario) y punteros a los bloques de datos, pero no el nombre ni su contenido[cite: 2].</li>
                <li><strong>VFS (Virtual File System):</strong> Capa de abstracción del kernel que permite a las aplicaciones cliente acceder a diferentes tipos de sistemas de archivos de manera uniforme[cite: 2].</li>
                <li><strong>Asignación en ext4:</strong> Utiliza "extents" (bloques físicos contiguos) para mejorar el rendimiento y reducir la fragmentación en la asignación de bloques[cite: 2].</li>
                <li><strong>Gestión de Interrupciones y DMA:</strong> El Acceso Directo a Memoria (DMA) permite que los dispositivos de E/S envíen o reciban datos directamente hacia/desde la memoria principal sin intervención constante de la CPU, utilizando interrupciones solo al finalizar la transferencia[cite: 2].</li>
            </ul>
        </div>

        <div class="card">
            <h2>Casos Prácticos y Ejemplos</h2>
            
            <h3>Mapeo de la Estructura Jerárquica en Linux</h3>
            <!-- Asegúrate de subir la imagen a la carpeta img/ -->
            <img src="assets/img/jerarquia_linux.png" alt="Jerarquía del sistema de archivos Linux" style="max-width: 100%; border: 1px solid #ddd;">
            <p>El sistema de archivos de Linux sigue una estructura de árbol invertido partiendo de la raíz (<code>/</code>)[cite: 2]. A continuación, los directorios principales requeridos:</p>
            <ul>
                <li><strong>/etc:</strong> Contiene los archivos de configuración del sistema y de los servicios, específicos de la máquina anfitriona[cite: 2].</li>
                <li><strong>/var:</strong> Almacena archivos de datos variables que crecen durante la operación del sistema, como registros (logs), colas de impresión y bases de datos[cite: 2].</li>
                <li><strong>/proc:</strong> Sistema de archivos virtual que provee un mecanismo para que el kernel envíe información sobre los procesos (PID) y el estado del sistema en tiempo real[cite: 2].</li>
                <li><strong>/dev:</strong> Contiene archivos especiales (nodos de dispositivo) que representan los dispositivos físicos o lógicos conectados al sistema, como discos duros o terminales[cite: 2].</li>
            </ul>
        </div>
    </main>

</body>
</html>