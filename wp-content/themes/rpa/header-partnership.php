<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rpa
 */

?>
<!doctype html>
<html data-wf-page="63919ecdf088820ba8b2073f" data-wf-site="637370bc3ff18755a9d061f1" lang="en">
<head>
<meta charset="utf-8">
  <title>RPA python</title>
  <meta content="Python RPA empowers you to automate repetitive tasks with no coding needed" name="description">
  <meta content="RPA python" property="og:title">
  <meta content="Python RPA empowers you to automate repetitive tasks with no coding needed" property="og:description">
  <meta content="https://uploads-ssl.webflow.com/637370bc3ff18755a9d061f1/63961a27546a8e8c167e5108_1200X630.png" property="og:image">
  <meta content="RPA python" property="twitter:title">
  <meta content="Python RPA empowers you to automate repetitive tasks with no coding needed" property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/637370bc3ff18755a9d061f1/63961a27546a8e8c167e5108_1200X630.png" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inconsolata:400,700","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <style>
  html { opacity: 0; transition: opacity 0s ease-out; }
  html.webflow-loaded { opacity: 1; }
  </style>
  <script>
  var Webflow = Webflow || [];
  Webflow.push(function() { $('html').addClass('webflow-loaded') });
  </script>
  <style>
   .w-nav-link.w--current {
     color: #29339B !important;
    }
</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="custom">
    <div class="global-css">
      <div class="custom-arrow-invert w-embed">
        <style>
/* using custom CSS to change the color of the arrow in the Symbol of the same name */
.arrow---invert .arrow---head, .arrow---invert .arrow---line {
	background-color: white;
}
</style>
      </div>
      <div class="custom-btn-primary w-embed">
        <style>
/* Button over blue bg. Updating styles via Custom CSS to prevent breaking the symbol */
.btn---primary .btn---wrap {
	background-color: white;
  border-color: white;
}
.btn---primary .btn---bg-circle {
	background-color: #81acfe;
}
.btn---primary .btn {
	color: black;
}
@media screen and (min-width: 992px) {
	.btn---primary .btn:hover {
		color: white;
	}
}
</style>
      </div>
      <div class="custom-btn-secondary w-embed">
        <style>
/* Button over yellow bg. Updating styles via Custom CSS to prevent breaking the symbol */
.btn---secondary .btn---wrap {
	background-color: white;
  border-color: white;
}
.btn---secondary .btn---bg-circle {
	background-color: #ece16a;
}
.btn---secondary .btn {
	color: black;
}
@media screen and (min-width: 992px) {
	.btn---secondary .btn---wrap:hover {
		border-color: black;
	}
}
</style>
      </div>
      <div class="custom-btn-neutral w-embed">
        <style>
/* Button over black bg. Updating styles via Custom CSS to prevent breaking the symbol */
.btn---neutral .btn---wrap {
	background-color: white;
  border-color: white;
}
.btn---neutral .btn---bg-circle {
	background-color: black;
}
.btn---neutral .btn {
	color: black;
}
@media screen and (min-width: 992px) {
	.btn---neutral .btn:hover {
		color: white;
	}
}
</style>
      </div>
      <div class="custom-cursor w-embed">
        <style>
/* Prevent the pointer to be displayed in links and alike elements, desktop only */
@media screen and (min-width: 1440px) {
	.w-button, .w-slider-arrow-left, .w-slider-arrow-right, .w-dropdown-toggle, .pop-close {
		cursor: none;
	}
}
</style>
      </div>
      <div class="custom-font-rendering w-embed">
        <style>
/* smooth font rendering */
body {
    -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
            text-rendering: geometricPrecision;
}
</style>
      </div>
      <div class="custom-link-inheritance w-embed">
        <style>
/* make links inherit color instead of the default blue */
.w-inline-block {
	color: inherit;
}
</style>
      </div>
      <div class="custom-pointer-events w-embed">
        <style>
/* using HTML custom attributes to prevent certain divs to trigger mouse events */
[css-pointer-events="none"] {
	pointer-events: none;
}
</style>
      </div>
      <div class="custom-responsive-typography w-embed">
        <style>
