/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.php",
    "./public/partials/*.php",
    "./public/partials/global/*.php"
],
  theme: {
    extend: {
      fontFamily:{
        'serif': ['Playfair Display'],
        'sans': ['Mulish'],
      },
      colors: {
        'navy': 'hsl(202.9, 68%, 19.6%)',
        'navy-light': 'hsl(202.7, 58.3%, 32%)',
        'gold':'hsl(38.3, 60%, 77.5%)',
        'gold-light': 'hsl(35.2, 64.4%, 91.2%)',
        'white':'hsl(0, 0%, 94.9%)'
      },
      screens:{
        'sm':'520px',
      },
      dropShadow: {
        'txt': '0px 5px 4px rgba(0, 0, 0, 0.8)',
        'blue':'0px 20px 30px -10px hsl(210.8, 33.9%, 22.5%);',
      },
      boxShadow:{
        'simple':'0px 10px 4px -2px rgba(0, 0, 0, 0.25);',
        'blue':'0px 20px 30px -10px hsl(210.8, 33.9%, 22.5%);',
      },
      backgroundImage: {
        'banner': "url('/public/img/pageBanner-winter-city-lights.jpg')",
    },
    borderRadius:{
      '3xl': '1.25rem',
    },
  },
  plugins: [],
}
}
