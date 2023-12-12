<?php
    require('configuration/config.php');
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }

    //get all info using the 'id'

    //form user Table
    $sql="SELECT * FROM user WHERE userId = '$id'";
    
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $userName=$result['name'];
    $email=$result['email'];            
    $num=$result['phoneNum'];
    $about=$result['about'];
    $userimg=$result['image'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/portfolio.css">
    <title>Portfolio</title>
</head>
<body>
    <!--
        nav bar
    -->
    <header>
        <nav>
            <ul>
                <li>
                    <a href="" target="_parent">ODEH</a>
               </li>
                <li>
                     <a href="#aboutMe" target="_parent">About Me</a>
                </li>
                <li>
                    <a href="#education" target="_parent">Education</a>
               </li>
                <li>
                    <a href="#projects" target="_parent">Projects</a>
                </li>
                <li>
                    <a href="#contact" target="_parent">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>

    <!--brief and img-->

    <div class="body">
            <img src="img/<?php echo($userimg); ?>" alt="picture of me" class="circular-img">
            <span class="p">
                HELLO
            </span>
            <h2>
                <sapn>I'm <?php echo($userName); ?></sapn>
            </h2>
            <h4>
                <span>WEB DEVELOPR <br><br> <a href="C:\Users\aboodOdeh\Desktop\files\ALL FILLES\CV\Abd Alrahman cv.pdf" download="YourCV.pdf" class="download-button" target="_parent">Download CV</a></span>
            </h4>
        </div>
    <div class="about">
        <h2 id="aboutMe">
            About me
        </h2>
        <p>
            <?php echo($about); ?>
        </p>
    </div>

    <!--education-->
    <div class="body" id="education">
        <h2>
            Education
        </h2>
        <!-- <div class="grid">
            <div class="grid-item">
                <img src="just.png" alt="just logo" class="img-just" style="float:center ;"><br>
                <b>1.Jordan University of Science and Technology:</br> <ins>2020</ins>-<ins>now</ins></b>     
            </div>
            <br>
                I'm currently in my fourth year of studying computer science with a specialization in web development. Throughout my academic journey,
                I've gained a strong foundation in computer science principles and honed my skills in web development technologies such as HTML, CSS, PHP, and Laravel.
                I'm passionate about creating responsive and user-friendly websites and excited to apply my knowledge to real-world projects.
        </div> -->
        <?php
            //from education Table
            $sql="SELECT * FROM education WHERE userId = '$id'";
            
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $count=1;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $row['startDate']=substr($row['startDate'], 0, 4);
                $row['endDate']=substr($row['endDate'], 0, 4);
                echo('<div class="grid">');
                echo('<div class="grid-item">');
                echo('<img src="img/'.$row['image'].'" alt="logo" class="img-just" style="float:center ;"><br>');
                echo('<b>'.$count++.'.'.$row['name'].':<br><ins>'.$row['startDate'].'</ins> - <ins>'.$row['endDate'].'</ins></b>');
                echo('</div><br>');
                echo(" I'm currently in my fourth year of studying computer science with a specialization in web development. Throughout my academic journey,
                I've gained a strong foundation in computer science principles and honed my skills in web development technologies such as HTML, CSS, PHP, and Laravel.
                I'm passionate about creating responsive and user-friendly websites and excited to apply my knowledge to real-world projects.<br>");
                echo('</div>');
            }
        ?>
        <br>
        <div class="grid">
            <div class="grid-item">
                <img src="pioneer.png" alt="pioneer logo" class="img-just" style="float:center ;"><br>
                <b>2.Pioneer Educational Schools:</br> <ins>2014</ins>-<ins>2020</ins></b>     
            </div>
            <br>
                I'm currently in my fourth year of studying computer science with a specialization in web development. Throughout my academic journey,
                I've gained a strong foundation in computer science principles and honed my skills in web development technologies such as HTML, CSS, PHP, and Laravel.
                I'm passionate about creating responsive and user-friendly websites and excited to apply my knowledge to real-world projects.
        </div>

    </div>

    <div class="body">
        <h2>
            Skills
        </h2>
        <!---->
        <div class="grid">
            <!-- <div class="grid-item">
                <img src="c++-removebg-preview.png" alt="c++ logo" title="c++">
                <p>C++,Obj,Data Structure,Algorithms</p>
            </div>
            <div class="grid-item">
                <img src="html5.png" alt="html_5 logo" title="html5">
                <p>Creating the Structure of the Page </p>
            </div>
            <div class="grid-item">
                <img src="css.png" alt="css logo" title="css">
                <p>Giving a skin to the page</p>
            </div>
            <div class="grid-item">
                <img src="mysql.png" alt="data base logos" title="data base">
                <p>Creating collection of data, Tables</p>
            </div>
            <div class="grid-item">
                <img src="bootsrap.svg" alt="bootsrap logo" title="bootsrap">
                <p>Creating an responsive pages</p>
            </div>
            <div class="grid-item">
                <img src="laravel.png" alt="laravel logo" title="laravel">
                <p>Learning The Basics of Laravel</p>
            </div> -->
            <?php
            //from education Table
            $sql="SELECT * FROM skills WHERE userId = '$id'";
            
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo('<div class="grid-item">');
                echo('<img src="img/'.$row['image'].'" alt="logo">');
                echo('<p>'.$row['skill'].'</p>');
                echo('</div>');
            }
            ?>
        </div> 
    </div>

    <!--projects  with download cv button-->
    <div class="body" id="projects">
        <h2>
            Projects 
        </h2>
        <div class="grid2">
            <div class="box">
                <a href="https://github.com/AbdAllrhman-odeh/Projects/tree/main/html101/LEC%2027" target="_self"><img src="p1.png" alt="Project 1"></a>
                <p>Cv as webPage</p>
                <span> <a href="https://github.com/AbdAllrhman-odeh/Projects/tree/main/html101/LEC%2027"  class="download-button" target="_parent">github link</a></span>
            </div>
            <div class="box">
                <a href="https://github.com/AbdAllrhman-odeh/Projects/tree/main/html102/lec%202.12" target="_self"><img src="p2.png" alt="Project 2"></a>
                <p>Navigation bar</p>
                <span> <a href="C:\Users\aboodOdeh\Desktop\files\ALL FILLES\CV\Abd Alrahman cv.pdf"  class="download-button" target="_parent">github link</a></span>
            </div>
            <div class="box">
                <a href="https://github.com/AbdAllrhman-odeh/Projects/tree/main" target="_self"><img src="p3.png" alt="Project 3"></a>
                <p>Image mapping</p>
                <span> <a href="C:\Users\aboodOdeh\Desktop\files\ALL FILLES\CV\Abd Alrahman cv.pdf"  class="download-button" target="_parent">github link</a></span>
            </div>
            <br>
        </div>
        <!-- <p>
            <a href="https://github.com/AbdAllrhman-odeh/Projects" title="link on gethup">HTML-CSS-PHP projects</a>
            
        </p> -->
    </div>
    
    <footer>
        <div class="footer-column">
            <p> &copy; 2023 Odeh. All rights reserved.</p>
        </div>
        <div class="footer-column">
            <a href="https://www.facebook.com/aboodwadi80" target="_blank">
                <img class="img-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLhqR2xnHK3FqtVhs0abX2l6e583hAuqRiOz161P1PTA&s" alt="facebook logo">
            </a>
            <a href="https://twitter.com/aboodOdeh02" target="_blank">
                <img class="img-logo" src="data:image/png;base64,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" alt="x logo">
            </a>
            <a href="www.linkedin.com/in/abdallrhman-odeh-375275249" target="_blank">
                <img class="img-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAY1BMVEUKZsL///8AU70AULvd5vT2+PwAXL8AY8EAX8CvwOM4d8i8zekAWL4AVr2JptkAYcB5m9XD0uuBoddijtAcbMTo7vdSgsybsd6gueFdhczO2e5FeMg1c8aTrdwATLqqvOJylNIEZqa6AAAE4ElEQVRogcWb6ZqqMAyGC0KLspQdBz0493+VB8oqkJKyTL9/qI8vTbckTYmhLtuK7kWc5I+UEJI+8iQu7pG1448Movh7yw3ejDvU4ZyRVoyLZ/YOXNVXUKFnZfhintNT52KOx15hmV1Cj8LUBMnjG5hpGJ1NzwLu8w1yL+6zAGkAFD3KKweJbuVUOcoACHr0pthmTwxA3+4J9DL3tjp7XczLy4N0K/HU2z2030s2pqCcXtz2swX/Vuyml4QeYjeiRGZ+CT2g+zr8W4wGO+jZ43jDW9EHOPshesSP9fhUnEOTH6A//dPYjfynCj08F17jQzz956wuH0V/kHT7AniDtzH0a+Dr+CX9Iviq8Rf0y+Br+Dk9vA5e4+cjf0Y/eZ7PNZ/33/ToWniNj2B6dt7qColnIP3xB/QHRA+uHHG9vjbcCb38C3iNL1fp5AxnYluMrNGLv2l63fhiSbdu0LtSc59AT/xmLegJMN7p627t0z0HrMmTOb30AHhs7Nc/AO/1A6+n5+tNZ/kBOGhQ3v9rR4+gpt8P0Utg5faiL/obGCHmroTIIBsYyuw9pUfQbLuITmg0oQO9fh2963lBzyrgR5fRSZUN9ADMTMzoK27pTroTDHR4Y53S3XdVeYHSC8B0wnu6xKOZ0GOxctJUJSMmoQsvp6GHmLa73YrgqKw/sraHLT1LwZ9M6MP+WykMRAmdNEas6aWJoNvDtKBAPKpKN0tBDyW5uIGeDa/o/DuH7oSC/pL4NKPlh7Z7iDwchs5eDd2SOVQjPektZOLhUjphVk13ge1tRs+6VIr3OYteG5FIFrovumER0+H0pjDmNuj1ckfAzXVOr1elIHiqrbVyy78NYku+v3CXEXibWNLo6VI6t0gkzbzj6ba90ilyuhORuzSImIz5wVNu/7d/EptOGecpS1+/RaZCp3dSINv+qXyhW+sNuZUpHqs6MCnfN3FAxTit8gxPdwoSI/u9txFrQ2C3e+l61X9Ojy64U6LpPCZQDIOlf9zvrmPEQtMTkksj1006XyxWzg+WznLykH2/TSfLYTMJ0OX0mi1xLVD0pZwQS5ezkXTmmZ4/7f2/pDt5E2M/x9QHt5D0LSHofQLSGl8nQtOP9jtL57+YBL6blj865unobVSLjzbH/MH5TsxxaU27vxrTQpvz/eBaR6oBPmQqRq93c607uM4Tf6T/qtJj9B4H0flIDxXp9R6H3d/BMb+fXu/vWN/mAnrt22D9ugvotV9nHJxxB+gM78+r0AMUvfHnsbHM+XQRyyDjuPPpIo5DxrAXWN7Cx++n09v4HZe7OJ/e5S5QeZvz6V3eBpezOp3e5axw+bqz6X2+Dper/JiOEG1T667fPdIJ3Ws/8zH0IVcpWWxHehkHrdpl1OofJ0eL9+6z2EXQhc3UctSqQuWo9ebn9Z5NaD6X0XsmBW50KknZFVnAXKbuFx08i1wtUELrF3cWCZ/DKuTDF/pgz2HhM+iktPep/EWfQcPn79y77RNYfLxy/q639kBz3YXmmhO99Taaa40011nprTHTXF+nubZQc12l5ppSzfW0emuJrzE+uo7a0FxDrrl+XvPdAc33Jgy9d0YMzfdlDL13hQzN96SMI3fE6OE7Yo103o8TfI13AxvpvBcppPFOqJDO+7Ct9N0F7jXeg04P3oP+DzWKWOQKLQ+uAAAAAElFTkSuQmCC" alt="Linkedin logo">
            </a>
        </div>
        <div class="footer-column">
            <p> Email:<a href="mailto:aboodwadi80@gmail.com"><?php echo($email); ?></a><br>
                Number:<?php echo($num); ?></p>
        </div>
    </footer>

    <script>
        const hamburgerMenu = document.querySelector(".hamburger-menu");
        const navUl = document.querySelector("header nav ul");

        hamburgerMenu.addEventListener("click", function () {
        navUl.style.display = (navUl.style.display === "block") ? "none" : "block";
        });
    </script>
</body>
</html>


