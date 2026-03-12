<?php get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
  <section class="home-intro">
    <p class="section-label">Publicações recentes</p>
    <p>Visual direto, poucas cores, leitura confortável e foco total no conteúdo.</p>
  </section>
<?php endif; ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(is_singular() ? 'single-article' : 'post-card'); ?>>
      <p class="post-meta"><?php echo esc_html(get_the_date('d.m.Y')); ?><?php if (!is_singular()) : ?> · artigo<?php endif; ?></p>
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
          <a class="read-more" href="<?php the_permalink(); ?>">Ler artigo</a>
        <?php endif; ?>
      </div>
    </article>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>
<?php else : ?>
  <article class="post-card">
    <h2>Nada publicado ainda</h2>
    <p>Os primeiros textos vão aparecer aqui assim que forem publicados.</p>
  </article>
<?php endif; ?>

<?php get_footer(); ?>
