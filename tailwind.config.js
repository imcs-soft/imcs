import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'false',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary-red': '#FF5656',
                'light-gray': '#EDF2F6',
                'accent-blue': '#6A7EFC',
                'dark-gray': '#494953',
                // Puedes añadir una variante para hover si lo deseas, o usar rgba directamente
                'dark-gray-light': 'rgba(73, 73, 83, 0.7)', // Un ejemplo para el hover en el responsive menu
            },
        },
    },

    plugins: [
        require('preline/plugin'),
        forms,
        require('flowbite/plugin'),
    ],
};
