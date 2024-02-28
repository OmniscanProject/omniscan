/**
 * @type {import('tailwindcss').Config} 
 */
export default {
    content: [
        './src/**/*.{html,js}',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
        ],
        theme: {
            extend: {},
            colors: {
                // transparent: 'transparent',
                primary: 'var(--color-primary)',
                secondary: 'var(--color-secondary)',
                // current: 'currentColor',
                // 'primary': '#565584',
                // 'secondary': '#565584',
                // 'white': '#ffffff',
                // 'black': '#000000',
            }
    },
    plugins: [
    require('flowbite/plugin')
    ],
    }

