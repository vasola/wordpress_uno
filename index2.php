<?php get_header(); ?>
 

 <?php if (have_posts() ) {?>
  <?php while (have_posts() ) { 
the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    
  <?php }; ?> 
<?php }; ?> 

   

    
    
   <!-- Second block -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bootcamp" >
                <h2>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h2>
                <p class="text-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates beatae magni deleniti expedita harum quidem, ullam cum atque tenetur! Recusandae, dicta mollitia deserunt dolores. Natus totam soluta nostrum, ea fugiat.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <img src="img/viewing-gallery-for-happy-people.png" alt="People" class="img-responsive people">
    </div>
   <!-- Second block -->
   <!-- Third block -->
   <div class="information">
      <div class="container">
       <div class="row">
           <h3>SOLICITA INFORMACIÓN E INSCRÍBETE</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur sit culpa placeat eius voluptas tenetur consequuntur maiores, dolor ad accusamus vitae, aut atque dolorum! Laborum provident officiis non, aspernatur doloribus.</p>
           <button type="button" class="btn btn-primary">Inscríbete!</button>
       </div>
       </div>
   </div>
     <!-- Third block -->
     
    <?php get_footer(); ?>