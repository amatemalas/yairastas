# Changelog

Todos los cambios importantes de este proyecto quedarán definidos en este fichero.

Formato basado en [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
y Semver [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v1.3.0] - 10/03/2023
- Corrección problema crítico en condiciones de borrado de páginas existentes para el modelo personalizado de PageExtension

## [v1.2.0] - 10/11/2022
- Implementación preview de tipo de bloque
- Añadido tipo de bloque a listado de bloques
- Añadido preview de tipo de bloque a listado de tipos de bloque
- Implementación permisos para editar, crear y eliminar tipos de bloque

## [v1.1.3] - 04/11/2022
- Corrección migraciones builder
- Corrección código dando errores si no existe la tabla pages
- Quitar rule sort order modelo bloque
- Añadir campo features repeater por defecto

## [v1.1.1] - 04/11/2022
- Corrección método de crear archivos por tipo de bloque desactivado por error
- Correcciones nombre de columnas de relación página erróneos
- Corrección de posible error de duplicado de bloques, tipos o páginas
- Tratamiento para cambio de información de página dependiendo del nombre de archivo en lugar del id al no ser funcional
- Tratamiento de limpieza de páginas borradas del tema

## [v1.1.0] - 27/05/2022
- Implementación modelo Page personalizado partiendo de la clase interna del core
- Implementación campo pivot de ordenación de bloques por página
- Desactivación funcionalidad de editor de código para tipos por problemas de contenido disparejo
- Cambio estructura componente PageBlocksDetail para implementar funcionalidad de ordenación por página

## [v1.0.0] - 18/02/2022
- First Release

## [v0.5.0] - 27/01/2022
- Implementación campo de edición de código en tipos para editar plantillas desde la UI
- Corrección campo features repeater no traducible

## [v0.4.4] - 11/01/2022
- Corrección campos visibles no corresponden al tipo al crear uno nuevo
- Corrección añadido campo galería a fields.yaml por defecto para que sea visible
- Corrección método de búsqueda de campo visible por fallos con el campo feature de tipo repeater
- Optimización método de búsqueda de campo visible

## [v0.4.3] - 23/12/2021
- Añadido campo tipo repeater para la base del plugin
- Corrección errores guardado de nuevo campo repeater
- Corrección error campos visibles vacío al crear un tipo sin ningún bloque creado

## [v0.4.2] - 22/12/2021
- Corrección algunos campos siguen siendo visibles al cambiar de tipo

## [v0.4.1] - 22/12/2021
- Corrección método de campos visibles mediante dependencia a campo type

## [v0.4] - 17/12/2021
- Implementación visibilidad de campos de formulario de bloque de manera dinámica seleccionable por el usuario en formulario de tipos de bloque.
- Corrección de filtro de backend para bloques pertenecientes a múltiples páginas.
- Corrección menú lateral plugin escondido debido al cambio de nombre del autor del plugin.
- Añadida constraint de FK en base de datos para el campo type_id

## [v0.3] - 18/11/2021
- Implementación posibilidad de enlazar bloques a múltiples páginas
- Ajuste filtro página backend para buscar solo bloques por una única página

## [v0.2] - 17/11/2021
- Traducciones del plugin
- Preparación plugin para instalaciones externas desde comando
- Filtro de página para listado de bloques backend

## [v0.1] - 17/11/2021
- Subida de plugin
- Creación documentación README.md

