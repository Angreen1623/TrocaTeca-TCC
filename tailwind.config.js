/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        emerald: colors.emerald,
        indigo: colors.indigo,
        yellow: colors.yellow,

        backgtt: {
          DEFAULT: '#FFFAF4', // creme do background do site
        },
        bluett: { 
          DEFAULT: '#C0D3F7', //azul de tudo
        },
        graytt: {
          light: '#A6A6A6', // cinza das sombra dos itens do site
          DEFAULT: '#8B8989', // cinza dos textos das labels (interno) 
          dark: '#847D88', // cinza da sombra dso títulos brancos
        },
        greentt: {
          light: '#C1FBC1', // verde do footer e da tela inicial
          DEFAULT: '#7EF07E', // verde do botão ñ clicado
          dark: '#00BF63', // verde do botão clicado
        },
        pinktt: {
          light: '#FFD6E0', // rosa das mensagens do chat
          DEFAULT: '#FF95AF', // rosa dos botão ñ clicado
          dark: '#FF688D', //rosa dos botão clicado
        },
        redtt: {
          DEFAULT: '#FF3131', // vermelho dos botão ñ clicado
          dark: '#DB1818', //vermelho dos botão clicado
        },
        yellowtt: {
          light: '#FFFB94', //amarelo da conta do perfil dos usuários
          default: '#FFF500', //amarelo do identificador de proposta em andamento
        },
      },
      fontFamily: { //fontes do site
        'fredokatt': ['Fredoka', 'sans-serif'],
        'poppinstt': ['Poppins', 'sans-serif'],
      },
      keyframes: {
        'rotate-left-right': {
          '0%, 100%': { transform: 'rotate(0deg)' },
          '50%': { transform: 'rotate(-8deg)' },
          '25%, 75%': { transform: 'rotate(8deg)' }
        },
        'rotate-360': {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
      },
      animation: {
        'rotate-left-right': 'rotate-left-right 5s ease-in-out infinite',
        'rotate-360': 'rotate-360 16s linear infinite',
      },
    },
  },
  plugins: [],
}