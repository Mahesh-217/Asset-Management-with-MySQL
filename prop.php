<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bonds_style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="typed.js"></script>
    <title>Document</title>
</head>
<body>
    <!--<script src="script.js"></script>
    <div id="navigation">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <ul class="nav" id="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
        </ul>
    </div>
    <div class="maincontent">
        <p style="color: white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, beatae, blanditiis, dolores iste est nulla voluptatem voluptatum reprehenderit sit doloremque recusandae aut fugiat eos delectus? Optio unde quo reprehenderit distinctio?</p>
    </div>-->
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Asset Management</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
            <a href="../user_index/user_index.html">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Stats</span>
            </a>
            <span class="tooltip">Stats</span>
          </li>
          <li>
           <a href="#">
             <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
           </a>
           <span class="tooltip">User</span>
         </li>
         
         <li>
           <a href="#">
             <i class='bx bx-cart-alt' ></i>
             <span class="links_name">Orders</span>
           </a>
           <span class="tooltip">Orders</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Settings</span>
           </a>
           <span class="tooltip">Settings</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <div class="name_job">
                 <div class="name">Sketch</div>
               </div>
             </div>
            
         </li>
        </ul>
      </div>
      <section class="home-section">
          <div class="text">
            <div class="maincontent">
              <table>
                <tr>
                    <th>scheme_code</th>
                    <th>investor_code</th>
                    <th>prop_type</th>
                    <th>buying_price</th>
                    <th>cur_selling_price</th>
                    <th>total_growth_value</th>
                   
                    
                </tr>
                <?php 
                include ("prop1.php");
                ?>
        
        </table>
        
          </div>
          </div>

      </section>
      <form action="prop_insert.php" class="form" method="POST">

                <h2>Enter the property details</h2>
                <div class="inputdiv">
                    <input type="text" name="scheme_code" id="scheme_code" required>
                    <label for="userlogin">scheme_code</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="investor_code" id="investor_code" required>
                    <label for="userlogin">investor_code</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="prop_type" id="prop_type" required>
                    <label for="userlogin">prop_type</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="buying_price" id="buying_price" required>
                    <label for="userlogin">buying_price</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="cur_selling_price" id="cur_selling_price" required>
                    <label for="userlogin">cur_selling_price</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="total_growth_value" id="total_growth_value" required>
                    <label for="userlogin">total_growth_value</label>
                </div>
            
                <input type="submit" value="submit" class="submitbtn">
            </form>
            </form>

      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
    
      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });
    
      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });
    
      // following are the code to change sidebar button(optional)
      /*function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
       }
      }*/

      let typed = new Typed('.typeele',{
            strings:["Welcome!"],
            typeSpeed: 100,
            backSpeed: 40,
            loop: false
        });

        let typed1 = new Typed('.typeele1',{
            strings:["Please use the sidebar to navigate through the page..."],
            typeSpeed: 100,
            backSpeed: 40,
            startDelay: 1300,
            loop: false
        });
      </script>
      
</body>
</html>