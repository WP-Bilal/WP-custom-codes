/* custom login  */
// Customize login logo and background
// Enqueue custom login styles
function custom_login_styles() {
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/custom-login.css');
}
add_action('login_enqueue_scripts', 'custom_login_styles');

// Customize login logo and background
function custom_login_logo() {
    echo '<style type="text/css">
        /* Change the login logo */
        .login h1 a {
    background-image: url(https://memondryfruits.pk/wp-content/uploads/2023/09/Memon-Logo-01-copy-1.webp) !important;
    width: 100%;
    background-size: contain;
	height: 45px;
}
.login h1{
    height: 100px;
    width: 100px;
    background-color: #fff;
    border-radius: 50%;
    position: relative;
    left: 100px;
}

.login h1 a {
    height: 100px;
    
}

.login h1 a:focus {
    box-shadow: unset;
}
        
        /* Change the login background image */
        body.login {
            background-image: url('.get_stylesheet_directory_uri().'/images/login-background.jpg) !important;
            background-size: cover;
        }
        
        /* Change the login background color */
        body.login {
            background-color: #343434; /* Replace with your desired color */
        }
		
		form#loginform{
	    box-shadow: 0 8px 9px rgb(0 0 0 / 38%);
    border-radius: 21px;
}

.login #backtoblog a, .login #nav a {
    text-decoration: none;
    color: #ffffff;
}

.wp-core-ui .button-primary {
    background: #343434;
	border: none;
	width: 117px;
    border-radius: 21px;
	min-height: 36px;
	font-weight: 700;
	}
	.wp-core-ui .button-primary:hover {
	background:#794527;
	color: #fff;
	font-weight: 700;
	}
	
input#user_login {
    border-radius: 9px;
	font-size: 15px;
}

input#user_pass {
    border-radius: 9px;
	font-size: 15px;
}

body{
display: flex;
    align-items: center;
    justify-content: center;
}

.login #nav a:hover{
color: #fcdcdc;
}
.login #backtoblog a:hover{
color: #fcdcdc;
}

.dashicons-visibility:before {
    content: "\f177";
    color: black;
}

    </style>';
	
	 echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script type="text/javascript">
    		jQuery(document).ready(function($) {
        // Change the link when the logo is clicked
        $(".login h1 a").attr("href", "https://memondryfruits.pk/");
    });
</script>';
}
add_action('login_head', 'custom_login_logo');

