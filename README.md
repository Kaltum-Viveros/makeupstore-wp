# MakeupStore WP

Tienda en línea de maquillaje desarrollada en WordPress como parte de la práctica de clase.

## Tema elegido
Para el proyecto se seleccionó el dominio temático de una tienda de cosméticos y productos de belleza, tema ideal para mostrar una variedad de productos con distintos atributos, lo cual resulta ideal para demostrar las funcionalidades de categorización, atributos de producto y variaciones que ofrece WooCommerce.
- **Astra**: Tema ligero y flexible, ideal para eCommerce.
- Constructor visual utilizado: **Elementor**.
- Plugin de eCommerce: **WooCommerce**.

## Descripción general del proyecto

Este proyecto consiste en el desarrollo de una tienda virtual funcional utilizando WordPress. Se agregaron productos de gama alta, categorías, estructura de navegación, diseño visual con Elementor y configuración básica de WooCommerce. La práctica tiene como propósito comprender cómo montar y personalizar una tienda desde cero en entorno local.

## Estructura del repositorio

- `/app/public/` → Contiene el core de WordPress con carpetas `wp-admin`, `wp-content`, `wp-includes`.
- `/conf/sql/local.sql` → Exportación de la base de datos del sitio.
- `/logs/` → Archivos de registro locales.

## Cómo ejecutar el sitio en local

1. Clona este repositorio en tu equipo:
   ```bash
   git clone https://github.com/Kaltum-Viveros/makeupstore-wp.git
   ```

2. Abre LocalWP (o XAMPP/MAMP) y configura un nuevo sitio:
   - Sitio personalizado → "makeupstore"
   - PHP, MySQL y Apache configurados por defecto

3. Copia el contenido de `app/public/` dentro de la carpeta correspondiente al nuevo sitio.

4. Importa la base de datos:
   - Usa phpMyAdmin o Adminer
   - Crea una base de datos con el mismo nombre que aparece en `wp-config.php` , en este repositorio se llama `local`
   - Importa el archivo `local.sql` desde `/conf/sql/`

5. Asegúrate de que el archivo `wp-config.php` tenga los datos de conexión correctos:
   ```php
   define( 'DB_NAME', 'nombre_de_la_bd' );
   define( 'DB_USER', 'root' );
   define( 'DB_PASSWORD', '' );
   define( 'DB_HOST', 'localhost' );
   ```

6. Puedes acceder desde `http://localhost/makeupstore` o desde LocalWP directamente.
