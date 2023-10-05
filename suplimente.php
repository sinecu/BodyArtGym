<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <head>
        <title>BodyArtGym</title>
    </head>
    <?php
        $servername = "localhost";
        $username = "id20321593_sups";
        $password = "Candsecocalunele123!";
        $database = "id20321593_protaine";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>
    <body>
        <header>
            <a href="index.html" class="logo">Body-Art GYM</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="index.html">Acasa</a></li>
                    <li><a href="despre.html">Despre</a></li>
                    <li><a href="abonamente.html">Abonamente</a></li>
                    <li><a href="galeriefoto.html">Galerie foto</a></li>
                    <li><a href="#" class="active">Suplimente</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('.menu-toggle').click(function(){
                    $('.menu-toggle').toggleClass('active')
                    $('nav').toggleClass('active')
                })
            })
        </script>
        <div class="container">
            <h1>Acestea sunt suplimentele pe care le comercializam in incinta salii! Achizitionarea acestora se face doar din magazinul de la intrarea in unitate! Pentru a rezerva ceea ce doresti sa cumperi de la noi poti suna la 0757140112. Pentru a vedea cate bucati mai avem in stock este destul doar sa ti mouse-ul deasupra sectiunii in care se afla fiecare supliment!</h1>
            <div class="shop">
                <div class="card">
                    <div class="img-card">
                        <img src="images/gfx.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=1";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>GFX-8</strong></p>
                        <p>Pret : 125 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/wpi.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=2";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>WPI</strong></p>
                        <p>Pret : 99 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/iso-whey-gold-1500g_1.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=3";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>Iso Whey Gold Edition</strong></p>
                        <p>Pret : 165 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/lipox_-_copy.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=4";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong> Lipox</strong></p>
                        <p>Pret : 97 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/creanabol-pudra_-_copy.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=5";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>Creanabol</strong></p>
                        <p>Pret : 59 LEI</p>
                    </div>
                </div>
            </div><div class="shop">
                <div class="card">
                    <div class="img-card">
                        <img src="images/creatine-pro-mass-1500g_3.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=6";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>Creatine Pro Mass</strong></p>
                        <p>Pret : 89 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/x-plode-plicuri_-_copy.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=7";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>X-plode plicuri</strong></p>
                        <p>Pret : 56 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/creatina-creapure-capsule_1.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=8";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?></div>
                    <div class="info-card">
                        <p><strong>Creatine (Creapure®) capsules</strong></p>
                        <p>Pret : 49 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/vegan-burning-effects_1.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=9";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>Vegan Protein Burning Effects</strong></p>
                        <p>Pret : 79 LEI</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="images/collagen-liquid-50000---orange2_1.jpg">
                    </div>
                    <div class="stock">
                        <?php
                            $sql = "SELECT stock FROM proteine WHERE id=10";
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["stock"];
                            }
                        ?>
                    </div>
                    <div class="info-card">
                        <p><strong>Collagen Liquid 50.000</strong></p>
                        <p>Pret : 86 LEI</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>