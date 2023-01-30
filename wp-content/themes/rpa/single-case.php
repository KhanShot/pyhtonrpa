<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rpa
 */

get_header('home');
?>
    <div class="page-main">
      <div class="header_section_case sales wf-section">
        <h1 class="case_heading"><?php the_title(); ?></h1>
        <p class="paragraph-12"><?php the_category(); ?></p>
      </div>
      <div class="section_case_text wf-section">
        <div class="section-v-wrapper partnership">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="rich-text-block-3 w-richtext">
			  <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer('home');
