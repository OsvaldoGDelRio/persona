# persona
Clase en PHP para crear el Objeto/Clase persona que utiliza los atributos:

- Nombre completo
-    -Nombres
-    -Primer Apellido
-    -Segundo Apellido
- Fecha de nacimiento
- Sexo

---------------------------------------------------------------------------
- Uso:

- <?php
- declare(strict_types=1);
- require_once __DIR__ . '/vendor/autoload.php';

- use src\CrearPersona;

- $persona = new CrearPersona;

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

---------------------------------------------------------------------------

Se puede obtener de forma separada cada elemento del nombre:

echo $Juan->nombres().'<br>';
echo $Juan->primerApellido().'<br>';
echo $Juan->segundoApellido();

/*
Juan
Lopez
Perez
*/
