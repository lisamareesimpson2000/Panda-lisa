<?php 
     /* Template Name: Two Column 
     Template Post Type: page*/
?>


<?php get_header(); ?>
<?php if( have_posts() ):?>
    <?php while( have_posts() ): the_post();?>
    <div class="">
        <h2><?php the_title();?></h2>
            <p><?php //the_time('F j, Y');?></p>
            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            <div class="content twoColumn">
                <?php the_content(); ?>
            </div>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>"> View Post</a>
            <hr>


    </div>
    <?php endwhile; ?>
<?php else: ?>
<p>There is no post</p>
<?php endif;?>

    <p>This is from two-column.php</p>

    <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="newzealand">New Zealand</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>

<?php get_footer(); ?>