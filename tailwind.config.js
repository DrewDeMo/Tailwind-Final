module.exports = {
  darkMode: 'media',
  content: ['./dist/**/*.{css,php,html,js}'],
  options: {
    safelist: [/data-theme$/],
  },
  theme: {
    extend: {
      colors: {
      },
    },
    plugins: [
      require('flowbite/plugin')
    ],
  },
};
