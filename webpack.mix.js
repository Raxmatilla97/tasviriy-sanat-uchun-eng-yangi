const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')

   .sass('resources/sass/app.scss', 'public/css');

   const CKEditorWebpackPlugin = require( '@ckeditor/ckeditor5-dev-webpack-plugin' );

// Define webpack plugins ...
	plugins: [
		new CKEditorWebpackPlugin( {
			// Main language that will be built into the main bundle.
			language: 'en',

			// Additional languages that will be emitted to the `outputDirectory`.
			// This option can be set to an array of language codes or `'all'` to build all found languages.
			// The bundle is optimized for one language when this option is omitted.
			additionalLanguages: 'all',

			// Optional directory for emitted translations. Relative to the webpack's output.
			// Defaults to `'translations'`.
			// outputDirectory: 'ckeditor5-translations',

			// Whether the build process should fail if an error occurs.
			// Defaults to `false`.
			// strict: true,

			// Whether to log all warnings to the console.
			// Defaults to `false`.
			// verbose: true
		} ),

		// Other webpack plugins...
	]
