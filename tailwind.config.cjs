/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      screens: {
        tab: '768px',
        land: '1024px',
        lap: '1280px',
        desk: '1440px',
        wide: '1920px',
      },
    },
  },

  plugins: [
    require('daisyui'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],

  daisyui: {
    themes: false,
  },
};

module.exports = config;
