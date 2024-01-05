import defaults from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                mono: [
                    'Fira Code',
                    ...defaults.fontFamily.mono,
                ]
            }
        },
    },
    plugins: [],
}
