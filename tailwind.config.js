module.exports = {
  darkMode: 'media',
  content: ['./dist/**/*.{css,php,html,js}'],
  options: {
    safelist: [
      'rwu-red-50', 'rwu-red-100', 'rwu-red-200', 'rwu-red-300', 'rwu-red-400', 'rwu-red-500', 'rwu-red-600', 'rwu-red-700', 'rwu-red-800', 'rwu-red-900', 'rwu-red-950',
      'rwu-blue-50', 'rwu-blue-100', 'rwu-blue-200', 'rwu-blue-300', 'rwu-blue-400', 'rwu-blue-500', 'rwu-blue-600', 'rwu-blue-700', 'rwu-blue-800', 'rwu-blue-900', 'rwu-blue-950',
      'ww-blue-50', 'ww-blue-100', 'ww-blue-200', 'ww-blue-300', 'ww-blue-400', 'ww-blue-500', 'ww-blue-600', 'ww-blue-700', 'ww-blue-800', 'ww-blue-900', 'ww-blue-950',
      'ww-navy-50', 'ww-navy-100', 'ww-navy-200', 'ww-navy-300', 'ww-navy-400', 'ww-navy-500', 'ww-navy-600', 'ww-navy-700', 'ww-navy-800', 'ww-navy-900', 'ww-navy-950',
    ],
  },
  theme: {
    extend: {
      colors: {
        'rwu-theme': {
          '50': '#93a8e7',
          '100': '#4c65ad',
          '200': '#203982',
          '300': '#132a6c',
          '400': '#03154a',
          '500': '#9d1624',
          '600': '#840d1a',
          '700': '#61060f',
          '800': '#0a1a42',
          '900': '#111827',
          '950': '#f3f4f6',
        },
        'ww-blue': {
          '50': '#b2e9f8',
          '100': '#77ddf9',
          '200': '#4eccee',
          '300': '#00A6D3',
          '400': '#234caf',
          '500': '#133ea5',
          '600': '#0a3291',
          '700': '#05297f',
          '800': '#0a1a42',
          '900': '#f8fafc',
          '950': '#1d243b',
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
