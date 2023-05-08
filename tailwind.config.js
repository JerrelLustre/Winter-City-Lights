/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.php",
    "./public/partials/*.php"
],
  theme: {
    extend: {
      fontFamily:{
        'serif': ['Playfair Display'],
        'sans': ['Mulish'],
      },
      colors: {
        'navy': '#103A54',
        'navy-light': '#225D81',
        'gold':'#E8CFA3',
        'gold-light': '#F7EBDA',
        'white':'#f2f2f2'
      },
      screens:{
        'sm':'520px',
      },
      dropShadow: {
        'txt': '0px 5px 4px rgba(0, 0, 0, 0.8)',
        'blue':'0px 20px 30px -10px #26394D;',
      },
      boxShadow:{
        'simple':'0px 10px 4px -2px rgba(0, 0, 0, 0.25);',
        'blue':'0px 20px 30px -10px #26394D;',
      },
      backgroundImage: {
        'ticket': "url('/public/img/ticket-bg-wintercitylights.svg')",
    },
    borderRadius:{
      '3xl': '1.25rem',
    }
  },
  plugins: [],
}
}