/* Finsweet's fluid responsive */
html { font-size: 1rem; }
@media screen and (max-width:1440px) { html { font-size: calc(0.1982182628062361rem + 0.8908685968819599vw); } }
@media screen and (max-width:991px) { html { font-size: calc(0.1439732142857143rem + 1.7857142857142856vw); } }
 @media screen and (max-width:767px) { html { font-size: 1rem; } }
</style>
      </div>
      <div class="custom-rich-text w-embed">
        <style>
/* making first and last child of richt text without margin top and bottom respectively */
.w-richtext > *:first-child {
 margin-top: 0;
}
.w-richtext > *:last-child {
 margin-bottom: 0;
}
</style>
      </div>
    </div>
    <div class="custom-page">
      <div class="custom-edge-color w-embed">
        <style>
/* Hero edge color for 1440px viewports and above */
@media screen and (min-width: 1440px) {
	.edge-color---main {
		width: calc(
      100vw - (100vw - 80rem) / 2 - 4 * (80rem - 11rem) / 12 - 4rem
    );
	}
}
/* Hero edge color for viewports between 1439px and 992px  */
@media screen and (max-width: 1439px) and (min-width: 992px) {
	.edge-color---main {
		width: calc(
      100vw - 5rem - 4 * (100vw - 10rem - 11rem) / 12 - 4rem
    );
	}
}
/* White div used to create the load in animation in the hero  */
.edge-color---load-right {
		height: calc(100vh - 100%);
}
</style>
      </div>
      <div class="custom-gradient-circle w-embed">
        <style>
/* create a conic gradient with custom code */
.circle-gr---arc {
	background:conic-gradient(from 180deg at 50% 50%, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
}
</style>
      </div>
      <div class="custom-hide-slide-arrow w-embed">
        <style>
/* Giving styles to inactive slider arrow instead of hiding it */
.slider---arrow[style*="display: none;"] {
	display: block !important;
  pointer-events: none;
  opacity: .3;
}
</style>
      </div>
      <div class="custom-shield-colors w-embed">
        <style>
/* Updating styles with custom CSS to prevent breaking symbols */
[css-shield-lines="white"] .shd---line {
	background-color: rgba(255,255,255,.8);
}
[css-shield-lines="clear"] .shd---line {
	background-color: rgba(255,255,255,.4);
}
</style>
      </div>
      <div class="custom-stack-effect-slider w-embed">
        <style>
/* defining the left padding of the slider in the last section in the page */
@media screen and (min-width: 1440px) {
	.card-carousel---outer {
		padding-left: calc( (100vw - 80rem) / 2);
	}
}
/* targeting next siblings and active slide in the slider in the last section ni the page to create the stacking effect. More info here https://twitter.com/masterflowmaker/status/1562681200287789061 */
.card-carousel---slide:not([aria-hidden="true"]) > div, .card-carousel---slide:not([aria-hidden="true"]) ~ .card-carousel---slide > div {
	transform: scale(1) translateX(0%) ;
  opacity: 1;
}
</style>
      </div>
    </div>
  </div>
  <div style="height:100vh" class="page-rpa">
    <header style="-webkit-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="page-header">
      <div data-w-id="83ca0b23-b96e-3d5c-ec02-8345a0c2deea" data-animation="default" data-collapse="medium" data-duration="600" data-easing="ease-out-cubic" data-easing2="ease-out-cubic" role="banner" class="nav w-nav">
        <div style="background-color:rgba(255,255,255,0.5)" class="nav---container">
          <a href="/" class="brand w-nav-brand"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-logo.svg" loading="lazy" width="78" height="48" alt="" class="nav---logo"></a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="nav---menu-inner">
              <a href="#Offering" class="nav---link w-nav-link">Offering</a>
              <a href="#Comparison" class="nav---link hide w-nav-link">Comparison</a>
              <a href="#price" class="nav---link hide w-nav-link">Prices</a>
              <a href="#reviews" class="nav---link w-nav-link">Reviews</a>
              <a href="#faq" class="nav---link w-nav-link">FAQ</a>
              <div class="nav---button">
                <div class="button_wrap">
                  <a href="#popmake-163" class="button nav_bar w-button">Let&#x27;s talk</a>
                </div>
              </div>
            </div>
          </nav>
          <div class="menu-button w-nav-button">
            <div class="nav---button-inner">
              <div class="nav---button-line x-top"></div>
              <div style="width:2.5rem" class="nav---button-line"></div>
              <div class="nav---button-line x-bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </header>
 