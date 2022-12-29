module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  plugins: [require("@tailwindcss/typography")],
  theme: {
    extend: {
      height: {
        '13': '3.125rem',
        'lh': '1.313rem',
        'l15': '0.938rem',
      },
      width: {
        'logomd': '8.125rem',
      },
      colors: {
        primary: {
          100: "#ffe2d0",
          200: "#ffc5a1",
          300: "#fea771",
          400: "#fe8a42",
          500: "#fe6d13",
          600: "#cb570f",
          700: "#98410b",
          800: "#662c08",
          900: "#331604"
        },        
        secondary: {
          100: "#d4d5da",
          200: "#a9abb6",
          300: "#7e8191",
          400: "#53576d",
          500: "#282d48",
          600: "#20243a",
          700: "#181b2b",
          800: "#10121d",
          900: "#08090e"
        },
      },
    },
  },
}
