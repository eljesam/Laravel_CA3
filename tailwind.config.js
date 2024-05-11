const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    colors:{
      primary: '#373b2f',
      secondary: '#5a624c',
      accent: '#433e4d',
      black: colors.black,  
      white: colors.white,
      },
    extend: {
      fontFamily: {
        'sans': 'century-gothic, sans-serif'
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
