const mix = require('laravel-mix');

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'resources/assets/css/template.css'
],'public/assets/template.css');

mix.js([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/popper.js/dist/popper.js',
	'node_modules/bootstrap/dist/js/bootstrap.js',
], 'public/assets/template.js');