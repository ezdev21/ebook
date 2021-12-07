module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
         backgroundImage:{
           "liberary" : "url('/storage/liberary.jpg')"
         }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}