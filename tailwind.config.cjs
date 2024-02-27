/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        black: '#222222',
        gray: '#83838e',
        'light-gray': '#e5e5e5',
        'medium-gray': '#dfdfdf',
        link: '#bbc4d2',
        'link-dark': '#56616a',
        features: '#251b9e',
        documentary: '#f7b14a',
        pilot: '#f39a8e',
        unscripted: '#b295ce',
        scripted: '#85cbda',
        studio: '#8AD8C0',
        other: '#9cb7eb',
        uncategorized: '#7a8793',
        error: '#eb7e7f',
      },
      boxShadow: {
        'shadow-card':
          '0 2px 4px -2px rgba(17, 24, 39, .05), 0 4px 8px -2px rgba(17, 24, 39, .07)',
      },
      fontFamily: {
        eina: ['eina, sans-serif'],
        'eina-light': ['eina-light, sans-serif'],
        'eina-semi': ['eina-semi, sans-serif'],
        'eina-bold': ['eina-bold, sans-serif'],
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
        'inter-light': ['interlight'],
        'inter-semi': ['intersemi_bold'],
        'inter-bold': ['interbold'],
        'inter-black': ['interblack'],
        circular: ['circular_med'],
        'larsseit-bold': ['larsseitbold'],
        'larsseit-xbold': ['larsseitxbold'],
        'larsseit-light': ['larsseitlight'],
        larsseit: ['larsseitmed'],
        'larsseit-thin': ['larsseitthin'],
        'circular-black': ['circular_black'],
        'circular-bold': ['circular_bold'],
        'circular-book': ['circular_book'],
        'circular-med': ['circular_medium'],
        'poppins-bold': ['poppinsbold'],
        'poppins-xbold': ['poppinsextrabold'],
        'poppins-light': ['poppinslight'],
        'poppins-med': ['poppinsmedium'],
        poppins: ['poppinsregular'],
        'poppins-semi': ['poppinssemibold'],
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
            fontFamily: theme('fontFamily.inter-light'),
            'h1, h2, h3': {
              color: theme('colors.black'),
              fontFamily: theme('fontFamily.eina-bold'),
              margin: 'mt-0',
            },
            strong: {
              color: theme('colors.black'),
              fontFamily: theme('fontFamily.inter-semi'),
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
