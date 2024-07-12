/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      //tailwind colors//
      transparent: 'transparent',
      current: 'currentColor',
      //importação de cores próprias//
      greentt: {
        light: '#C1FBC1', // Valor hex válido
        DEFAULT: '#7EF07E', // Valor hex válido
        dark: '#00BF63',
      }
    }
  },
  plugins: [],
}


