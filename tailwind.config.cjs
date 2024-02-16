/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        black: '#222222',
        gray: 'rgba(34, 34, 34, 0.7)',
        features: '#251b9e',
        documentary: '#f7b14a',
        pilot: '#f39a8e',
        unscripted: '#b295ce',
        scripted: '#85cbda',
        studio: '#8AD8C0',
        other: '#9cb7eb',
        uncategorized: '#7a8793',
      }, // Extend Tailwind's default colors
      fontFamily: {
        'sf-pro': ['SF Pro Display Regular, sans-serif'],
        'sf-bold': ['SF Pro Display Bold, sans-serif'],
        'sf-medium': ['SF Pro Display Medium, sans-serif'],
        'bran-reg': ['Brandon Grotesque Regular, sans-serif'],
        'bran-thin': ['Brandon Grotesque Thin, sans-serif'],
        'bran-med': ['Brandon Grotesque Medium, sans-serif'],
        'bran-light': ['Brandon Grotesque Light, sans-serif'],
        'bran-bold': ['Brandon Grotesque Bold, sans-serif'],
        'bran-black': ['Brandon Grotesque Black, sans-serif'],
        'u-black': ['utendoblack, sans-serif'],
        'u-bold': ['utendobold, sans-serif'],
        'u-extra-black': ['utendoextra_black, sans-serif'],
        'u-extra-bold': ['utendoextra_bold, sans-serif'],
        'u-extra-light': ['utendoextra_light, sans-serif'],
        'u-reg': ['utendo, sans-serif'],
        'u-hair': ['utendohairline, sans-serif'],
        'u-medium': ['utendomedium, sans-serif'],
        'u-regular': ['utendoregular, sans-serif'],
        'u-semibold': ['utendosemibold, sans-serif'],
        'u-thin': ['utendothin, sans-serif'],
        'u-xtrablack': ['utendoextra_black, sans-serif'],
        'cardo-bold': ['cardobold'],
        cardo: ['cardoregular'],
        'effra-medium': ['effra_trialmedium'],
        effra: ['effra_trialregular'],
        inter: ['interregular'],
      },
      screens: {
        tab: '768px',
        land: '1024px',
        lap: '1280px',
        desk: '1440px',
        wide: '1920px',
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.gray'),
            fontFamily: theme('fontFamily.inter'),
            'h1, h2, h3, h4': {
              color: theme('colors.black'),
              fontWeight: 'bold',
              fontFamily: theme('fontFamily.sf-bold'),
            },
          },
        },
      }),
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
