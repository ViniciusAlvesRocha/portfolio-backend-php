<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinicius Rocha</title>
    <link rel="stylesheet" href="./css/resset.css">
    <link rel="stylesheet" href="./css/styleHomePage.css">
</head>
<body>
    <?php
     echo("Olá mundo em php");
    ?>
    <section id="primaryContainer">
        <div id="primaryContainerLeft">
            <div>
                <p>Olá</p>
                <p>Eu sou Vinicius</p>
                <p>Freelancer e Desenvolvedor</p>
            </div>
        </div>

        <div id="primaryContainerRight">
            <img id="photoProfille" src="images/photoProfille.jpeg">
        </div>
    </section>

    <section id="aboutMe">
        <div id="pictureFrame">
            <img id="photoAboutMe" src="images/photoProfille.jpeg">
        </div>
        <div id="aboutMeTextContainer">
            <h2 id="h2AboutMe">Sobre Mim</h2>
            <p>
                Olá! Meu nome é Vinicius! Sou um desenvolvedor FullStack. 
                Veja o meu portfólio abaixo para ver meus trabalhos.<br> Para criação de qualquer projeto, basta
                entrar em contato comigo.
            </p>
            <p>
                e-mail: vinialvesrocha@gmail.com<br>
                Tel/WhatsApp: 35 99246-7101
            </p>
        </div>
    </section>
    
    <section id="services">
        <h2 id="h2Services">Serviços</h2>
        <div id="servicesItems">
            <div id="webDevelopment">
                <div id="DevelopmentText"> 
                    <h3>Desenvolvemento Web</h3>
                    <p>Criação de sites, blogs, e-commerces, landing pages...</p>
                </div>
                <a href="#"><img id="webDevelopmentImg" src="images/web_development.png"></a>
            </div>
            <div id="mobileDevelopment">
                <div id="DevelopmentText">
                    <h3>Desenvolvemento Mobile</h3>
                    <p>Criação de aplicativos Android</p>
                </div>
                <a href="#"><img id="mobileDevelopmentImg"src="images/mobile_development.png"></a>
            </div>
        </div>
    </section>
</body>
<footer id="footer">
    <p>Entre em contato por meio das minhas redes sociais:<p>
        
</footer>
</html>