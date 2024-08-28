module.exports = {
  darkMode: 'class', // Use 'class' to enable dark mode based on the presence of the 'dark' class
  content: [
    './public/**/*.html',
    './src/**/*.php',
    './src/**/*.js',
    './Views/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        background: '#2d2d2d',  // Custom background color
        primary: '#1e3a8a',     // Custom primary color
        secondary: '#3b82f6',   // Custom secondary color
        accent: '#ffffff',      // Custom accent color
        border: '#444444',      // Custom border color
        'dark-bg': '#2D3748',   // Dark background color
        'dark-header': '#1A202C', // Dark header color
        'dark-hover': '#4A5568',  // Dark hover color
      },
    },
  },
  plugins: [],
}