/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        customHoverColor: '#5986BD', // Thay mã màu bằng mã màu của bạn
        colorBtn: '#1D2C3F',
        colorbg: '#FBFBFB',
        colorText: '#444444',
        border: '#FBFBFB',
      },
      fontFamily: {
        barlow: ['Barlow Condensed', 'sans-serif'],
      },
      text: {

      },
    
    },
  },
  plugins: [],
}

