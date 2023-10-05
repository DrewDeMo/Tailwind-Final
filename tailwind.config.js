module.exports = {
  darkMode: 'media',
  content: ['./dist/**/*.{php,js}'],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      // other theme extensions go here
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}
