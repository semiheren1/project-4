<!doctype html>
<html>
<head>
    <!-- Dit is een link naar mijn stylesheet -->
    <link href ="stylesheet.css" rel="stylesheet" type="text/css">
    <title>	  Home	</title>
</head>
<body>
<!-- Container bevat de gehele pagina, dit was nodig omdat ik de breedte van de inhoud wilde beperken met 20% -->
<div class="container">

    <!-- Hier begint de navigatie -->
    <div class="navbar">

        <!-- Dit zorgt ervoor dat mijn logo aan de linker kant blijft -->
        <div class="logodiv">

            <!-- Dit is de logo -->
            <img class="logo" src="pictures/logo1.png">
        </div>

        <!-- Navbar content is de inhoud van de navigatie -->
        <div class="navbar-content">

            <!-- Home Menu hyperlink -->
            <a href="index.html">Home</a>

            <!-- Dit is mijn 1e uitklapbare menu -->
            <div class="dropdown">

                <!-- Uitkladbare menu knop -->
                <button class="dropbtn">Over mij&#129095;
                </button>

                <!-- Inhoud van de uitkladbare menu item -->
                <div class="dropdown-content">

                    <!-- Submenu items -->
                    <a href="WaaromIT.html">Waarom IT?</a>
                    <a href="NaMijnOpleiding.html">Na mijn opleiding</a>
                    <a href="CurriculumVitae.html">Curriculum Vitae</a>

                </div>
            </div>
            <a href="Vooropleidingen.html">Vooropleiding</a>
            <a href="Hobby's.html">Hobby's</a>
            <!-- Uitkladbare menu knop -->
            <div class="dropdown">

                <!-- Uitkladbare menu knop -->
                <button class="dropbtn">Toekomst&#129095;
                </button>

                <!-- Inhoud van de uitkladbare menu item -->
                <div class="dropdown-content">

                    <!-- Submenu items -->
                    <a href="ComputerKennis.html">Computer Kennis</a>
                    <a href="Werk.html">Werk</a>
                    <a href="Doelen.html">Doelen</a>
                </div>
            </div>
            <a href="Evaluatie.html">Evaluatie</a>
        </div>
    </div>

    <!-- Dit is voor de scheiding tussen de navigatie en de footer zodat ik een aparte style kan toepassen aan de inhoud -->
    <div class="content">



    </div>
    <!-- hier begint de footer -->
    <footer class="footer">

        <p>Author: Semih Eren <br>
            <a href="mailto:semihheren@outlook.com">semihheren@outlook.com</a> <br>
        <p>Instagram: semih_e</p>
        <p>Telefoon nummer: 0634053528</p>
    </footer>
</div>
</body>
</html>