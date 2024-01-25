/** @type {import('tailwindcss').Config} */
const { fontFamily } = require("tailwindcss/defaultTheme");

let includePreflight, typographyClassName;
if ('editor' === process.env._TW_TARGET) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'../../**/*.php',
		'./theme.json',
		'../../*.php',
	],
	theme: {
		extend: {
			fontFamily: {
				primary: ["Open Sans, sans-serif", fontFamily.sans],
			},
			colors: {
				theme: {
					pink: "#FE1CA6",
					purple: "#18012D",
					blue: "#4C03EF",
				},
				light: {
					purple: "#8078A0",
					"gray-100": "#EAEAEA",
					"gray-200": "#888888",
				},
			},

			fontSize: {
				50: "50px",
				40: "40px",
				17: "17px",
			},
			lineHeight: {
				50: "50px",
				54: "54px",
				35: "35px",
				23: "23px",
			},
			spacing: {
				15: "60px",
				7.5: "30px",
			},
			boxShadow: {
				btn: "0px 0px 50px #FE1CA6",
				btnLight: "0px 0px 50px rgba(254, 28, 166, 0.5)",
				btnwhite: "0px 0px 50px rgba(128, 120, 160, 0.5)",
				card: "0px 0px 50px rgba(0, 0, 0, 0.15)",
				blog: "0px 0px 20px 0px rgba(0, 0, 0, 0.25)",
				btnBlue:"0px 0px 50px 0px #4C03EF",
				form:"0px 0px 50px 0px rgba(0, 0, 0, 0.15)",
				blueBox:" 0px 0px 100px 0px rgba(76, 3, 239, 0.25)",
				cardBtn:' 0px 0px 50px 0px rgba(254, 28, 166, 0.50)',
			},
			backgroundImage: {
				hero: 'url("./assets/images/home/hero.png")',
				plants: 'url("./assets/images/home/planet.png")',
				contactModal:'url("./assets/images/sprava/contact-bg.svg")',
				box: 'linear-gradient(0deg, #FFF 0%, rgba(255, 255, 255, 0.00) 100%)',
				number: "linear-gradient(180deg, #4C03EF 0%, #1B0259 100%)",
				bgborder: "linear-gradient(270deg, rgba(255,255,255,0),rgba(254, 28, 166, 1),rgba(255,255,255,0))",
				"purple-gradient": "linear-gradient(180deg, #2C0154 0%, #18012D 100%)",
				bgborderTwo: "linear-gradient(270deg, rgba(255,255,255,0),rgba(136, 136, 136, 0.5),rgba(255,255,255,0))",
				footer: "linear-gradient(180deg, #1B0259 0%, #18012D 100%)",
				"border-copyright": "linear-gradient(270deg, rgba(128, 120, 160, 0) 0%, #8078A0 50.52%, rgba(128, 120, 160, 0) 100%)",
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('./theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography')({
			className: typographyClassName,
		}),
		// Add flowbite
		require('flowbite/plugin'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
