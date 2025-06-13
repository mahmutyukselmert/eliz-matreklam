// postcss.config.cjs
const purgecss = require('@fullhuman/postcss-purgecss').default;
const cssnano = require('cssnano');

module.exports = {
  plugins: [
    purgecss({
      content: [
        './index.html',
        './**/*.html',
        './public/**/*.php',
        './public/include/*.php',
        './public/index.php',
        './public/*.php',
        './public/include/*.html',
        './**/*.js',
      ],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
      safelist: [
        'fade',
        'show',
        'active',
      ]
    }),
    cssnano({
      preset: 'default'
    })
  ]
};