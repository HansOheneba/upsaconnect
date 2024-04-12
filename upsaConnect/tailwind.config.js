/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {

            'upsaBlue': '#00004E',
            'upsaBlue2': '#263F9C',
            'upsaBlue3': '#DAE3F6',
            'upsaYellow': '#F9BB19',
            'upsaGrey': '#DAE2FC',
            'upsaGreyText': '#A3DCFF',
            'grdientBlue1': '#1F3BA2',
            'grdientBlue2': '#0C163C',
        },
      },
  },
  plugins: [],
}

