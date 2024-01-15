/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Livewire/**/*.php",
        "./app/View/Components/**/*.php",
        "./app/Filament/**/*.php"
    ],
  theme: {
    extend: {},
  },
  plugins: [],
}
