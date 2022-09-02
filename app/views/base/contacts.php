 <?php $this->layout('_theme') ?>

 <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . BASE_STYLES . "/contactStyle.css") ?>">

 <main class="contactContainer">
   <section class="publicity">
     <div class='containerImage'>
       <img src="<?= urlProject(FOLDER_BASE . BASE_IMG . "/author_bg.jpg") ?>" alt="">
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

           <h1>Genérico</h1>

           <p>
             Director: Filipe Eduardo
           </p>
           <p>
             Director adjunto: Ismael Wakussanga
           </p>
           <p>
             Reportagem:
           </p>
           <ul class="list">
             <li class="item">
               <p>Alberto Domingos</p>
             </li>
             <li>
               <p>Edgar Muyegy</p>
             </li>
             <li>
               <p>Elmiro Bernardo</p>
             </li>
           </ul>

           <p>
             Paguinação e artes:
           </p>
           <ul class="list">
             <li>
               <p>Jurema Samuel e Elsa Eduardo
                 PUBLICIDADE E MARKETING</p>
             </li>
             <li>
               <p>Délcio Eduardo
                 COLABORAÇAO</p>
             </li>
             <li>
               <p>Domingos José</p>
             </li>
             <li>
               <p>Marcela Antonio</p>
             </li>
           </ul>

           <br>

           <div class="infoContainer">
             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-map"></i>
               </div>
               <p>
                 Rua 21 de Janeiro, junto a AngoMart.
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-regular fa-envelope"></i>
               </div>
               <p>
                 geral@pungoandongo.com
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-solid fa-phone"></i>
               </div>
               <p>
                 +244 924 010 200
               </p>
               <p>
                 +244 924 010 021
               </p>
               <p>
                 +244 998 912 410
               </p>
               <p>
                 +244 956 498 606
               </p>
             </div>

             <div class="info">
               <div class="iconContainer">
                 <i class="fa-solid fa-link"></i>
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