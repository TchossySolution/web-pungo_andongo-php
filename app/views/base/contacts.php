 <?php $this->layout('_theme') ?>

 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/contactStyle.css")?>">

 <main class="contactContainer">
   <section class="publicity">
     <div class='containerImage'>
       <img src="<?=urlProject(FOLDER_BASE . BASE_IMG . "/author_bg.jpg")?>" alt="">
     </div>
     <div class="indicateContainer">
       <div class="container">
         <a href=""> Home </a>
         <span> » </span>
         <a href=""> Contactos </a>
       </div>
     </div>
   </section>


   <div class="container">
     <div class="containerAllContent">
       <div class="containerLeft">
         <div class="geralInfoContainer">
           <h4>
             Como podemos ajudá-lo
           </h4>

           <h1>Informações do escritório</h1>

           <p>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sapiente inventore. Alias voluptatum
             tenetur blanditiis dolorem iste deserunt porro, amet nobis dicta ullam quis provident itaque quidem ipsa
             adipisci maiores!
           </p>

           <br>

           <div class="infoContainer">
             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-comment-dots"></i>
               </div>
               <p>
                 Rua 21 de Janeiro, junto a AngoMart.
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-comment-dots"></i>
               </div>
               <p>
                 info@pungoandongo.com
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-comment-dots"></i>
               </div>
               <p>
                 +244 923 414 621
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-comment-dots"></i>
               </div>
               <p>
                 www.pungoandongo.ao
               </p>
             </div>
           </div>
         </div>
       </div>

       <div class="rightContainer">
         <form action="" method="post" class="formContact">
           <h1>
             Deixe um recado
           </h1>

           <input type="text" placeholder="Nome*" class="inputForm">
           <input type="text" placeholder="E-mail*" class="inputForm">
           <input type="text" placeholder="Sujeito*" class="inputForm">

           <textarea name="" id="" cols="30" rows="6" placeholder="Sua Mensagem*">

           </textarea>

           <div>
             <button>
               Envie agora
             </button>
           </div>
         </form>

       </div>

     </div>

     <div class="mapContainer">
       <i></i>
     </div>
   </div>
 </main>