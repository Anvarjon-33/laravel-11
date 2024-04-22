/** @type {import('tailwindcss').Config} */
export default {
    content: [
        '*/**/*.blade.php', '*/**/*.html', '*/**/*.js',
    ],
    theme: {
        extend: {
            keyframes: {
                'message-in': {
                    '0%': {
                        position:'absolute', transform: 'translateX(-50%)'
                    },
                    '100%': {
                        opacity: 1, position: 'static'
                    }
                },
                'message-out': {
                    '0%': {
                        position:'absolute',opacity:1
                    },
                    '50%': {
                        opacity: 0.7
                    },
                    '100%':{
                        transform: 'translateX(50%)', opacity:0,
                    }
                },
            },
            animation: {
                'message--in': 'message-in 0.5s ease-in',
                'message--out': 'message-out 0.7s ease-out',
                'spin-slow': 'spin 4s linear infinite',
            }
        },
    },
    safelist: ['animation-*'],
    plugins: [
        require('daisyui')
    ],
}

