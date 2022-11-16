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
                    <th>scheme_name</th>
                    <th>scheme_provider</th>
                    <th>asset_class</th>
                    <th>admin_code</th>
                    <th>active_investors</th>
                    <th>total_fund_inv</th>
                   
                    
                </tr>
                <?php 
                include ("scheme1.php");
                ?>
        
        </table>
        
          </div>
          </div>

      </section>
      <form action="scheme_insert.php" class="form" method="POST">

                <h2>Enter the property details</h2>
                <div class="inputdiv">
                    <input type="text" name="scheme_name" id="scheme_name" required>
                    <label for="userlogin">scheme_name</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="scheme_provider" id="scheme_provider" required>
                    <label for="userlogin">scheme_provider</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="asset_class" id="asset_class" required>
                    <label for="userlogin">asset_class</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="admin_code" id="admin_code" required>
                    <label for="userlogin">admin_code</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="active_investors" id="active_investors" required>
                    <label for="userlogin">active_investors</label>
                </div>
                <div class="inputdiv">
                    <input type="text" name="total_fund_inv" id="total_fund_inv" required>
                    <label for="userlogin">total_fund_inv</label>
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