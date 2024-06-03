<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php endwhile; ?>
    <!-- hero -->
    <div class="div-foto1" id="home">
      <!-- <img class="foto1" src=" <?php bloginfo('template_url'); ?>/images/index.png" alt="" /> -->
      <video class="foto1" width="640" height="360" autoplay muted loop>
        <source src=" <?php bloginfo('template_url'); ?>/images/home.mp4" type="video/mp4" />
      </video>
    </div>



    <!-- fim hero -->
    <!-- SOBRE -->
    <div class="titre-sobre">
      <h2 id="qualidade">cravates de haute qualité et service exceptionnel</h2>
    </div>
    <div class="sobre container-flex">
      <p class="col1-sobre" data-aos="fade-left">
        Nos cravates sont fabriquées avec les meilleurs matériaux, garantissant
        non seulement un look élégant mais aussi une durabilité exceptionnelle.
        Chaque pièce est soigneusement conçue pour refléter les dernières
        tendances mode, offrant une variété de styles pour compléter n'importe
        quel placard.
        <br />
        <br />
        De plus, notre engagement envers la satisfaction du client est évident
        dans chaque interaction. Notre service personnalisé et attentif garantit
        que chaque client se sent valorisé et respecté. Avec une combinaison de
        des produits de qualité et un service client inégalé, Nous nous
        efforçons de fournir une expérience d'achat supérieure.
      </p>
      <div class="qualidade2">
        <img
          src=" <?php bloginfo('template_url'); ?>/images/qualidade.png"
          alt="qualidade"
          class="col2-gravatas"
          data-aos="fade-right"
        />
      </div>
    </div>
    <!-- fim sobre -->
    <!-- SOBRE NOS  -->
    <div class="sobre-nos container-flex">
      <div class="col1-sobrenos" data-aos="fade-right">
        <h2 id="sobre">à propos de nous</h2>
        <p>
          Fondée sur une passion pour l'élégance et un engagement envers
          l'excellence, EV Gravatas s'est rapidement imposé comme une référence
          dans le monde de la mode masculine. Depuis notre création en 2024,
          nous sommes fiers de proposer une sélection impeccable de cravates,
          chacune représentant le le summum de l'artisanat et du design. Nos
          clients sont des hommes de distinction, qui savent que le pouvoir
          d'une cravate va au-delà du tissu et de couleur - c'est une extension
          de votre personnalité et un symbole de vos goûts raffiné. Dans notre
          quête incessante de perfection, chaque EV égalise Les cravates sont
          une œuvre d'art, fabriquées avec les meilleurs matériaux et une
          attention méticuleuse aux détails.
          <br />
          Nous proposons une variété allant des classiques intemporels aux
          tendances contemporaines, garantissant que chaque client trouve la
          bonne pièce qui parle directement de votre style unique.
        </p>
      </div>
      <div class="col2sobrenos" data-aos="fade-left">
        <img src=" <?php bloginfo('template_url'); ?>/images/sobrenos.png" alt="sobrenos" />
      </div>
    </div>
    <!-- fim sobre nos -->
    <!-- inicio nossos produtos-->
    <div class="produtos" id="produto">
      <div class="h2-produtos">
        <h2>nouveauté</h2> 
      </div>
        <div class="container-flex produtos" >
          
  
     
        <?php 
$args = array(
    'post_type' => 'post', // Alterado de 'product' para 'post'
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'cravates' // Substitua 'sua-categoria' pelo slug da categoria desejada
);

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="item-flex col1-gauche">
            <!-- <a href="<?php // the_permalink(); ?>"> enlever le comentaire quand instaler le plugin woocommerce -->
            <div data-aos="flip-left"> <?php the_post_thumbnail("medium"); ?></div>
            </a>
        </div>
    <?php endwhile; 
    wp_reset_postdata();
endif;
?>
    </div>
    <!-- fim nossos produtos  -->
    <!-- <h2>fale conosco</h2> -->
    <div class="contact" id="contact">
      <div class="imgcontato">
        <img src=" <?php bloginfo ('template_url'); ?>/images/logocontato.png" alt="Logo" class="logocontato" />
      </div>
      <div class="h2contatos">
        <br />
        <br />
        <div class="iphone" data-aos="zoom-in-left">
          <img src=" <?php bloginfo ('template_url'); ?>/images/celular.png" alt="iphone" class="celular" />
          <div class="formulario">
            <form>
              <label for="nome">nom:</label>
              <input type="text" id="nome" name="nome" required /><br /><br />
              <label for="ev-gravatas">email:</label>
              <input
                type="email"
                id="ev-gravatas"
                name="ev-gravatas"
                required
              /><br /><br />
              <label for="telefone">Téléphone:</label>
              <input
                type="tel"
                id="telefone"
                name="telefone"
                required
              /><br /><br />
              <label for="mensagem">message:</label>
              <textarea id="mensagem" name="mensagem" required></textarea
              ><br /><br />
              <input class="botao" type="submit" value="FALE CONOSCO" />
            </form>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>