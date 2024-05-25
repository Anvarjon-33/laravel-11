// @ts-ignore
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                refine: {
                    "33%": {
                        marginLeft: "10px",
                    },
                    "66%": {
                        marginRight: "10px",
                    },
                },
            },
            animation: {
                "freq-bounce": "refine 0.2s 2"
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('daisyui')
    ],
    safelist: [
        {pattern: /badge-./},
        {pattern: /text-./},
    ]
};
