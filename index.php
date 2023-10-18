<?php 
  session_start(); 



  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>FCS</title>
    <link rel="stylesheet" href="style.css"> 


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="update_data.js"></script>

</head>

<body>
    

    <header class="top_part">
        
        <div class="header">
		
        <div class="welcome_user">
			<div class="avatar"> <img src="img/nume.png" alt="" width="30" height="30"></div>
			<div class="welcome_text">
			<p> <?php echo $_SESSION['username']; ?></p>
			</div>
		</div>

        <button class="logoutbtn">	
    	<a href="index.php?logout='1'">logout</a>
    

		</button>


            <a href="#"  class="header_logo"> 
                <img src="img/logo.png" alt="Logo" width="100" height="100" >        
            </a>
            <a href="#" class="frf_logo">
                <img src="img/frf.png" alt="Logo" width="260" height="100" >
            </a> 
            <ul class="menu_frame">
            <li class="nav_item">    
                <a href="#" class="nav_link">Acasa</a>
            </li>
            <li class="nav_item">
                <a href="#Despre_noi_section" class="nav_link">Despre Noi</a>
            </li>
            <li class="nav_item">
                <a href="#Regulament_section" class="nav_link">Regulament</a>
            </li>
                <div class="drop_down">
                    <button class="dropbtn">Licitatii 
                      </button>
                      <div class="dropdown-content">
                        <a href="#Tricouri">Tricouri</a>
                        <a href="#Stickere">Stickere & cartonase</a>
                        <a href="#Obiecte">Alte obiecte de colectie</a>
                      </div>
                    

                </div>
    

            </ul>

            

        </div>

    </header>

    <header class="banner">
        <img src="img/banner.png" class="banner_img" alt="Logo" width="800" height="450" >
        <div class="banner_social"></div>
    </header>

    <div class="backround">
        
    </div>
    <div class="Despre_noi_section" id="Despre_noi_section">
        <div class="Despre_noi_container">
        <h1>Despre Noi</h1>
        <div class="Despre_noi_textbox">
            <p>Scopul nostru este acela de a aduce fanii fotbalului romanesc mai aproape de mostenirile lasate de sportivi care au adus glorie tarii noastre.</p>
            <p>Cu ajutorul colaboratorilor nostrii am reusit sa pornim acest proiect unic in Romania . Multumim de asemenea persoanelor care au contribuit cu obiectele de colectie astfel incat utilizatorii nostri 
                sa se bucure de o experienta legendara .</p>
                <p>Ne propunem sa deschidem un muzeu fizic astfel incat obiectele care nu au fost inca incluse in licitatii sau nu s-au vandut sa poata fi admirate de oricine.</p>
                <p>Tot procesul de licitatie se executa conform legislatiei in vigoare .</p>
              <div class="Urare_textbox"><p> Va uram bun venit in <b>CASA FOTBALULUI ROMANESC</b> !</p></div>  
        </div>
       <img src="img/dnhagi.jpg" alt="hagi" class="dn_hagi" width="250" height="200">
       <img src="img/dnro.jpg" alt="romania" class="dn_ro94" width="250" height="200">
       <img src="img/dnsteaua.jpg" alt="romania" class="dn_steaua" width="250" height="200">
        
    </div>

    <div class="Regulament_section" id="Regulament_section">
        <div class="Regulament_container">
            <h1>Regulament</h1>
            <div class="Regulament_textbox">
                <p>1. Licitaţia este organizată de Federatia Romana de Fotbal în cadrul proiectului FCS şi condusă de unul sau mai mulţi membri din echipa FCS (licitator/licitatori).</p>
                <p>2. Obiectele și serviciile supuse licitaţiei aparţin, de regulă, unor deponenţi (consignanţi sau sponsorii) ce doresc să rămână anonimi.</p>
                <p>3. Deponenţii (consignanţi sau sponsorii), oferă cu titlu de sponsorizare obiectele și serviciile către proiectul SuperTeach. Sumele încasate ca urmare a licitației vor fi depuse în contul proiectului SuperTeach cu titlu de ”sponsorizare” și vor fi utilizate pentru buna desfășurare a proiectului.</p>
                <p>4. FC Sales prin proiectul FCS, publică pe site produsele și serviciile incluse în licitație cu informații complete: descrierea produluise/serviciului, suma de start, informații despre deponenți (sponsori). În cadrul licitaţiei se vor vinde numai obiectele și serviciile expuse şi descrise pe site, pe pagina dedicată licitației.</p>
                <p>5. Toate obiectele / serviciile ce se vor vinde vor fi trimise prin curier către cumpărători. </p>
                <p>6. Durata și programul licitației vor fi făcute cunoscute public în prealabil, prin site-ul nostru, precum şi prin alte căi de publicitate.</p>
                <p>7. Prețul minim oferit de către licitator va fi prețul de pornire.</p>
                <p>8. Niciun obiect sau serviciu nu se va vinde sub preţul de pornire, în timpul sau ulterior licitației. Obiectele nelicitate la momentul licitării lor iniţiale pot fi repuse în vânzare în cadrul şi în timpul licitaţiei, dacă un participant o solicită explicit.</p>
            </div>
        </div>
     </div>

     
     

     <div class="Tricouri_section" id="Tricouri"> 
        <div class="Tricouri_container">
            <h1>Tricouri</h1>


            <!-- (A) LIGHTBOX CONTAINER -->
            <script src="zoom.js"></script>
            <script src="countdown.js"></script>
            
            <div id="lightbox"></div>
 
            <!-- (B) THE IMAGES -->
        <div class="t_hagi">
            <h3>Tricou Gheorghe Hagi - CM 1994</h3>
            <img src="img/tricouri/hagi_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/hagi_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/hagi_3.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Tricoul celui mare mare jucator roman, purtat cu mandrie la cel mai bun parcurs al nationalei la un campionat mondial </p>
			</div>



                <div class="timer"></div>
                  
        </div>

        <div class="ro_70">
            <h3>Tricou Romania- CM 1970</h3>
            <img src="img/tricouri/ro70_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/ro70_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/ro70_3.PNG" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Un tricou primit de Pele dupa un schimb facut cu Cornel Dinu in urma meciului pierdut de Romania cu 3-2 in fata Braziliei, meci sustinut la CM 1970 din Mexic</p>
			</div>
        
        </div>

        <div class="steaua_76">
            <h3>Tricou Steaua Bucuresti- 1976</h3>
            <img src="img/tricouri/steaua76_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/steaua76_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/steaua76_3.PNG" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Tricou provenit de la RetrOriginal Football, care afirmă că tricoul a fost primit de un angajat al clubului FC Brugges în urma meciului tur dintre cele două echipe.</p>
			</div>
        
        </div>

        <div class="robanana">
            <h3>Tricou Romania("bruised banana") - 1993</h3>
            <img src="img/tricouri/robanana_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/robanana_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/tricouri/robanana_3.PNG" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Un tricou foarte rar cu model "bruised banana" tipic celor de la Arsenal purtat de Romania in  doar 3 meciuri in anul 1993: cu Coreea de Sud, Israel si Insulele Feroe</p>
			</div>
        
        </div>

        <div class="steaua_86">
            <h3>Tricou Steaua Bucuresti- 1986</h3>
            <img src="img/tricouri/steaua86_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/tricouri/steaua86_2.jpg" class="zoomD" width="200" height="200">
            <img src="img/tricouri/steaua86_3.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Tricou purtat de Ladiszlau Boloni in sezonul in care Steaua Bucuresti a reusit sa cucereasca Cupa Campionilor Europeni</p>
			</div>
        
        </div>







        </div>

     

     
     <div class="product_container">
     

    </div>
    </div>

    <div class="Stickere_section" id="Stickere"> 
        <div class="Stickere_container">
            <h1>Stickere & Cartonase</h1>
        </div>


        <div class="hagi98">
            <h3>Cartonas Gheorghe Hagi - CM 1998</h3>
            <img src="img/stickere/hagi98_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/stickere/hagi98_2.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Gheorghe Hagi card Panini de colectie de la Mondialul din 1998 din Franta</p>
			</div>
        
        </div>
        <div class="popescu98">
            <h3>Cartonas Gheorghe Popescu - CM 1998</h3>
            <img src="img/stickere/popescu_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/stickere/popescu_2.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Gheorghe Popescu card Panini de colectie de la Mondialul din 1998 din Franta</p>
			</div>
        
        </div>
        <div class="ro">
            <h3>Sticker Echipa Nationala - CM 1998</h3>
            <img src="img/stickere/ro_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/stickere/ro_2.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Sticker cu Echipa Nationala de la acelasi Campionat Mondial. Romania iesea neinvinsa dintr-o grupa cu Tunisia, Anglia si Columbia. Parasea competitia in faza urmatoare in dauna Croatiei </p>
			</div>
        
        </div>

        <div class="ro08">
            <h3>Cartonase Echipa Nationala- EURO 2008</h3>
            <img src="img/stickere/ro08_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/stickere/ro08_2.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>O colectie cu mai multe cartonase cu jucatorii care au compus lotul Romaniei la EURO 2008</p>
			</div>
        
        </div>
    </div>   

    <div class="Obiecte_section" id="Obiecte"> 
        <div class="Obiecte_container">
            <h1>Alte Obiecte de colectie</h1>
        </div>

        <div class="duckadam">
            <h3>Manusile lui Helmuth Duckadam - 1986</h3>
            <img src="img/colectie/duckadam_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/colectie/duckadam_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/colectie/duckadam_3.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Perechea legendara de manusi cu care Duckadam a aparat cele 4 penalty-uri la Sevilla in 86' in finala cu FC Barcelona. Astfel Steaua devenea castigatoarea Cupei Campionilor </p>
			</div>
        </div>
        <div class="ghete">
            <h3>Ghetele lui Gheorghe Hagi - EURO 2000</h3>
            <img src="img/colectie/ghete_1.PNG" class="zoomD" width="200" height="200">
            <img src="img/colectie/ghete_2.PNG" class="zoomD" width="200" height="200">
            <img src="img/colectie/ghete_3.png" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Pereche de ghete cu crampoane purtata de Gheorghe Hagi la Campionatul European din 2000, ultimul turneu a lui Hagi.</p>
			</div>
        </div>

        <div class="arges">
            <h3>Articol ziar Arges-Real Madrid (1972)</h3>
            <img src="img/colectie/arges_1.jpg" class="zoomD" width="200" height="200">
            <img src="img/colectie/arges_2.jpg" class="zoomD" width="200" height="200">
            <img src="img/colectie/arges_3.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Articolul aparut in ziarul Sportul , dupa magnifica victorie a celor de la FC Arges in fata celor de la Real Madrid. In urma acestui meci, Dobrin ar fi primit o oferta de contract din partea madrilenilor</p>
			</div>
        </div>
        <div class="craiova">
            <h3>Bilet meci Craiova-Benfica (1983)</h3>
            <img src="img/colectie/craiova_1.png" class="zoomD" width="200" height="200">
            <img src="img/colectie/craiova_2.jpg" class="zoomD" width="200" height="200">
            <img src="img/colectie/craiova_3.jpg" class="zoomD" width="200" height="200">
            <div class="description">
                <p>DESCRIERE</p>  
                <p>Un alt meci legendar incheiat de Craiova Maxima la egalitate cu marea echipa portugheza Benfica. Un meci jucat pe stadionul din Craiova in prima mansa a semifinalei de Cupa UEFA sezonul 82-83'</p>
			</div>
        </div>




    </div>  
    <?php
    // Include the file that connects to your database
    require_once('connect.php');

    // Fetch the data from the 'products' table
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    // Check if there are any products in the database
    if ($result->num_rows > 0) {
        // Display all the products in separate containers
        $count = 0;
        while($row = $result->fetch_assoc()) {
            if ($count == 0) {
                // Open a new container for the first 5 products
                echo '<div class="product-container-first">';
            } elseif ($count == 5) {
                // Close the previous container and open a new one for the next 4 products
                echo '</div><div class="product-container-next">';
            } elseif ($count == 9) {
                // Close the previous container and open a new one for the last 4 products
                echo '</div><div class="product-container-last">';
            }
            // Display each product in a separate div
            echo '<div class="product">';
            echo '<p># '.$row['id'].'</p>';
            if($row['last_user_to_bid']=='admin') { 
                echo '<p>Pret de start: '.$row['bid'].' €</p>';
            } else {
                echo '<p>Ultimul licitant: '.$row['last_user_to_bid'].'</p>';
                echo '<p>Suma curenta: '.$row['bid'].' €</p>';
            }
            // Add a form for the user to submit a new bid
            echo '<form action="update_bid.php" method="post">';
            echo '<input type="hidden" name="product_id" value="'.$row['id'].'">';
            echo '<input type="number" name="new_bid" placeholder="Noua suma">';
            echo '<input type="submit" name="submit_bid" value="Liciteaza">';
            echo '</form>';
            echo '</div>';
            $count++;
        }
        // Close the last container
        echo '</div>';
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $conn->close();
?> 



    


     
    
    </body>
    </html>
    
    






</html>
</html>