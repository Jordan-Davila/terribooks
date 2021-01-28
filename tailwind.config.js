const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: ["./vendor/laravel/jetstream/**/*.blade.php", "./storage/framework/views/*.php", "./resources/views/**/*.blade.php", "./resources/js/**/*.vue"],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans]
            },
            fontSize: {
                xxs: [".65rem", "1rem"]
            },
            colors: {
                gray: {
                    300: "#a0aec0"
                }
            }
        },
        customForms: theme => ({
            default: {
                input: {
                    borderWidth: theme("borderWidth.0"),
                    backgroundColor: theme("colors.gray.200")
                }
            }
        })
    },

    variants: {
        extend: {
            opacity: ["disabled"],
            borderColor: ["focus"],
            borderWidth: ["focus", "hover"]
        }
    },

    plugins: [
        // Not yet configurable, for now just use forms.scss
        // require('@tailwindcss/forms'),
        require("@tailwindcss/typography")
    ]
};
