// @ts-ignore
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        /*
        {
            raw: (async () => {
                let res: AxiosResponse;
                res = await axios.get('http://192.168.1.6:8000/post_view')
                console.log(res.data)
                return `${res.data}`
            })(),
        }
        */
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require('daisyui')],
};
