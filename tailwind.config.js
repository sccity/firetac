module.exports = {
  darkMode: 'class', // or 'media'
  content: [
    './src/Views/**/*.php', // Adjust path to include all PHP files in Views folder
    './public/**/*.php',   // If you have PHP files in the public directory
    './src/**/*.html',     // Include HTML files if you have any
  ],
  theme: {
    extend: {
      colors: {
        background: '#1a1a1a', // Dark background color
        primary: '#ff9800', // Accent color
        secondary: '#4a4a4a', // Secondary text color
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}