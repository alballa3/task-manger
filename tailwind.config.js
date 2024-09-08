/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',

  ],
  theme: {
    extend: {
        width: {
            "60-v": "60vh",
            "40-v":"50vh"
        },
        fontFamily:{
            "main-font":"Poppins",
        },
        height:{
            "60-v": "60vh",
            "40-v":"50vh",
            "80-v":"80vh",
            "90-v":"90vh",
        }
    },
  },
  plugins: [
      require('preline/plugin'),
      require('@tailwindcss/forms')
  ],

}

