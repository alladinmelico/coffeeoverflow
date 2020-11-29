const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	purge: [
		'./vendor/laravel/jetstream/**/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php'
	],

	theme: {
		extend: {
			fontFamily: {
				sans: ['Nunito', ...defaultTheme.fontFamily.sans]
			}
		},
		colors: {
			red: {
				light: '#C53030',
				dark: '#952424'
			},

			blue: {
				light: '#2B6CB0',
				dark: '#235890'
			},

			yellow: {
				light: '#F6E05E',
				dark: '#968839'
			}
		}
	},

	variants: {
		opacity: ['responsive', 'hover', 'focus', 'disabled']
	},

	plugins: [require('@tailwindcss/ui')]
}
