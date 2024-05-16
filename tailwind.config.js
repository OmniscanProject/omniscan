/**
 * @type {import('tailwindcss').Config} 
 */


export default {
    content: [
        './src/**/*.{html,js}',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.ts',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
        ],
        theme: {
            container: {
                padding: {
                    sm: '5rem'
                },
            },
            extend: {
                boxShadow: {
                    button: '10px 10px 0px 0px black',
                    container: '20px 20px 0px 0px black'
                },
                fontSize: {
                    '4xl': ['2.25rem', '3rem']
                },
            },
            colors: {
                primary: 'var(--color-primary)',
                secondary: 'var(--color-secondary)',
                tertiary: 'var(--color-tertiary)',
                quaternary: 'var(--color-quaternary)'
            }
    },
    plugins: [
        require('flowbite/plugin')
    ],
    }

