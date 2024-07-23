/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter'],
      },
      colors: {
        'primary': '#0075E6',
        'primary-contrast': '#FFFFFF',
        'primary-hover': '#0069D9',
        'primary-focus': '#0052B4',
        'primary-active': '#00468C',
        'primary-selected': '#003B73',
        'primary-light': '#D7E6FF',
        'primary-dark': '#002D62',
        'danger': '#FF0000',
        'danger-contrast': '#FFFFFF',
        'danger-hover': '#D90000',
        'danger-focus': '#B40000',
        'danger-active': '#8C0000',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

