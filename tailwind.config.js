const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Mikado', 'Inter var', ...defaultTheme.fontFamily.sans],
            },
            borderWidth: {
                '3': '3px',
            },
            borderRadius: {
                'funky': '255px 15px 225px 15px/15px 225px 15px 255px',
                'funky-addon-l': '255px 0 0 15px/15px 0 0 225px',
                'funky-addon-r': '0 15px 255px 0/0 225px 15px 0',
            },
            colors: {
                'midnight': '#002f3c',
                'charcoal': '#2F394D',
                'electric-pink': '#E01A4F',
                'treetop-green': '#4C956C',
            }
        },
    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
    ],
};
