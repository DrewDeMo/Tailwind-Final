module.exports = {
  darkMode: 'media',
  content: ['./dist/**/*.{css,php,html,js}'],
  options: {
    safelist: [/data-theme$/],
  },
  theme: {
    extend: {
      fontFamily: {
        'inter': ['Inter', 'sans'], // 'sans' here is a generic sans-serif fallback
      },
      colors: {
      },
    },
    plugins: [
      require('flowbite/plugin')
    ],
  },
};
