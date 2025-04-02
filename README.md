# Nazarene Backend Package

Este paquete proporciona modelos, migraciones y seeders para una estructura eclesiástica de la Iglesia del Nazareno.

## Requisitos

- PHP >= 8.1
- Laravel >= 10.0

## Instalación

1. Agrega el repositorio a tu `composer.json`:

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "packages/nazarene"
        }
    ]
}
```

2. Requiere el paquete:

```bash
composer require nazarene/backend
```

3. Publica los recursos:

```bash
php artisan vendor:publish --tag=nazarene-migrations
php artisan vendor:publish --tag=nazarene-seeders
php artisan vendor:publish --tag=nazarene-factories
php artisan vendor:publish --tag=nazarene-config
```

4. Instala las migraciones y seeders:

```bash
php artisan nazarene:install --seed
```

## Uso

El paquete proporciona los siguientes modelos:

- `Nazarene\Backend\Models\Area`
- `Nazarene\Backend\Models\Church`
- `Nazarene\Backend\Models\Country`
- `Nazarene\Backend\Models\District`
- `Nazarene\Backend\Models\Member`
- `Nazarene\Backend\Models\Ministry`
- `Nazarene\Backend\Models\Region`

Puedes acceder a ellos a través de sus respectivas clases o usando el contenedor de servicios:

```php
use Nazarene\Backend\Models\Church;

// Usando la clase directamente
$church = Church::find(1);

// O usando el contenedor de servicios
$church = app('nazarene.church')->find(1);
```

## Estructura de la Base de Datos

El paquete crea las siguientes tablas:

- `areas`
- `churches`
- `countries`
- `districts`
- `members`
- `ministries`
- `regions`

## Licencia

Este paquete está licenciado bajo la Licencia MIT. 