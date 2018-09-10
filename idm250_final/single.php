<?php /* 
Template Name: Single
*/
get_header(); ?>

<div class="row">
      <div class="twelve columns">
        <h1>Craiglist Redesign</h1>
      </div>
    </div>
    <div class="row">
      <div class="eleven columns">
        <h5>UI Redesign</h5>
        <h6>January 2018</h6>
      </div>
      <div class="one column">
        <a href="index.html"><h6 class="navbar-link">Home</h6></a>
      </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
  </div>
</div>


<!-- Content -->
<div class="portfolio dd">
  <div class="container" style="padding-top: 48px">
    <div class="row">
      <div class="ten columns">
        <h5>Why Redesign</h5> 
        <p>Craigslist was founded in 1995 and is a leading classified advertisement website with sections devoted to different categories (jobs, housing, for sale and etc). With more than 20 billion page views and 80 million advertisements per month, Craigslist is the leading classified service in any medium. Since its launch in 1995, Craigslist has not changed much since. It has too much text on the screen and it is not very user friendly. Therefore, I have decided to give it a whole new clean look. </p>
      </div>
    </div>
    
    <div class="row">
      <div class="ten columns">
        <h5>Approach</h5> 
        <p>Before jumping into the case study, I did some user research and observed people when they used craigslist. I gave my friends a few tasks to complete via the website's interface. I asked them to use craigslist to find a car that they want.  Based on the observations I gather a few pain points that made the experience terrible: </p>
      </div>
    </div>

    <div class="row">
      <div class="ten columns">
        <h5>Early Mocks</h5>
        <img style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/images/CurrentDesign1.png" alt="function of beauty">
        
      </div>
    </div>
    
    <div class="row">
      <div class="ten columns">
        <h5>Final Iterations</h5>
        <img style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/images/MyRedesign1.png" alt="function of beauty">
        
      </div>
    </div>
    <br>
    <div class="row">
      <div class="ten columns">
        <img style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/images/MyRedesign2.png" alt="function of beauty">
       
      </div>
    </div>
    <br>
    <div class="row">
      <div class="ten columns">
        <img style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/images/MyRedesign3.png" alt="function of beauty">
        <br>
        
        <p style="padding-top:48px">The newly redesigned homepage now has less text and is now more organized. I have removed all irrelevant information like the calendar and the footer information. I added a location tab where users are now able to pick a location directly from a dropdown rather than having to guess what those location wording initials (csd, nsd, esd, ssd ) actually mean. I changed the language of the site to be more familiar to the users so that the site is more intuitive and easy to use. I added a post ad tab so that users are now able to just directly click that button if they want to add a posting. They do not need to go through many unnecessary steps anymore. I added a profile section on the right with a picture to instill trust. People are more trusting when they are able to see real faces of people. I changed the overall layout of the site to a more clean and minimalistic feel. </p>
      </div>
    </div>
    
</div> 

<?php the_content(); ?> 

  
<?php get_footer(); ?>  