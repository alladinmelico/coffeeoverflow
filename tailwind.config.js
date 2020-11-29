const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	purge: [
		'./vendor/laravel/jetstream/**/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php'
	],

	theme: {
		extend: {
			backgroundImage: theme => ({
				'log-background':
					"url('https://scontent.fmnl7-1.fna.fbcdn.net/v/t1.15752-0/p280x280/127621258_677240619607570_5788441946000658546_n.png?_nc_cat=102&ccb=2&_nc_sid=ae9488&_nc_eui2=AeFmuzp1vQQoAQx7ORGo97-R2ymSXF9htCPbKZJcX2G0I2z_ZqBv_QOiQhdGd0l-YAA_T0QGdGB3omVhm2vOYVqE&_nc_ohc=tX1ueQ-DH9YAX_Wal71&_nc_ht=scontent.fmnl7-1.fna&oh=23ef86748a962427b4e6bc57897a77d6&oe=5FE63460')",
				'log-background-dark':
					"url('https://scontent.fmnl7-1.fna.fbcdn.net/v/t1.15752-0/p280x280/127622802_2687421958189994_7529839105170196238_n.png?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_eui2=AeFgT6EDpdicpu8nT3_YHhrTTRpuVOaB2R5NGm5U5oHZHlzb3Eh_FI72dZkfUOkP598XGYaYd_mBqHPMMEEVELxf&_nc_ohc=wd73CvNyVE0AX-VXmR9&_nc_ht=scontent.fmnl7-1.fna&oh=5646424c97d7b8153424150c975b85d0&oe=5FE8260B')",
				'math-background':
					"url('https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/128278922_1387076665017019_3639199284743928352_n.jpg?_nc_cat=107&ccb=2&_nc_sid=ae9488&_nc_eui2=AeErURi3B_Pmgoqpb8Qrj3_3GIrpuQROBmYYium5BE4GZhL_SxzPzCCx-URYdgguGWmekA6_uc8MGeoD5arFlQIY&_nc_ohc=xfxBFmRBn0gAX-vJpDt&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&tp=6&oh=a114ecb5b5858a9cd56fad5405e32ec9&oe=5FE8D790')",
				'english-background':
					"url('https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/128534508_288134669292169_8682955854490193529_n.jpg?_nc_cat=108&ccb=2&_nc_sid=ae9488&_nc_eui2=AeGtMJdk_V-1P5e8lNp6YOJ9wE6ZLl9l_7XATpkuX2X_tc7OG1sHvfjw_fXCuiM2eJf1C2dos8nwzK2wYFteGg7K&_nc_ohc=XgWEYPktEkgAX-zNsBq&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&tp=6&oh=032ca55651a8afe6dd64c14507092e7a&oe=5FE8E23C')",
				'ap-background':
					"url('https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/128174248_2699547513627877_6424631768985234739_n.jpg?_nc_cat=108&ccb=2&_nc_sid=ae9488&_nc_eui2=AeE938yHvCnwK2LAErzYHk4vaHWim7mzlf9odaKbubOV_3UNQae-62-vCxvXYvV0U7rdFKp_uLmbNN5nRWkfyJbt&_nc_ohc=umW1vCLGgwQAX9Xq60P&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&tp=6&oh=3953383d1c0a44e36c858aa69cb7dbc3&oe=5FE7C2BC')"
			}),
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
