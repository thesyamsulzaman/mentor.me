module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                body: ["Helvetica Now Display"]
            },
            colors: {
                "space-black": "#2e2e36",
                "soft-white": "#fff"
            },
            cursor: {
                grabbing: "grabbing"
            },
            maxWidth: {
                container: "95%"
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
