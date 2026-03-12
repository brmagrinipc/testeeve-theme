<?php get_header(); ?>
<div class="site-wrap">
  <section class="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <a class="btn" href="<?php echo esc_url(admin_url()); ?>">Entrar no painel</a>
    <div class="grid">
      <div class="card">
        <h3>WordPress pronto</h3>
        <p>Instalação configurada com SSL, admins e estrutura inicial.</p>
      </div>
      <div class="card">
        <h3>Tema customizado</h3>
        <p>Base visual inicial para evoluir o projeto rapidamente.</p>
      </div>
      <div class="card">
        <h3>Plugin customizado</h3>
        <p>Inclui CPT de avisos e shortcode de status.</p>
        <?php echo do_shortcode('[testeeve_status]'); ?>
      </div>
    </div>
    <footer>TesteEve • <?php echo esc_html(home_url()); ?></footer>
  </section>
</div>
<?php get_footer(); ?>
