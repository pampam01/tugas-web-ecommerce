/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                lora: ["Lora", "serif"],
                rubik: ["Rubik Wet Paint", "sans-serif"],
            },
        },
    },
    plugins: [require("preline/plugin")],
};
