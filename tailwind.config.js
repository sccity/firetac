module.exports = {
  darkMode: 'class',
  content: [
    './public/**/*.html',
    './src/**/*.php',
    './src/**/*.js',
    './Views/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        background: '#2d2d2d',
        primary: '#1e3a8a',
        secondary: '#3b82f6',
        accent: '#ffffff',
        border: '#444444',
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['dark'],
      textColor: ['dark'],
      borderColor: ['dark'],
    },
  },
  plugins: [],
}