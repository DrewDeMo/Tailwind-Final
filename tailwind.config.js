// tailwind.config.js
module.exports = {
  darkMode: false,
  mode: 'light',
  content: ["./dist/*{.php,.js}"],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      // other theme extensions go here
    },
  },
  plugins: [],
}
