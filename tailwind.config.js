const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                seuss: ['Mikado', ...defaultTheme.fontFamily.sans],
                hand: ['Nanum Pen Script']
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
                'charcoal': '#2F394D',
            },
            opacity: {
                '95': '0.95',
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
