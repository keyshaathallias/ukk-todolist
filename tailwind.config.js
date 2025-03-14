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
        'yellow': '#FFBB59',
        'light-yellow': '#FFE9E1',
        'green': '#789F40',
        'light-green': '#F9FAF5',
        'forest-green': '#3E7024',
        'dark-green': '#1B320F',
        'dark-purple': '#9E5598FF',
        'purple': '#E1BDDE',
        'light-purple': '#EFD7ED',
        'light-blue': '#D6EFF9',
        'red': '#C72C1EFF',
        'pink': '#FF9C9C',
        'gray': '#828282',
        'light-gray': '#DDDDDD',
      },
      fontFamily: {
        'lato-regular': ['Lato-Regular', 'sans-serif'],
        'lato-bold': ['Lato-Bold', 'sans-serif'],
        'sora': ['Sora', 'sans-serif'],
      },
    },
  },
  plugins: [],
}