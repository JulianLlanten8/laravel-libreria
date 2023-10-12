## Prueba de instalacion de bootstrap en laravel

## Paso:

-   Creacion del proyecto laravel new proyect-name
-   instalar bootstrap

```bash
cd proyect-name

npm i bootstrap sass 

```

-   open file resources\js\app.js

paste

```bash
import "./bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min";

// import sass desde node_modules
import "sass";
```
