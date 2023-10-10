module.exports = {
  darkMode: 'media',
  content: ['./dist/**/*.{css,php,html,js}'],
  options: {
    safelist: [
      // ... (same as your provided list)
    ],
  },
  theme: {
    extend: {
      colors: {
        'rwu-theme': {
          '50': '#FEF6FA',
          '100': '#F9D7E8',
          '200': '#F199BA',
          '300': '#E85A83',
          '400': '#DC1F44',
          '500': '#9D1624',
          '600': '#791112',
          '700': '#55120C',
          '800': '#320E07',
          '900': '#0E0502',
          '950': '#f3f4f6',
        },
        'rwu-theme-2': {
          '50': '#ECEFFE',
          '100': '#C0CCFC',
          '200': '#6887F9',
          '300': '#0F43F5',
          '400': '#072CA2',
          '500': '#03154A',
          '600': '#02123B',
          '700': '#020E2D',
          '800': '#010A1E',
          '900': '#01050F',
          '950': '#000308',
        },
        'ww-blue': {
          '50': '#D2DAFA',
          '100': '#B6C4F7',
          '200': '#7F9AF0',
          '300': '#4872EA',
          '400': '#194FDC',
          '500': '#133EA5',
          '600': '#10368A',
          '700': '#0D2D6E',
          '800': '#0A2353',
          '900': '#ffffff', // Ensure this is intentional, as it's white for a typically dark variant.
          '950': '#05132A',
        },
        'ww-blue-2': {
          // ... (same as your provided list)
        },
      },
    },
    plugins: [
      require('flowbite/plugin')
    ],
  },
};
