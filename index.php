<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>
      
      <ul class="container">
        
        <?php
          $category = get_the_category($post_id);
          foreach($category as $cat)
          {
        ?>
          <li>
            <a class="cat" href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name ?></a>
          </li>
          <?php
            }
          ?>
      </ul>


      <div class="content container">
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
      </div>
      <div class="author">
        <div class="container">Por: <a href="http://fabian.mx" class="link blanco"><?php the_author(); ?></a>, <?php the_date();?>.</div>
      </div>
    </article>

<?php endwhile; ?>

<?php else : ?>

  <h2 style="margin: 60px 0;">Página no encontrada</h2>

<?php endif; ?>

    <section id="comentarios">
      <div class="container">
        <h4>Habla ahora o calla para siempre</h4>
        <div class="facebook">
          
          <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="3" width="700"></div>

        </div>
      </div>
    </section>

    <div class="navegacion">
      <div class="container">
        <div class="anterior">
          <?php previous_post_link('<p>Anterior</p><h3>%link</h3>'); ?>
        </div>
        <div class="siguiente">
          <?php next_post_link('<p>Siguiente</p><h3>%link</h3>'); ?>
        </div>
      </div>
      <div style="clear: both;"></div>
    </div>

<?php get_footer(); ?>