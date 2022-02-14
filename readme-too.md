# Usar Tailwind con Laravel

## Engadir Tailwind a Laravel

```bash
npm install -D tailwindcss postcss autoprefixer    // instalar tailwind e as súas dependencias
npx tailwindcss init     // crea o arquivo de configuración: tailwind.config.js
```
- autoprefixer Complemento PostCSS para analizar CSS e engadir prefixos de provedores ás regras CSS mediante valores de [Can I Use](https://caniuse.com/).
- [postcss](https://github.com/postcss/postcss) Transforma estilos con plugins JS. https://www.npmjs.com/package/postcss

No arquivo ``webpack.mix.js``, engadir tailwindcss coma un plugin PostCSS.

```php
mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);
```

Engadir as rutas a tódolos arquivos do modelo -template- no arquivo ``tailwind.config.js``.

```js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

Engadilas directivas @tailwind para cada unha das capas Tailwind no arquivo ``./resources/css/app.css``.

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Executar o proceso de construción

```npm run watch```

Asegúrate de que o teu CSS compilado estea incluído na <head> e, a continuación, comeza a usar as clases de utilidade de Tailwind para estilizar o teu contido.

```php
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>
```
Para xestionar automaticamente os prefixos de provedores no teu CSS, debes usar Autoprefixer (que se instalou xunto a tailwind e postcss).

Tamén poden interesar as importacións en tempo de construción
Unha das funcións máis útiles que ofrecen os preprocesadores é a posibilidade de organizar o teu CSS en varios arquivos e combinalos no momento da compilación procesando con antelación declaracións @import, en lugar de facelo no navegador.

O complemento canónico para xestionar isto con PostCSS é ``postcss-import`` .

Para usalo, instala o complemento dende a consola con npm, e coa marca ``-D`` para sumala ás ferramentas de desenvolvemento:

```npm install -D postcss-import```

Engádeo coma o primeiro complemento na túa configuración PostCSS:

```js
// postcss.config.js
module.exports = {
  plugins: [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
  ]
}
´´´
:eye: ``postcss-import`` cumpre estrictamente coa especificación CSS e non permite declaracións ``@import`` en calquera lugar, excepto na parte superior dun arquivo.
Asemade deste hai outros complementos que podes usar con postcss coma o complemento de aniñación [``nesting``](https://github.com/postcss/postcss-nested)

Como se instalou Tailwind coma un complemento PostCSS, se soe engadir ``cssnano`` ao final da lista de complementos para minificar os resultados. :eye: Aínda que ao usar un framework, a miúdo, nin sequera necesitas configuralo xa que o minificado se xestiona en produción automaticamente.

~~```js
// postcss.config.js
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
    ...(process.env.NODE_ENV === 'production' ? { cssnano: {} } : {})
  }
}
```~~

#### Instalar nightwind
 https://github.com/jjranalli/nightwind

 ```js
 // tailwind.config.js - Tailwind ^2.0
module.exports = {
  darkMode: "class",
  // ...
  plugins: [require("nightwind")],
}```

## :warning:
try:
npm cache clean --force
rm -rf node_modules
npm install
npm run dev
npm run watch



## Editor Setup
Plugins e opcións de configuracion que poden mellorar a experiencia de desenvolvemento cando traballas con Tailwind CSS.

- [PostCSS Language Support](https://marketplace.visualstudio.com/items?itemName=csstools.postcss)
- [Tailwind CSS IntelliSense](https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss)


_ref.:  https://tailwindcss.com/docs/guides/laravel
        https://tailwindcss.com/docs/using-with-preprocessors#vendor-prefixes


## BBDD
## ``php artisan migrate``

Para crear unha nova táboa da bbdd que imos consumir coa nosa aplicación Laravel recorre ao comando ``make`` 

``php artisan make:migration create_posts_table``

Persoaliza a nova migración que atopara en /database/migrations/

```php
//...
  public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }
//...
```

```php artisan migrate``` para crear a nova táboa na bbdd.

Feito isto necesitaremos un modelo elocuente que responda ao uso dos datos gardados baixo a sús denominación.

Crear agora o modelo ``Post``

```php artisan make:model Post```


Con ```php artisan tinker``` temos acceso a un acceso completo aos recursos e activos da aplicación.(cap20)

Tinker é unha consola de comandos coa que pódese interactuar con todas as clases e métodos da aplicación; moi útil á hora de realizar probas de funcionamento. (https://styde.net/tinker-consola-de-comandos-en-laravel/)

```bash
php artisan tinker
Psy Shell v0.11.1 (PHP 7.4.27 — cli) by Justin Hileman
>>> use App\Models\Post;
>>> Post::create([
    'title' => 'Meu primeiro artigo',
    'excerpt' => 'Meu primeiro artigo',
    'body' => 'Meu primeiro artigo',
    'slug' => 'primeiro-artigo',
    'category_id' => '1',
])
```
