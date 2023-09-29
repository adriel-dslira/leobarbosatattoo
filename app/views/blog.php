<?php include_once './inc/header.php';?>


        <div class="first_call word limitator">
            <h1 class="word animate-lettersTitle word limitator">Aprenda sobre o mundo de <span style="color: #F0B648; font-style: italic; font-weight: 800;" class="">TATUAGENS</span> com o nosso Blog.</h1>

            <!-- <p class="animate-lettersText ">Assuntos diversos:</p> -->
            <ul class="subject" >
                <li><a href="" class="commonLink">Curiosidades</a></li>
                <li><a href="" class="commonLink">Cuidados</a></li>
                <li><a href="" class="commonLink">Técnicas</a></li>
                <li><a href="" class="commonLink">Estilos</a></li>
                <li><a href="" class="commonLink">Histórias</a></li>
                <li><a href="" class="commonLink">Dicas</a></li>

            </ul>

            <div class="searchBlog">
                <form action="" class="">
                    <div>
                        <input type="text" placeholder="Pesquisar">
                        <button type="submit"><span class="material-symbols-outlined">search</span></button>
                    </div>
                </form>
            </div>

            <!-- <button class="btn_one animate-lettersButton"><a href="portfolio commonLink">Visualizar Portfólio</a></button> -->
        </div>
    </div>
</section>

<main>
<section class="blog">
    <h2>Posts Recentes - Blog</h2>
    <span class="separator_orange"></span>

    <article class="card_post">
        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div> 

        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div> 

        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div>

        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div> 

        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div> 

        <div>
            <img src="public/img/blog/moca_tatuada.jpg" alt="">
            <div class="content">
                <p class="date">06/08/2023</p>
                <h3>Cuidados com tatuagem</h3>
                <p class="text">Projetos exclusivos feitos para você 
                exibir por aí.Apaixonado por arte e criação desde 
                a infância, decidi seguir a minha paixão
                em dar formas aos desenhos, na pele das
                pessoas.
                </p>
            </div>
            
        </div> 

        <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    </article>
    <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    
</section>


</main>



<?php include_once './inc/footer.php';?>


    
<script src="public/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

    const windowWidth = window.innerWidth;

    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // slidesPerView: 3,
    // spaceBetween: 30,
    //    pagination: {
    //      el: ".swiper-pagination",
    //      clickable: true,
    //    },


     // Verifica se a largura da janela é maior ou igual a 728 pixels
    slidesPerView: windowWidth >= 1200 ? 4 : windowWidth >= 728 ? 3 : 1,
    spaceBetween: windowWidth >= 1200 ? 60 : windowWidth >= 728 ? 30 : 0,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

        // Autoplay settings
    autoplay: {
        delay: 3000, // Defina o intervalo de tempo em milissegundos (3 segundos neste caso)
    },

  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

</body>
</html>