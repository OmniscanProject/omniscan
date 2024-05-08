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
            container: {
                padding: {
                    sm: '5rem'
                },
            },
            extend: {},
            colors: {
                primary: 'var(--color-primary)',
                secondary: 'var(--color-secondary)'
            }
    },
    plugins: [
    require('flowbite/plugin')
    ],
    }

