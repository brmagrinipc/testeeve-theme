<?php get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
  <section class="home-intro">
    <p class="section-label">Feed principal</p>
    <p>Estética crua, poucas cores, poucos recursos e foco total em texto, leitura e imagem dos artigos.</p>
  </section>
<?php endif; ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(is_singular() ? 'single-article' : 'post-card'); ?>>
      <p class="post-meta"><?php echo esc_html(get_the_date('d.m.Y H:i')); ?> / <?php echo is_singular() ? 'arquivo' : 'post'; ?></p>
      <?php if (is_singular()) : ?>
        <h1><?php the_title(); ?></h1>
      <?php else : ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php endif; ?>

      <?php if (has_post_thumbnail()) : ?>
        <figure class="post-thumb">
          <?php if (is_singular()) : ?>
            <?php the_post_thumbnail('large'); ?>
          <?php else : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          <?php endif; ?>
        </figure>
      <?php endif; ?>

      <div class="entry-content">
        <?php if (is_singular()) : ?>
          <?php the_content(); ?>
        <?php else : ?>
          <?php the_excerpt(); ?>
          <a class="read-more" href="<?php the_permalink(); ?>">Abrir texto</a>
        <?php endif; ?>
      </div>
    </article>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>
<?php else : ?>
  <article class="post-card">
    <h2>Sem conteúdo ainda</h2>
    <p>Os textos publicados vão aparecer aqui em sequência cronológica.</p>
  </article>
<?php endif; ?>

<?php get_footer(); ?>
