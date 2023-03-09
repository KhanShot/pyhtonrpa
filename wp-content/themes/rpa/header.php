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
<html data-wf-page="637370bc3ff187d800d061f7" data-wf-site="637370bc3ff18755a9d061f1" lang="en">
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
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
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
  <div style="height:100vh" class="page">
    <header style="-webkit-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="page-header">
      <div data-w-id="83ca0b23-b96e-3d5c-ec02-8345a0c2deea" data-animation="default" data-collapse="medium" data-duration="600" data-easing="ease-out-cubic" data-easing2="ease-out-cubic" role="banner" class="nav w-nav">
        <div style="background-color:rgba(255,255,255,0.5)" class="nav---container">
          <a href="#" class="brand w-nav-brand"><img src="images/new-logo.svg" loading="lazy" width="78" height="48" alt="" class="nav---logo"></a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="nav---menu-inner">
              <a href="#products" class="nav---link w-nav-link">Product</a>
              <a href="#cases" class="nav---link w-nav-link">Cases</a>
              <a href="#start" class="nav---link w-nav-link">Start</a>
              <a href="#Comparison" class="nav---link hide w-nav-link">Comparison</a>
              <a href="#" class="nav---link w-nav-link">Pricing</a>
              <a href="#faq" class="nav---link w-nav-link">FAQ</a>
              <a href="partnership.html" class="nav---link w-nav-link">Partnership</a>
              <a href="#reviews" class="nav---link w-nav-link">Reviews</a>
              <div class="nav---button">
                <div class="button_wrap">
                  <a data-w-id="6acc2762-d515-155d-4154-6fc628f97c6e" href="#" class="button nav_bar w-button">Let&#x27;s talk</a>
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
    <div class="page-main">
      <section class="section x-hero wf-section">
        <div class="edge-color main_rpa">
          <div style="display:block" class="edge-color---load-full-wrap">
            <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="edge-color---load-full"></div>
          </div>
          <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);display:block" class="edge-color---load-left"></div>
          <div style="background-color:rgba(255,255,255,0)" class="edge-color---main">
            <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);display:block" class="edge-color---load-right"></div>
            <div data-w-id="a6864c27-0185-964d-feae-7f821c9f5685" style="opacity:0" class="edge-shield---wrap">
              <div css-shield-lines="white" class="edge-shield">
                <div class="edge-shield---left">
                  <div class="shd">
                    <div class="shd---line-h-wrap">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-v-wrap">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-angle-wrap x-left">
                      <div class="shd---line"></div>
                      <div class="shd---line-v-wrap x-right">
                        <div class="shd---line"></div>
                      </div>
                    </div>
                    <div class="shd---line-angle-wrap x-right">
                      <div class="shd---line"></div>
                      <div class="shd---line-v-wrap x-right">
                        <div class="shd---line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="edge-shield---right">
                  <div class="shd">
                    <div class="shd---line-h-wrap">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-v-wrap">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                    <div class="shd---line-angle-wrap x-left">
                      <div class="shd---line"></div>
                      <div class="shd---line-v-wrap x-right">
                        <div class="shd---line"></div>
                      </div>
                    </div>
                    <div class="shd---line-angle-wrap x-right">
                      <div class="shd---line"></div>
                      <div class="shd---line-v-wrap x-right">
                        <div class="shd---line"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-v-wrapper main_section partnership">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-5xl">
                <div class="position-relative">
                  <div class="grid vertical-2xl">
                    <div id="w-node-_58d95984-c778-7629-b504-45671b1c4479-00d061f7">
                      <div class="screen---displace">
                        <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="screen---wrap">
                          <div style="-webkit-transform:translate3d(0, -101%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -101%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -101%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -101%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="screen">
                            <div css-shield-lines="clear" class="screen-shield">
                              <div class="scren-shield---item-wrap x-left">
                                <div class="screen-shield---item">
                                  <div class="shd">
                                    <div class="shd---line-h-wrap">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-v-wrap">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-v-wrap x-right">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-angle-wrap x-left">
                                      <div class="shd---line"></div>
                                      <div class="shd---line-v-wrap x-right">
                                        <div class="shd---line"></div>
                                      </div>
                                    </div>
                                    <div class="shd---line-angle-wrap x-right">
                                      <div class="shd---line"></div>
                                      <div class="shd---line-v-wrap x-right">
                                        <div class="shd---line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="scren-shield---item-wrap">
                                <div class="screen-shield---item">
                                  <div class="shd">
                                    <div class="shd---line-h-wrap">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-v-wrap">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-v-wrap x-right">
                                      <div class="shd---line"></div>
                                    </div>
                                    <div class="shd---line-angle-wrap x-left">
                                      <div class="shd---line"></div>
                                      <div class="shd---line-v-wrap x-right">
                                        <div class="shd---line"></div>
                                      </div>
                                    </div>
                                    <div class="shd---line-angle-wrap x-right">
                                      <div class="shd---line"></div>
                                      <div class="shd---line-v-wrap x-right">
                                        <div class="shd---line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="div-block-8"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="w-node-_49ea9d17-4427-21d3-15f8-0da869534ea6-00d061f7" data-w-id="49ea9d17-4427-21d3-15f8-0da869534ea6" class="screen---pointer-invert"></div>
                    <div id="w-node-_79f863f3-f7a1-b142-a725-5542c44b17c0-00d061f7" data-w-id="79f863f3-f7a1-b142-a725-5542c44b17c0">
                      <div style="opacity:0" class="hero-content">
                        <div class="vertical-2xl">
                          <div class="hero-content---header">
                            <div class="vertical-s">
                              <div style="-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-content---label">
                                <div class="font-roboto-mono">Meet Auditor</div>
                              </div>
                              <div style="-webkit-transform:translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-content---title">
                                <div class="animation-h1-block">
                                  <h1 class="headline">Automate </h1>
                                  <div class="div-block">
                                    <h2 class="typed"></h2>
                                    <div class="cursor"></div>
                                  </div>
                                  <h1 class="headline smaller-text">using software bots</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div style="-webkit-transform:translate3d(0, 6rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 6rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 6rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 6rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-content---text">
                            <p class="paragraph-5">Python RPA empowers you to automate repetitive tasks with no coding needed</p>
                          </div>
                          <div class="button_wrap main">
                            <a data-w-id="479bcafd-d54d-ac00-5e44-5c5f84e4dd0e" href="#" class="button w-button">Get started free</a>
                            <a data-w-id="3cf43a37-58e9-817f-d80e-1cbdfb5a5b5d" href="#" class="button second w-button">Let&#x27;s talk</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="logo-carousel vertical">
                  <div style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="logo-carousel---title">
                    <div class="line-height-s">Large and small organizations trust us</div>
                  </div>
                  <div class="logo-carousel"><img loading="lazy" height="42" src="images/HC.svg" width="86" style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo-carousel---img"><img src="images/hilton.svg" loading="lazy" width="53" height="50" style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo-carousel---img"><img src="images/images-Traced.svg" loading="lazy" width="62" height="70" style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo-carousel---img"><img src="images/al-hilal.svg" loading="lazy" width="63" height="50" style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo-carousel---img"><img src="images/presso.svg" loading="lazy" width="89" height="32" style="opacity:0;-webkit-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 2rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="logo-carousel---img"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="products" class="section x-relative video-section hide wf-section">
        <div class="section-v-wrapper">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="grid vertical-7xl video_grid">
                <div id="w-node-_226e353c-eb4b-e0d4-ce56-643580f77e81-00d061f7" class="slider---content">
                  <div id="w-node-_226e353c-eb4b-e0d4-ce56-643580f77e82-00d061f7" class="vertical-2xl">
                    <div class="slider---heading">
                      <div class="vertical-s">
                        <div class="slider---title-wrap">
                          <div class="slider---title">
                            <h2 class="line-height-xs invert_color">Develop your business, and virtual </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="paragraph-9 white_descr">From updating your product assortment on the marketplace to assessing the effectiveness of your sales team, Python RPA can help you optimize your sales process by increasing conversion rates and reducing chaos.</p>
                </div>
                <div id="w-node-_226e353c-eb4b-e0d4-ce56-643580f77e9e-00d061f7" class="slider---image video-wrap">
                  <div class="gradient-image---wrap video-wrap">
                    <div class="gradient-image background_video">
                      <div class="gradient-image---img-wrap video_background">
                        <div class="div-block-3"><img src="images/play.svg" loading="lazy" height="25" alt=""></div>
                      </div>
                      <div class="gradient-image---transition"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="product" class="section x-invert x-relative hide wf-section">
        <div data-w-id="097af40e-6af5-c753-ce3a-6368d1df4035" class="section-full-color bg-neutral"></div>
        <div class="section-v-wrapper x-relative x-expand">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-7xl">
                <div class="container-inner x-medium x-left">
                  <div class="vertical-2xl">
                    <div class="vertical-s">
                      <div data-w-id="dc7a9b45-2a0b-5192-1a53-f4e90a54e24e" class="font-roboto-mono">Automate</div>
                      <h2 data-w-id="dc7a9b45-2a0b-5192-1a53-f4e90a54e250">Python RPA</h2>
                    </div>
                    <p data-w-id="dc7a9b45-2a0b-5192-1a53-f4e90a54e252">A tool to save time and money by automating routine operations</p>
                  </div>
                </div>
                <div class="grid vertical-7xl">
                  <div id="w-node-abd52262-a1d7-01f4-87bc-365452ab9360-00d061f7">
                    <div data-w-id="c8fd82e8-c77e-ad63-c8d7-74c514bdb6fd" class="illus-card">
                      <div class="triangle-gr">
                        <div class="triangle-gr---border x-bottom">
                          <div class="triangle-gr---line-wrap">
                            <div class="triangle-gr---line">
                              <div class="triangle-gr---line-inner"></div>
                              <div class="triangle-gr---line-inner"></div>
                            </div>
                            <div class="triangle-gr---dot x-middle">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="triangle-gr---dot x-right">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div class="triangle-gr---border x-left">
                          <div class="triangle-gr---line-wrap">
                            <div class="triangle-gr---line">
                              <div class="triangle-gr---line-inner"></div>
                              <div class="triangle-gr---line-inner"></div>
                            </div>
                            <div class="triangle-gr---dot x-middle">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="triangle-gr---dot x-right">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div class="triangle-gr---border x-right">
                          <div class="triangle-gr---line-wrap">
                            <div class="triangle-gr---line">
                              <div class="triangle-gr---line-inner"></div>
                              <div class="triangle-gr---line-inner"></div>
                            </div>
                            <div class="triangle-gr---dot x-middle">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="triangle-gr---dot x-right">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div class="triangle---center-wrap">
                          <div class="dot x-small bg-white"></div>
                        </div>
                      </div>
                      <div id="w-node-_0230f57c-0818-d2f4-e971-714dd350e400-00d061f7" class="illus-card---content">
                        <div class="vertical-l">
                          <h3 class="font-roboto-mono color-secondary heading-h5">Freeing up more than 60% of employees&#x27; time</h3>
                          <p>Complete replacement of single-type operations with bots</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-_19b535dc-0557-f5eb-ad2a-e641a7195495-00d061f7">
                    <div class="illus-card">
                      <div data-w-id="455e47be-6186-fb66-aa41-1a1da2e6b7ad" class="circle-gr">
                        <div class="circle-gr---inner">
                          <div class="circle-gr---arc">
                            <div class="circle-gr---mask x-01">
                              <div class="circle-gr---arc">
                                <div class="circle-gr---mask x-02">
                                  <div class="circle-gr---arc">
                                    <div class="circle-gr---mask"></div>
                                    <div class="circle-gr---dot">
                                      <div class="dot bg-primary"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="circle-gr---dot">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                            </div>
                            <div class="circle-gr---dot">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="w-node-_455e47be-6186-fb66-aa41-1a1da2e6b7c5-00d061f7" class="illus-card---content">
                        <div class="vertical-l">
                          <h3 class="font-roboto-mono color-secondary heading-h5">7x faster operation</h3>
                          <p>Robot performance times faster than even the most motivated employee</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-_4924f8ea-eb9a-f795-2410-c5955e965e5a-00d061f7">
                    <div class="illus-card">
                      <div data-w-id="67e60cc8-3521-cbc7-ce69-d81aeca43467" class="square-gr">
                        <div class="square-gr---parallels">
                          <div class="square-gr---line-wrap x-left">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                          <div class="square-gr---line-wrap x-middle">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-primary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-secondary"></div>
                            </div>
                          </div>
                          <div class="square-gr---line-wrap x-right">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div class="square-gr---parallels x-rotate">
                          <div class="square-gr---line-wrap x-left">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                          <div class="square-gr---line-wrap x-middle">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-primary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-secondary"></div>
                            </div>
                          </div>
                          <div class="square-gr---line-wrap x-right">
                            <div class="square-gr---line"></div>
                            <div class="square-gr---dot x-top">
                              <div class="dot bg-secondary"></div>
                            </div>
                            <div class="square-gr---dot x-bottom">
                              <div class="dot bg-primary"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="w-node-_67e60cc8-3521-cbc7-ce69-d81aeca43474-00d061f7" class="illus-card---content">
                        <div class="vertical-l">
                          <h3 class="font-roboto-mono color-secondary heading-h5">Reducing errors by up to 100%</h3>
                          <p>Software that unmistakably mimics human actions</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="corner-shield---wrap">
          <div css-shield-lines="clear" class="corner-shield">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="corner-shield---wrap x-bottom">
          <div css-shield-lines="clear" class="corner-shield">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div data-w-id="18f8e041-3bcb-bfb3-41fe-b48dffe34374" class="section-2 wf-section">
        <div class="section-v-wrapper">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="grid vertical-7xl video_block">
                <div id="w-node-_6cfb7fcc-3ea1-ed73-61e5-7c1c108d1556-00d061f7" class="slider---content video">
                  <div id="w-node-_6cfb7fcc-3ea1-ed73-61e5-7c1c108d1557-00d061f7" class="vertical-2xl video_block">
                    <div class="slider---heading">
                      <div class="vertical-s">
                        <div class="slider---title-wrap">
                          <div class="slider---title">
                            <h2 class="line-height-xs white video_block"><span class="text-span">Grow your business </span>and let software bots take care of the routine</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider---text-wrap">
                      <div class="slider---text">
                        <p class="paragraph-9 white">Any repetitive task on PC could be performed by software bot <span class="bold">24x7</span><span class="text-span-3"> </span>with no errors for less than <span class="bold">2$</span> a day</p>
                      </div>
                    </div>
                    <div id="tagswrapper" class="wrap-tags"></div>
                  </div>
                </div>
                <div id="w-node-_6cfb7fcc-3ea1-ed73-61e5-7c1c108d1573-00d061f7" class="slider---image">
                  <div class="slider---image video-wrap">
                    <div class="gradient-image---wrap video-wrap">
                      <div class="gradient-image background_video">
                        <div class="gradient-image---img-wrap video_background stay">
                          <div data-w-id="2b6ade02-0778-3337-25b2-a92db93397b0" class="div-block-3"><img src="images/play.svg" loading="lazy" height="25" alt=""></div>
                        </div>
                        <div class="gradient-image---transition"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="cases" class="section x-relative wf-section">
        <div class="section-v-wrapper">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="container-inner x-medium x-left tables">
                <h2 data-w-id="97233b5c-b9a9-13be-c9ab-702749dd6b22" class="line-height-xs">Learn how <span class="text-span">Python RPA</span> can help your people save time</h2>
              </div>
              <div data-current="Sales" data-easing="ease-in" data-duration-in="0" data-duration-out="0" class="tabs-2 w-tabs">
                <div class="tabs-content-2 w-tab-content">
                  <div data-w-tab="Sales" class="tab-pane-tab-6 w-tab-pane w--tab-active">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-_4e92d9d8-26fc-122f-9dd2-f7c407100cdf-00d061f7" class="slider---image tables sales"></div>
                      <div id="w-node-_4e92d9d8-26fc-122f-9dd2-f7c407100ce0-00d061f7" class="slider---content tables">
                        <div id="w-node-_4e92d9d8-26fc-122f-9dd2-f7c407100ce1-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">Sales</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables"><strong>Robotic Process Automation</strong> (<strong>RPA)</strong> - is a technology that imitates human actions in computer systems using bots. RPA Bots (or Bots) are algorithms that are &quot;trained&quot; to perform certain actions, mostly routine, repetitive, rule-based tasks that usually take too long to perform manually.<br><br>Bots are often used in conjunction with systems such as CRM as assistants to sales managers. Key reason for using bots in sales is that almost every company has vendor-locked off the shelf CRM systems, which are not easy to configure or integrate with other software and enjoy <strong>100% automation.</strong>
                                <a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a href="#" class="link_learn_more">Products updates on marketplaces</a>
                          <a id="w-node-ef874e4c-d6d9-cc7b-fe2e-fc7f82cdea80-00d061f7" href="#" class="link_learn_more">Customer data management</a>
                          <a id="w-node-_4e92d9d8-26fc-122f-9dd2-f7c407100cf2-00d061f7" href="#" class="link_learn_more">Submission of e-tender applications</a>
                          <a href="#" class="link_learn_more">Follow-up sales</a>
                          <a href="#" class="link_learn_more">Sales performance management</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Marketing" class="tab-pane-tab-6 w-tab-pane">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-a6be944a-5ea5-6c6f-cf7f-c46ada06ddf8-00d061f7" class="slider---image tables marketing"></div>
                      <div id="w-node-a6be944a-5ea5-6c6f-cf7f-c46ada06ddf9-00d061f7" class="slider---content tables">
                        <div id="w-node-a6be944a-5ea5-6c6f-cf7f-c46ada06ddfa-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">Marketing</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables">With Python RPA, customers can streamline product management processes on marketplaces, websites, and CRMs, as well as quickly gather all analytical data in one place for the marketing department.<a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a href="#" class="link_learn_more">Email marketing campaigns</a>
                          <a href="#" class="link_learn_more">Monitoring and updating prices on marketplaces</a>
                          <a href="#" class="link_learn_more">Downloading marketing reports from third party software</a>
                          <a href="#" class="link_learn_more">Performance management of advertising campaigns</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Accounting" class="tab-pane-tab-6 w-tab-pane">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-_096b4ddc-805d-d6a6-40af-9f2bc13549d5-00d061f7" class="slider---image tables accounting"></div>
                      <div class="slider---content tables">
                        <div id="w-node-_096b4ddc-805d-d6a6-40af-9f2bc13549d7-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">Finance</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables">The accounting department is the primary user of RPA in any company, as accountants often perform many manual and repetitive tasks, resulting in significant overtime work, especially during period closings. <br>Python RPA can help streamline these processes by reducing the potential for human error and reducing the need for overtime hours.<a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a href="#" class="link_learn_more">Processing electronic invoices</a>
                          <a href="#" class="link_learn_more">Reconciliation with suppliers</a>
                          <a href="#" class="link_learn_more">Reconciling with service providers and partners</a>
                          <a href="#" class="link_learn_more">Reconciliation of accounting data with e-invoices</a>
                          <a href="#" class="link_learn_more">Bonuses and vacation pay data entry in ERP</a>
                          <a href="#" class="link_learn_more">Bank statements posting in ERP</a>
                          <a href="#" class="link_learn_more">Processing unidentified customer payments</a>
                          <a href="#" class="link_learn_more">Entering contract details into ERP system</a>
                          <a href="#" class="link_learn_more">Creating purchase orders in ERP</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="HR" class="tab-pane-tab-6 w-tab-pane">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-_3bdbfa7c-77ab-0781-20af-f511cc1f5266-00d061f7" class="slider---image tables hr"></div>
                      <div id="w-node-_3bdbfa7c-77ab-0781-20af-f511cc1f5267-00d061f7" class="slider---content tables">
                        <div id="w-node-_3bdbfa7c-77ab-0781-20af-f511cc1f5268-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">HR</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables">From job posting on headhunting websites to employee onboarding, Python RPA helps transform HR processes in a seamless manner and improve employee job satisfaction by <strong>more than 30%.</strong>
                                <a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a id="w-node-_3bdbfa7c-77ab-0781-20af-f511cc1f5277-00d061f7" href="#" class="link_learn_more">Job posting on headhunting websites</a>
                          <a href="#" class="link_learn_more">CV Screening</a>
                          <a href="#" class="link_learn_more">Employee Onboarding</a>
                          <a href="#" class="link_learn_more">Processing Vacation Requests</a>
                          <a href="#" class="link_learn_more">Processing Business Trip Requests</a>
                          <a href="#" class="link_learn_more">Performance Management</a>
                          <a href="#" class="link_learn_more">Labour Contracts Registration on e-Government Portal</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Costomer service" class="tab-pane-tab-6 w-tab-pane">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-d7c7e0da-fd90-cff7-b21d-abcafa56e2ef-00d061f7" class="slider---image tables customer"></div>
                      <div id="w-node-d7c7e0da-fd90-cff7-b21d-abcafa56e2f0-00d061f7" class="slider---content tables">
                        <div id="w-node-d7c7e0da-fd90-cff7-b21d-abcafa56e2f1-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">Customer service</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables">Using Python RPA, companies can improve their customer service by automating tasks such as answering email inquiries, using chatbots, and informing customers about the successful resolution of their issues. This allows the company to provide <strong>24/7 service</strong> and improve the customer experience.<a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a href="#" class="link_learn_more">Customer Support through Messengers</a>
                          <a href="#" class="link_learn_more">Handling Customer Requests Using Chatbots</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="IT" class="tab-pane-tab-6 w-tab-pane">
                    <div class="grid vertical-7xl tables">
                      <div id="w-node-_1b1bda76-9bbd-ed01-7ef4-ca70ce189665-00d061f7" class="slider---image tables it"></div>
                      <div id="w-node-_1b1bda76-9bbd-ed01-7ef4-ca70ce189658-00d061f7" class="slider---content tables">
                        <div id="w-node-_1b1bda76-9bbd-ed01-7ef4-ca70ce189659-00d061f7" class="vertical-2xl">
                          <div class="slider---heading">
                            <div class="vertical-s">
                              <div class="slider---title-wrap">
                                <div class="slider---title">
                                  <h2 class="text-size-xlarge text-weight-bold tabs">IT</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider---text-wrap">
                            <div class="slider---text">
                              <p class="paragraph-9 tables">Python RPA can automate tasks such as creating user accounts and testing system interfaces, reducing the workload for IT staff and allowing them to focus on more important tasks.<a href="https://rpa-9d49ca.webflow.io/#"><strong><br></strong></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="cases_header">Cases:</div>
                        <div class="link_wrap">
                          <a href="#" class="link_learn_more">Testing system’s UI</a>
                          <a href="#" class="link_learn_more">User Access Revocation</a>
                          <a href="#" class="link_learn_more">Password Change Management</a>
                          <a href="#" class="link_learn_more">Creating Virtual Machines and Servers</a>
                          <a href="#" class="link_learn_more">Software license renewal</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-menu-2 w-tab-menu">
                  <a data-w-tab="Sales" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0a5" class="tab-link-tab-1-2 first container w-inline-block w-tab-link w--current">
                    <div class="text-block-17">Sales</div>
                  </a>
                  <a data-w-tab="Marketing" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0b4" class="tab-link-tab-1-2 w-inline-block w-tab-link">
                    <div class="text-block-18">Marketing</div>
                  </a>
                  <a data-w-tab="Accounting" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0ab" class="tab-link-tab-1-2 w-inline-block w-tab-link">
                    <div class="text-block-19">Finance</div>
                  </a>
                  <a data-w-tab="HR" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0a8" class="tab-link-tab-1-2 w-inline-block w-tab-link">
                    <div class="text-block-20">HR</div>
                  </a>
                  <a data-w-tab="Costomer service" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0ae" class="tab-link-tab-1-2 w-inline-block w-tab-link">
                    <div class="text-block-21">Customer service</div>
                  </a>
                  <a data-w-tab="IT" data-w-id="99bd2465-ab76-6da4-a31f-1b7535c3f0b1" class="tab-link-tab-1-2 w-inline-block w-tab-link">
                    <div class="text-block-22">IT</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="corner-shield---wrap x-slider">
          <div class="corner-shield">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section data-w-id="360a5e66-607e-5a28-d4a9-774dcca84d7e" class="section x-invert x-relative wf-section">
        <div data-w-id="10c193a5-044e-847f-d7e7-10fe2920d2e6" class="section-full-color bg-neutral"></div>
        <div id="start" class="section-v-wrapper x-relative x-expand">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-6xl">
                <div class="container-inner x-medium x-left">
                  <h2 id="w-node-e33efe96-c2c7-293f-718f-bb6511595911-00d061f7" data-w-id="e33efe96-c2c7-293f-718f-bb6511595911" class="line-height-xs">Enjoy your first automation within <span class="text-span">2 weeks</span></h2>
                </div>
                <div id="w-node-_42c8df29-63d7-1f2d-7e5d-80d9d03d0a3c-00d061f7" class="position-relative">
                  <div class="grid minus-top-margin infograph">
                    <div id="w-node-_406446a3-0a25-e38f-790f-17a15dd7da09-00d061f7" class="div-block-7">
                      <div class="div-block-9"><img src="images/time.svg" loading="lazy" alt="" class="image-14">
                        <div class="text-block-12">1 Day</div>
                      </div>
                      <div class="text-block-11">1. Identify</div>
                      <p class="paragraph-11">Ask your employees to identify repetitive and time consuming tasks</p>
                    </div>
                    <div id="w-node-f57e4a03-eb50-1ffe-6336-684699c7a0a0-00d061f7" class="div-block-7">
                      <div class="div-block-9"><img src="images/time.svg" loading="lazy" alt="" class="image-14">
                        <div class="text-block-12">1 Day</div>
                      </div>
                      <div class="text-block-11">2. Learn</div>
                      <p class="paragraph-11">Contact us and we will suggest our partner to you. Or you can ask your IT guy to go through our tutorials. It takes only 4 hours to start bot development.</p>
                    </div>
                    <div id="w-node-_56f0513b-d204-e355-81ae-099b46313159-00d061f7" class="div-block-7">
                      <div class="div-block-9"><img src="images/time.svg" loading="lazy" alt="" class="image-14">
                        <div class="text-block-12">3-5 Days</div>
                      </div>
                      <div class="text-block-11">3. Build</div>
                      <p class="paragraph-11">Create your bot in no-code Studio.</p>
                    </div>
                    <div id="w-node-cf4b9ef7-c04b-5419-4724-d9b746654cbd-00d061f7" class="div-block-7">
                      <div class="div-block-9"><img src="images/time.svg" loading="lazy" alt="" class="image-14">
                        <div class="text-block-12">1-2 Days</div>
                      </div>
                      <div class="text-block-11">4. Run</div>
                      <p class="paragraph-11">Schedule your workflows and go live.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section x-relative hide wf-section">
        <div class="huge-shield---wrap">
          <div class="huge-shield---trio">
            <div class="huge-shield---trio-item-wrap x-01">
              <div class="huge-shield---trio-item">
                <div class="shd">
                  <div class="shd---line-h-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap x-right">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-angle-wrap x-left">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                  <div class="shd---line-angle-wrap x-right">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="huge-shield---trio-item-wrap x-02">
              <div class="huge-shield---trio-item">
                <div class="shd">
                  <div class="shd---line-h-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap x-right">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-angle-wrap x-left">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                  <div class="shd---line-angle-wrap x-right">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="huge-shield---trio-item-wrap x-03">
              <div class="huge-shield---trio-item">
                <div class="shd">
                  <div class="shd---line-h-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-v-wrap x-right">
                    <div class="shd---line"></div>
                  </div>
                  <div class="shd---line-angle-wrap x-left">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                  <div class="shd---line-angle-wrap x-right">
                    <div class="shd---line"></div>
                    <div class="shd---line-v-wrap x-right">
                      <div class="shd---line"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="huge-shield">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-v-wrapper x-expand">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-4xl">
                <div class="container-inner x-medium x-left">
                  <h2 data-w-id="ad4652a1-c2b1-2f1a-22c1-81676db82c91" class="line-height-xs">Hire an <span class="text-span">expert</span> or do it <span class="text-span">yourself</span></h2>
                </div>
                <div class="vertical-l">
                  <div class="grid display-block-tab">
                    <div id="w-node-ddca9d19-16ac-5cff-5ade-027c5c29d77d-00d061f7" data-w-id="ddca9d19-16ac-5cff-5ade-027c5c29d77d" class="feature---wrap">
                      <div class="feature---bg bg-secondary"></div>
                      <div class="feature---illust-wrap">
                        <div data-w-id="491febe8-f1da-6f45-d6a3-4bb502705e94" class="circle---wrap">
                          <div class="circle---center-wrap">
                            <div class="dot x-small bg-neutral"></div>
                          </div>
                          <div class="circle x-inner">
                            <div class="circle---dot-wrap">
                              <div class="circle---dot x-bottom">
                                <div class="dot bg-primary"></div>
                              </div>
                            </div>
                            <div class="circle x-inner">
                              <div class="circle---dot-wrap">
                                <div class="circle---dot x-right">
                                  <div class="dot bg-neutral"></div>
                                </div>
                              </div>
                              <div class="circle x-inner">
                                <div class="circle---dot-wrap">
                                  <div class="circle---dot x-bottom">
                                    <div class="dot bg-primary"></div>
                                  </div>
                                </div>
                                <div class="circle x-inner">
                                  <div class="circle---dot-wrap">
                                    <div class="circle---dot x-left">
                                      <div class="dot bg-neutral"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="feature">
                        <div class="feature---content">
                          <div class="vertical-2xl">
                            <div class="vertical-l">
                              <div class="feature---title">
                                <h3 class="heading-h4 font-roboto-mono">Do it yourself</h3>
                              </div>
                              <div class="feature---text">
                                <a data-w-id="521d183c-f060-ae37-245b-79dfb511e723" href="#" class="link-block-2 w-inline-block">
                                  <div class="text-block-8">Download studio</div><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                                </a>
                                <a href="#" class="link-block-2 w-inline-block">
                                  <div class="text-block-8">Watch tutorials</div><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                                </a>
                                <a href="#" class="link-block-2 w-inline-block">
                                  <div class="text-block-8">Join community</div><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grid display-block-tab">
                    <div id="w-node-ddca9d19-16ac-5cff-5ade-027c5c29d782-00d061f7" class="feature---wrap">
                      <div class="feature---bg bg-primary"></div>
                      <div class="feature---illust-wrap">
                        <div data-w-id="020b1dc6-afd0-7cd1-a99b-c6db78c8ee1e" class="square">
                          <div class="square---parallels">
                            <div class="square---line-wrap x-left">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                            <div class="square---line-wrap x-middle">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                            <div class="square---line-wrap x-right">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="square---parallels x-rotate">
                            <div class="square---line-wrap x-left">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                            <div class="square---line-wrap x-middle">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                            <div class="square---line-wrap x-right">
                              <div class="square---line-inner">
                                <div class="square---line"></div>
                              </div>
                              <div class="square---dot-wrap x-top">
                                <div class="square---dot x-top">
                                  <div class="dot bg-secondary"></div>
                                </div>
                              </div>
                              <div class="square---dot-wrap x-bottom">
                                <div class="square---dot x-bottom">
                                  <div class="dot bg-white"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="square---grid">
                            <div id="w-node-_3430e7f2-27c6-6574-f5eb-8e57eb3f9d8e-78c8ee1e" class="dot x-small bg-neutral"></div>
                            <div id="w-node-_5c6517c8-4295-6b2a-89d8-902582c03174-78c8ee1e" class="dot x-small bg-neutral"></div>
                            <div id="w-node-_98dc2ca3-e08d-be6d-464e-0652d181f769-78c8ee1e" class="dot x-small bg-neutral"></div>
                            <div id="w-node-d0eca394-4383-fac0-05fb-fbf2043c6dca-78c8ee1e" class="dot x-small bg-neutral"></div>
                          </div>
                        </div>
                      </div>
                      <div class="feature">
                        <div class="feature---content">
                          <div class="vertical-2xl">
                            <div class="vertical-l">
                              <div class="feature---title">
                                <h3 class="heading-h4 font-roboto-mono black">Hire an Expert</h3>
                              </div>
                              <div class="feature---text">
                                <a data-w-id="2ab98a58-2318-6a92-707a-859a017c3fe5" href="#" class="link-block-2 black w-inline-block">
                                  <div class="text-block-8 black">Contact us</div><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="Comparison" class="section bg-neutral-lightest wf-section">
        <div class="section-v-wrapper comparison">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-6xl">
                <h2 id="w-node-_8db77cc6-bc45-7f23-db2f-293c44060be3-44060bdd" data-w-id="8db77cc6-bc45-7f23-db2f-293c44060be3" class="line-height-xs minus-margin-top compare">Compare <span class="text-span">Python RPA</span> vs Traditional Platforms</h2><img src="images/tab.svg" loading="lazy" alt="">
                <div class="text-block-9">* - information gathered from vendors&#x27; websites and public sources.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="price" class="section bg-neutral-lightest wf-section">
        <div class="section-v-wrapper">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-6xl">
                <h2 id="w-node-c9e5111b-cad3-61ff-e503-1a6cec377db3-ec377dae" data-w-id="c9e5111b-cad3-61ff-e503-1a6cec377db3" class="line-height-xs minus-margin-top"><span>A plan </span>to fit <span class="text-span">your needs</span></h2>
                <div>
                  <div class="padding-vertical padding-xxlarge">
                    <div class="pricing-component">
                      <div class="pricing-card background-color-white"><img src="images/Group-190.svg" loading="lazy" alt="" class="image-6">
                        <div class="margin-vertical margin-small">
                          <div class="text-size-xlarge text-weight-bold">Free</div>
                        </div>
                        <p class="small-para text-color-grey">Unlimited unscheduled workflows</p>
                        <div class="margin-top margin-medium">
                          <h4 class="text-color-orange blue">$0 per/month</h4>
                        </div>
                        <a data-w-id="c9e5111b-cad3-61ff-e503-1a6cec377dc6" href="#" class="button price full_width w-button">Start for Free</a>
                        <div class="text-weight-bold">What’s Included:</div>
                        <div class="price-line-text-wrapper two-lines"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Workflows:</strong> Unlimited unscheduled workflows (attended bots)</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Support channel:</strong> community</p>
                        </div>
                      </div>
                      <div data-w-id="c9e5111b-cad3-61ff-e503-1a6cec377dd6" class="pricing-card background-color-black white-brdr"><img src="images/Group-190-1.svg" loading="lazy" alt="" class="image-6">
                        <div class="margin-vertical margin-small">
                          <div class="text-size-xlarge text-weight-bold">Growth</div>
                        </div>
                        <p class="small-para text-color-grey blue">5 scheduled workflows</p>
                        <div class="margin-top margin-medium">
                          <h4 class="text-color-orange blue">$99,99 per/month</h4>
                        </div>
                        <a data-w-id="c9e5111b-cad3-61ff-e503-1a6cec377de0" href="#" class="button full_width w-button">Buy Growth</a>
                        <div class="text-weight-bold blue">What’s Included:</div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Workflows:</strong> 5 scheduled workflows</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Orchestration:</strong> cloud</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Additional workflows:</strong> $15 per/month</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Audit logs: </strong>6 months</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Job logs: </strong>+</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Scheduling and monitoring: </strong>+</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Versions: </strong>+</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-2.svg" loading="lazy" alt="">
                          <p><strong>Support channel: </strong>community, email</p>
                        </div>
                      </div>
                      <div class="pricing-card background-color-white"><img src="images/Group-190.svg" loading="lazy" alt="" class="image-6">
                        <div class="margin-vertical margin-small">
                          <div class="text-size-xlarge text-weight-bold black">Enterprise</div>
                        </div>
                        <p class="small-para text-color-grey">Custom / On-Premise or Private Cloud setup</p>
                        <div class="margin-top margin-medium">
                          <h4 class="text-color-orange blue">Let&#x27;s talk</h4>
                        </div>
                        <a data-w-id="c9e5111b-cad3-61ff-e503-1a6cec377e1e" href="#" class="button price full_width w-button">Contact Us</a>
                        <div class="text-weight-bold">What’s Included:</div>
                        <div class="price-line-text-wrapper two-lines"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="" class="image-7">
                          <p class="paragraph-8"><strong>PoC: </strong>Free pilot project</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Workflows:</strong> custom</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Orchestration: </strong>on-premise</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Additional workflows: </strong>custom</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Audit logs:</strong> custom</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Job logs:</strong> +</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Scheduling and monitoring: </strong>+</p>
                        </div>
                        <div class="price-line-text-wrapper"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="">
                          <p class="paragraph-8"><strong>Versions:</strong> +</p>
                        </div>
                        <div class="price-line-text-wrapper two-lines"><img src="images/637375d8a22b3dcbd50dd322_Vector-42-1.svg" loading="lazy" alt="" class="image-7">
                          <p class="paragraph-8"><strong>Support channel: </strong>community, email, chat, phone</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="faq" class="section bg-neutral-lightest wf-section">
        <div class="section-v-wrapper">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="vertical-6xl">
                <h2 data-w-id="4f0de8f8-7ae2-3c52-a8f6-17e19abf6f38" class="line-height-xs minus-margin-top">Frequently Asked <span class="text-span">Questions</span></h2>
                <div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">What is RPA?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>RPA, or Robotic Process Automation, is a technology that helps automate repetitive tasks in a digital environment. It uses bots, or programs trained to mimic the actions of employees, to perform various tasks, such as data entry into CRM systems, automated billing, text recognition, and more.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">In what areas can RPA be used?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>RPA can be used in any department of a company that has routine and repetitive processes. It is widely used in small and large businesses for tasks such as accounting, tax and treasury functions, HR, procurement, legal, IT, and customer support. For example, banks use RPA for tasks such as authorizing money transfers in foreign currency, authorizing loan repayments, resolving disputes, monitoring self-service devices, reconciling data between systems, exchanging data with credit bureaus, and generating risk and regulatory reports. Telcos use RPA for network management and billing reconciliation, while insurance companies use it for claims processing and other tasks.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">What are the benefits of using RPA?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>RPA significantly improves the operational effectiveness and process management of any company. It can perform tasks 3-7 times faster than humans, without making errors, and it can run 24/7. Many market leaders are adopting RPA to improve competitiveness, such as by providing customer support around the clock or processing customer requests faster than their competitors. Using RPA in the back office can improve the accuracy of tasks, reduce overtime work, and increase employee satisfaction. Some companies motivate their employees to suggest automation ideas or develop their own bots, and provide bonuses based on the number of man-hours saved.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">Is it difficult to implement and maintain RPA?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>You can implement RPA yourself with our instructions, or you can get help from one of our RPA experts.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">What can a software bot do?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>A digital worker, also known as a &quot;bot&quot; or software robot, can interact with computer systems in the same way that humans do. It can read information displayed on the screen, type using the keyboard, and perform mouse movements and clicks. It can do the same tasks as a person at a computer, making it suitable for repetitive tasks typically performed by humans.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">How much does RPA cost?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>Python RPA offers free unscheduled bots (bots that are launched manually and not scheduled) for $99.99, as well as on-premise or private cloud setups at a cost that is 3-4 times lower than major RPA brands.</p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="dropdown---wrap">
                    <div data-hover="false" data-delay="0" data-w-id="f9d2205c-df1e-2248-570e-6ac29e5945b0" class="dropdown w-dropdown">
                      <div class="dropdown---toggle w-dropdown-toggle">
                        <div class="font-size-l">Who are we and why can we be trusted?</div>
                        <div class="dropdown---plus">
                          <div class="pls">
                            <div class="plus---horizontal"></div>
                            <div class="plus---vertical"></div>
                          </div>
                        </div>
                      </div>
                      <nav class="dropdown---list w-dropdown-list">
                        <div class="dropdown---list-inner">
                          <div class="container-inner x-small x-left">
                            <p>Python RPA is the Central Asian market leader currently based in Kazakhstan. Our team is supported by Plug and Play and QazTechVentures, a governmental agency for startups. One of our strategic investors is Quest Ventures, a reputable Singaporean VC firm. Our customer base includes international corporations and many midsize companies from Europe, Central Asia, and Southeast Asia.<br></p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="reviews" data-w-id="0e09112a-c850-6b03-1cd9-7a89904229c8" class="section x-relative reviews wf-section">
        <div class="section-v-wrapper review">
          <div class="vertical-6xl">
            <div class="card-carousel---outer">
              <div class="card-carousel---wrap">
                <div class="card-carousel---inner">
                  <div class="card-carousel---bg-wrap">
                    <div data-w-id="27f57ed7-096f-d737-2cdb-9b363f370df2" class="card-carousel---bg"></div>
                  </div>
                  <div data-current="Tab 5" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                    <div id="w-node-_608ed76f-edb5-fc75-e34b-1b973e6ced55-00d061f7" class="tabs-content w-tab-content">
                      <div data-w-tab="Tab 5" class="w-tab-pane w--tab-active">
                        <div class="testimonial-left-wrapper"><img loading="lazy" src="images/".svg" alt="" class="image-8">
                          <div class="padding-vertical padding-medium">
                            <p class="paragraph-7">Thanks to automation, we no longer have problems working with multiple Google Sheets. Python RPA is a very flexible automation tool.</p>
                          </div>
                          <div class="text-weight-medium">Michael Ferris</div>
                          <div class="text-color-grey">IT Manager, Old Square Restaurant Chain</div>
                        </div>
                      </div>
                      <div data-w-tab="Tab 1" class="w-tab-pane">
                        <div class="testimonial-left-wrapper"><img loading="lazy" src="images/".svg" alt="" class="image-8">
                          <div class="padding-vertical padding-medium">
                            <p class="paragraph-7">Managing product assortments and monitoring prices on marketplaces has become much easier thanks to bots.</p>
                          </div>
                          <div class="text-weight-medium">Yulianna Kristof</div>
                          <div class="text-color-grey">Founder, Cozy Home Stores</div>
                        </div>
                      </div>
                      <div data-w-tab="Tab 2" class="w-tab-pane">
                        <div class="testimonial-left-wrapper"><img loading="lazy" src="images/".svg" alt="" class="image-8">
                          <div class="padding-vertical padding-medium">
                            <p class="paragraph-7">Cool thing, no need to send and collect data manually from government sites anymore.</p>
                          </div>
                          <div class="text-weight-medium">Binh Nguyen</div>
                          <div class="text-color-grey">Loan Department Manager, Dr. Dong</div>
                        </div>
                      </div>
                      <div data-w-tab="Tab 3" class="w-tab-pane">
                        <div class="testimonial-left-wrapper"><img loading="lazy" src="images/".svg" alt="" class="image-8">
                          <div class="padding-vertical padding-medium">
                            <p class="paragraph-7">We were able to successfully optimize a number of labor-intensive processes in operations and accounting on a limited budget. Python RPA bots met our expectations.</p>
                          </div>
                          <div class="text-weight-medium">Aigul Dosayeva</div>
                          <div class="text-color-grey">Operations Director, Transport Company Atasu Group</div>
                        </div>
                      </div>
                      <div data-w-tab="Tab 4" class="w-tab-pane">
                        <div class="testimonial-left-wrapper"><img loading="lazy" src="images/".svg" alt="" class="image-8">
                          <div class="padding-vertical padding-medium">
                            <p class="paragraph-7">Immediately after the first bots were introduced, departmental employees began to wonder why they took so long to do this mundane work and not to grow the business</p>
                          </div>
                          <div class="text-weight-medium">Yergerey Mazhit</div>
                          <div class="text-color-grey">Otbasy Bank</div>
                        </div>
                      </div>
                    </div>
                    <div id="w-node-_608ed76f-edb5-fc75-e34b-1b973e6ced88-00d061f7" class="tabs-menu w-tab-menu">
                      <a data-w-tab="Tab 5" data-w-id="608ed76f-edb5-fc75-e34b-1b973e6ced89" class="tab-link-tab-1 _5 w-inline-block w-tab-link w--current"><img loading="lazy" src="images/Michael.jpg" alt="" class="testimonial-pic"></a>
                      <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link"><img loading="lazy" src="images/Yuilya.jpg" alt="" class="testimonial-pic"></a>
                      <a data-w-tab="Tab 2" class="tab-link-tab-1 _2 w-inline-block w-tab-link"><img loading="lazy" src="images/BingNguen.jpg" alt="" class="testimonial-pic"></a>
                      <a data-w-tab="Tab 3" class="tab-link-tab-1 _3 w-inline-block w-tab-link"><img loading="lazy" src="images/Aigul.jpg" alt="" class="testimonial-pic"></a>
                      <a data-w-tab="Tab 4" class="tab-link-tab-1 _4 w-inline-block w-tab-link"><img loading="lazy" src="images/Yergerey.jpg" alt="" class="testimonial-pic"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-h-wrapper">
              <div class="container">
                <div id="w-node-_4b6846b8-5715-53a4-3067-775d9fec141a-00d061f7" class="position-relative">
                  <div class="grid vertical-xl grid_forn">
                    <div id="w-node-_4b6846b8-5715-53a4-3067-775d9fec141c-00d061f7" class="vertical-xl">
                      <h2 data-w-id="4b6846b8-5715-53a4-3067-775d9fec141d" class="line-height-xs white">Ready to <span class="text-span">get started?</span></h2>
                      <div class="form-block w-form">
                        <form id="wf-form-Name" name="wf-form-Name" data-name="Name" method="get">
                          <div class="div-block-2"><input type="text" class="text-field-2 fildefirst w-input" maxlength="256" name="name" data-name="Name" placeholder="Name company" id="name"><input type="text" class="text-field-2 w-input" maxlength="256" name="Industry" data-name="Industry" placeholder="Industry" data-w-id="789218f5-d9c6-3324-6b74-11632716ee3f" id="Industry" required=""></div>
                          <div class="div-block-2"><input type="text" class="text-field-2 fildefirst w-input" maxlength="256" name="Name" data-name="Name" placeholder="Name" id="Name-3"><input type="tel" class="text-field-2 fildefirst w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone" id="Phone"><input type="email" class="text-field-2 w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Email" data-w-id="79a5bddc-6e80-3715-18af-d879645d6cb7" id="email-2" required=""></div><textarea class="textarea w-input" maxlength="5000" name="field" data-name="field" placeholder=" Describe the task" data-w-id="c4345074-ef82-f4b9-c478-e31b75072f4a" id="field"></textarea>
                          <a href="#" class="button w-button">Submit</a>
                        </form>
                        <div class="w-form-done">
                          <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                          <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                      </div>
                    </div>
                    <p id="w-node-_4b6846b8-5715-53a4-3067-775d9fec1421-00d061f7" data-w-id="4b6846b8-5715-53a4-3067-775d9fec1421" class="notic">*By submitting your data, you agree to the processing of personal data.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div css-shield-lines="clear" class="pair-shield">
          <div class="pair-shield---item x-01">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pair-shield---item x-02">
            <div class="shd">
              <div class="shd---line-h-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-v-wrap x-right">
                <div class="shd---line"></div>
              </div>
              <div class="shd---line-angle-wrap x-left">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
              <div class="shd---line-angle-wrap x-right">
                <div class="shd---line"></div>
                <div class="shd---line-v-wrap x-right">
                  <div class="shd---line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="page-footer">
      <div class="footer">
        <div class="grid vertical-5xl">
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed250-cd9ed24d" class="vertical-m footer_block"><img src="images/logo-rpa-black-bCK.svg" loading="lazy" width="42" height="49" alt="" class="footer---logo">
            <p class="display-block">Invent and build your future</p>
          </div>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed254-cd9ed24d" class="vertical-m">
            <div><strong class="bold-text-3">Sitemap</strong></div>
            <div>
              <a href="#products" class="display-block color-primary">Product</a>
              <a href="#cases" class="display-block color-primary">Cases</a>
              <a href="#start" class="display-block color-primary">Start</a>
              <a href="#" class="display-block color-primary"><span class="display-block color-primary">Comparison</span></a>
              <a href="#" class="display-block color-primary">Price</a>
              <a href="partnership.html" class="display-block color-primary">Partnership</a>
              <a href="#reviews" class="display-block color-primary">Reviews</a>
            </div>
          </div>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed268-cd9ed24d" class="vertical-m">
            <div><strong class="bold-text-3">Contact us</strong></div>
            <div>
              <div class="text-block-6">Support</div>
              <a href="mailto:sales@pythonrpa.org" class="display-block color-primary">info@auditor.io</a>
            </div>
          </div>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed276-cd9ed24d" class="font-size-s">
            <div class="text-block-3">© RPA python. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div css-pointer-events="none" class="pointer---wrap">
    <div class="pointer"></div>
  </div>
  <div class="pop-op-section form_to_download wf-section">
    <div class="pop-up form_to_download">
      <div class="pop-header">
        <a data-w-id="71cafeb9-858a-9fa4-c949-8ef66bd68564" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <h3 class="line-height-xs form">Get started <span class="text-span">free</span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name" data-name="Name" placeholder="Name" id="Name-5"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company" data-name="Company" placeholder="Company" id="Company" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone" id="Phone-2"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email" id="Email-4" required=""></div><input type="submit" value="Download Studio" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section lets_talk wf-section">
    <div class="pop-up lets_talk">
      <div class="pop-header">
        <a data-w-id="591fdc84-7adc-2ad5-4463-b71a9660777c" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="form-block-2 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-2">
            <h3 class="line-height-xs form">Let&#x27;s talk<span class="text-span"></span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-6" data-name="Name 6" placeholder="Name" id="Name-6"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-2" data-name="Company 2" placeholder="Company" id="Company-2" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-3" data-name="Phone 3" placeholder="Phone" id="Phone-3"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-5" data-name="Email 5" placeholder="Email" id="Email-5" required=""></div><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section hire_an wf-section">
    <div class="pop-up hire_an">
      <div class="pop-header">
        <a data-w-id="c052c399-31e4-56df-a563-186fd754f56e" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="form-block-3 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-3">
            <h3 class="line-height-xs form">Let&#x27;s talk<span class="text-span"></span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-6" data-name="Name 6" placeholder="Name" id="Name-6"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-2" data-name="Company 2" placeholder="Company" id="Company-2" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-3" data-name="Phone 3" placeholder="Phone" id="Phone-3"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-5" data-name="Email 5" placeholder="Email" id="Email-5" required=""></div><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section form_to_download price free wf-section">
    <div class="pop-up form_to_download">
      <div class="pop-header">
        <a data-w-id="c017b407-e629-a388-dd88-16453aaf8a32" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <h3 class="line-height-xs form">Get started <span class="text-span">free</span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-7" data-name="Name 7" placeholder="Name" id="Name-7"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-3" data-name="Company 3" placeholder="Company" id="Company-3" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-4" data-name="Phone 4" placeholder="Phone" id="Phone-4"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-6" data-name="Email 6" placeholder="Email" id="Email-6" required=""></div><input type="submit" value="Start for free" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section form_to_download price growth wf-section">
    <div class="pop-up form_to_download">
      <div class="pop-header">
        <a data-w-id="d8970c81-0d49-d232-e958-509a1013bd10" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <h3 class="line-height-xs form">Buy <span class="text-span">growth</span><span class="text-span"></span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-7" data-name="Name 7" placeholder="Name" id="Name-7"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-3" data-name="Company 3" placeholder="Company" id="Company-3" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-4" data-name="Phone 4" placeholder="Phone" id="Phone-4"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-6" data-name="Email 6" placeholder="Email" id="Email-6" required=""></div><input type="submit" value="Buy Growth" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section form_to_download price enterprice wf-section">
    <div class="pop-up form_to_download">
      <div class="pop-header">
        <a data-w-id="467bf165-1920-fe8a-6807-febb2ddc1aa9" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <h3 class="line-height-xs form">Let&#x27;s <span class="text-span">talk</span><span class="text-span"></span><span class="text-span"></span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-7" data-name="Name 7" placeholder="Name" id="Name-7"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-3" data-name="Company 3" placeholder="Company" id="Company-3" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-4" data-name="Phone 4" placeholder="Phone" id="Phone-4"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-6" data-name="Email 6" placeholder="Email" id="Email-6" required=""></div><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pop-op-section lets_talk back_form wf-section">
    <div class="pop-up lets_talk">
      <div class="pop-header">
        <a data-w-id="d24609ac-6f86-937e-6129-7295e413e0a0" href="#" class="link-block w-inline-block"><img src="images/close.svg" loading="lazy" height="25" alt=""></a>
      </div>
      <div class="pop-content">
        <div class="form-block-2 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-2">
            <h3 class="line-height-xs form">Ready to <span class="text-span">get started?</span></h3>
            <div class="horizontal_form"><input type="text" class="text-field-3 w-input" maxlength="256" name="Name-6" data-name="Name 6" placeholder="Name" id="Name-6"><input type="text" class="text-field-3 second w-input" maxlength="256" name="Company-2" data-name="Company 2" placeholder="Company" id="Company-2" required=""></div>
            <div class="horizontal_form"><input type="tel" class="text-field-3 w-input" maxlength="256" name="Phone-3" data-name="Phone 3" placeholder="Phone" id="Phone-3"><input type="email" class="text-field-3 second w-input" maxlength="256" name="Email-5" data-name="Email 5" placeholder="Email" id="Email-5" required=""></div><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="popup_order" class="popup_success"><img src="images/close_1.svg" loading="lazy" alt="" class="image-81">
    <div class="success_message">Your message has been successfully sent. Thank you!</div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=637370bc3ff18755a9d061f1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!--  Typed effect   -->
  <script async="">
var Webflow = Webflow || [];
if (window.innerWidth > 0) { Webflow.push(function() {
  $.getScript('https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js', function() {
       /* String Seven 07 - With SmartBackspace */
      $(".typed").typed({
      strings: ["repetitive tasks", "data entry", "Google Sheet tasks", "Excel tasks", "web scrapping", "reports", "overtime hours", "copy and paste"],
	typeSpeed: 40,
      backSpeed: 20,
      backDelay: 1600,
      showCursor: !1,
      loop: !0
      });
      });
      });
      } else { 
      	var typed = $('.typed-div')
				typed.css('display', 'none')    
      }
// $('#slider222 div:nth-child(2)').trigger('tap');
     //$("tag1").
   $("#tagswrapper" ).each(function(index) {
    $(this).on("click", function(){
        // For the boolean value
        //var boolKey = $(this).data('selected');
        // For the mammal value
        // var mammalKey = $(this).attr('id');
        $('#slider222 div:nth-child('+index+')').trigger('tap');
    });
});
</script>
</body>
</html>