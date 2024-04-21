/** @type {import('tailwindcss').Config} */
export default {
  content: [
      '*/**/*.blade.php', '*/**/*.html', '*/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('daisyui')
  ],
}

