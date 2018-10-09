<?php
/*
Template Name: Contact Form
*/
?>

<?php if(isset($emailSent) && $emailSent == true) { ?>

<div class="thanks">
 <h1>Thanks, <?=$name;?></h1>
 <p>Your email was successfully sent. I will be in touch soon.</p>
</div>

<?php } else { ?>

<?php if (have_posts()) : ?>

 <?php while (have_posts()) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
 
  <?php if(isset($hasError) || isset($captchaError)) { ?>
   <p class="error">
    There was an error submitting the form.
   <p>
  <?php } ?>

  <form action="<?php the_permalink(); ?>" id="contactForm" method="post">

  </form>

 <?php endwhile; ?>
<?php endif; ?>
< } ?>

<?php get_header(); ?>


<?php } else { ?>

<?php } ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>