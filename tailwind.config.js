module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.css',
    ],
    theme: {
      extend: {
        colors: {
            purple: '#7a6adc',
            black: '#39393A'
        },
      },
    },
    plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/line-clamp'),
      require('@tailwindcss/container-queries'),
    ],
  };
