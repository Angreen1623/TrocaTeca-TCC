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
      // Cores do Tailwind CSS
      transparent: 'transparent',
      current: 'currentColor',
      white: colors.white,
      black: colors.black,
      gray: colors.gray,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,

      // Cores personalizadas
      backgtt: {
        DEFAULT: '#FFFAF4', // creme do background do site
      },
      bluett: {
        DEFAULT: '#C0D3F7', // azul de tudo
      },
      graytt: {
        light: '#A6A6A6', // cinza das sombra dos itens do site
        DEFAULT: '#8B8989', // cinza dos textos das labels (interno)
        dark: '#847D88', // cinza da sombra dos títulos brancos
      },
      greentt: {
        light: '#C1FBC1', // verde do footer e da tela inicial
        DEFAULT: '#7EF07E', // verde do botão não clicado
        dark: '#00BF63', // verde do botão clicado
      },
      pinktt: {
        light: '#FFD6E0', // rosa das mensagens do chat
        DEFAULT: '#FF95AF', // rosa dos botão não clicado
        dark: '#FF688D', // rosa dos botão clicado
      },
      redtt: {
        DEFAULT: '#FF3131', // vermelho dos botão não clicado
        dark: '#DB1818', // vermelho dos botão clicado
      },
      yellowtt: {
        light: '#FFFB94', // amarelo da conta do perfil dos usuários
        DEFAULT: '#FFF500', // amarelo do identificador de proposta em andamento
      }
    },
    fontFamily: {
      'fredokatt': ['Fredoka', 'sans-serif'],
      'poppinstt': ['Poppins', 'sans-serif'],
    },
  },
  plugins: [],
}

