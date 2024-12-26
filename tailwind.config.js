/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./login/**/*.{php,js}",
  ],
  theme: {
    extend: {
      screens: {
        'custom-screen': {'max': '994px'},
        'custom-screen-ml': {'max': '664px'},
        
      },
    },
  },
  plugins: [],
}
