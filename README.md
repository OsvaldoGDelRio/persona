[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/persona/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/persona/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/persona/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/persona/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/persona/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

# persona
Clase en PHP para crear el Objeto/Clase persona que utiliza los atributos:

Nombre completo\
    -Nombres\
    -Primer Apellido\
    -Segundo Apellido\
Fecha de nacimiento\
Sexo\

Esta clase permite crear un objeto que persiste con los datos que contenga en sus atributos hasta que es destruido al utilizar el "setter" en el mismo constructor llamando a una función privada y no poder ser llamado de forma publica. Al último queda una clase con la cual se llama a cada atributo y se obtiene de forma inequivoca el mismo con el que se creó.  

## composer

```shell
composer require osvaldogdelrio/persona
```


---------------------------------------------------------------------------
## Uso por medio de Factory:

[factory](https://github.com/OsvaldoGDelRio/factory)

```php
<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use src\CrearPersona;

$persona = new CrearPersona;

$Juan = $persona->crear(array(
    'nombres' => 'Juan',
    'primerApellido' => 'Lopez',
    'segundoApellido' => 'Perez',
    'fechaDeNacimiento' => '30-07-1982',
    'sexo' => 'Hombre'
));

echo $Juan->nombreCompleto().'<br>';
echo $Juan->Sexo().'<br>';
echo $Juan->fechaDeNacimiento();

/*
Juan Lopez Perez
Hombre
30-07-1982
*/
```

Se puede obtener de forma separada cada elemento del nombre:

```php
echo $Juan->nombres().'<br>';
echo $Juan->primerApellido().'<br>';
echo $Juan->segundoApellido();

/*
Juan
Lopez
Perez
*/
```
---------------------------------------------------
También se pude usar sin la libreria de factory construyendo la clase Persona e inyectando el resto