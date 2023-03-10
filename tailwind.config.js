const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        fontFamily: {
          'sans': ['ui-sans-serif', 'system-ui'],
          'serif': ['ui-serif', 'Georgia'],
          'mono': ['ui-monospace', 'SFMono-Regular'],
          'display': ['Oswald'],
          'body': ['"Playfair"'],
        }
      },
    plugins: [require('@tailwindcss/forms')],
};
