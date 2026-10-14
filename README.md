# Caso Práctico Aplicado: SysOS - KernelTech Solutions

Este repositorio contiene el código fuente y el manual de despliegue para el Portal Educativo y Dashboard de Monitoreo "SysOS", desplegado sobre Ubuntu Server 26.04 LTS con Apache2.

## Arquitectura del Proyecto
- **SO Anfitrión:** Ubuntu Server 26.04 LTS
- **Servidor Web:** Apache HTTP Server (apache2)
- **Backend:** PHP 8.x (libapache2-mod-php)
- **Dominio Local:** `sysos.local`

## Guía de Despliegue Paso a Paso (CLI)

A continuación, se detallan los comandos ejecutados en el servidor para el aprovisionamiento de la infraestructura:

### 1. Instalación de Servicios Base
Actualización del sistema e instalación de Apache y PHP:
```bash
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 php libapache2-mod-php -y
```

### 2. Estructura de Directorios y Permisos
Creación de la raíz del proyecto y asignación de propietario `www-data`:
```bash
sudo mkdir -p /var/www/sysos_portal
sudo chown -R www-data:www-data /var/www/sysos_portal
sudo chmod -R 755 /var/www/sysos_portal
```
*(Nota: Después de este paso, se clonó este repositorio dentro de `/var/www/sysos_portal`)*

### 3. Configuración del Virtual Host
Se creó el archivo de configuración en `/etc/apache2/sites-available/sysos_portal.conf` con las siguientes directivas:
```apache
<VirtualHost *:80>
    ServerName sysos.local
    DocumentRoot /var/www/sysos_portal
    <Directory /var/www/sysos_portal>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### 4. Habilitación del Sitio y Firewall
Se habilitó el nuevo sitio, se deshabilitó el default, y se aplicaron reglas de seguridad perimetral:
```bash
sudo a2ensite sysos_portal.conf
sudo a2dissite 000-default.conf
sudo systemctl reload apache2
sudo ufw allow 'Apache'
sudo ufw enable
```

### 5. Resolución DNS Local
Se mapeó el dominio en el archivo hosts del servidor/cliente:
```bash
echo "127.0.0.1 sysos.local" | sudo tee -a /etc/hosts
```

## Verificación de Estado
Para comprobar que el dashboard interactúa correctamente con el Kernel, visite `http://sysos.local` en su navegador. El módulo PHP ejecutará funciones `shell_exec()` para extraer métricas de `uptime`, `free`, `df` y `ps`.