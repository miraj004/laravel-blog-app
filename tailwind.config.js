/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
    ],
    theme: {
        extend: {
            darkMode: 'class',
            colors :{
                primary: {
                    100: '#0078D7',
                    200: '#0063B1',
                    300: '#005097'
                },
                secondary: {
                    100: '#E2E2D5',
                    200: '#888883'
                }
            },
            fontFamily: {
                default: 'Roboto'
            }
        },
    },
    plugins: [require('@tailwindcss/line-clamp')],
}
