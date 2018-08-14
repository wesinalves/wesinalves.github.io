<?php 

if(isset($_GET['lang']))
    $lang = $_GET['lang'];
else
    $lang = 'pt';


$xml = simplexml_load_file("lang/$lang.xml",'SimpleXMLElement', LIBXML_NOCDATA);

?>
<!DOCTYPE html>
<html lang=<?=$lang?>>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Inovador Digital">
    <meta name="keywords" content="website, inovador, fotografia, imagem, vídeo">
    <meta name="description" content="Eu sou o Inovador Digital e quero te ajudar a inovar também. Saia do básico, seja inovador, seja digital. Aqui você encontra inovação em criação de websites, sistemas web, edição de imagens e vídeo, fotografia.">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR">
     
    <meta property="og:url" content="http://www.inovadordigital.com">
     
    <meta property="og:title" content="Inovador Digital - Inovação para seu negócio">
    <meta property="og:site_name" content="Inovador Digital">
     
    <meta property="og:description" content="Eu sou o Inovador Digital e quero te ajudar a inovar também. Saia do básico, seja inovador, seja digital. Aqui você encontra inovação em criação de websites, sistemas web, edição de imagens e vídeo, fotografia.">
     
    <meta property="og:image" content="http://www.inovadordigital.com/img/header-bg.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800"> 
    <meta property="og:image:height" content="600"> 




    <title><?php echo $xml->title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Inovador Digital</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><?php echo $xml->menu->services; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $xml->menu->portfolio; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $xml->menu->about; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team"><?php echo $xml->menu->hireme; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?php echo $xml->menu->contact; ?></a>
                    </li>
                    <li>
                        <div>
                            <a class="page-scroll btn <?php echo ($lang=='pt')?'btn-primary':''; ?> btn-sm" href="index.php?lang=pt">PT</a>
                            <a class="page-scroll btn <?php echo ($lang=='en')?'btn-primary':''; ?> btn-sm" href="index.php?lang=en">EN</a>
                            <a class="page-scroll btn <?php echo ($lang=='es')?'btn-primary':''; ?> btn-sm" href="index.php?lang=es">ES</a>
                        </div>
                    </li>
                    
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <?php 
                    $num_phrase = count($xml->phrases->phrase);
                    $id = rand(0, $num_phrase-1);
                ?>
                <div class="intro-lead-in">"<?php echo $xml->phrases->phrase[$id]->content; ?>" (<?php echo $xml->phrases->phrase[$id]->author; ?>)</div>
                <div class="intro-heading"><?php echo $xml->be; ?></div>
                <a href="#about" class="page-scroll btn btn-xl"><?php echo $xml->buttons->about; ?></a>
                <a href="#team" class="page-scroll btn btn-xl"><?php echo $xml->buttons->hireme; ?></a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $xml->pages->services->title; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $xml->pages->services->description; ?></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $xml->pages->services->types->web->title; ?></h4>
                    <p class="text-muted"><?php echo $xml->pages->services->types->web->description; ?></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-film fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $xml->pages->services->types->image->title; ?></h4>
                    <p class="text-muted"><?php echo $xml->pages->services->types->image->description; ?></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $xml->pages->services->types->photo->title; ?></h4>
                    <p class="text-muted"><?php echo $xml->pages->services->types->photo->description; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $xml->pages->portfolio->title; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $xml->pages->portfolio->description; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                      <img src="img/portfolio/weeforever.png" class="img-responsive" alt="">
                   
                    <div class="portfolio-caption">
                        <h4>Weeforever</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                      <img src="img/portfolio/outlier.png" class="img-responsive" alt="">
                    
                    <div class="portfolio-caption">
                        <h4>Outlier Detection</h4>
                        <p class="text-muted">Wordpress Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                     <img src="img/portfolio/oasis.png" class="img-responsive" alt="">
                    
                    <div class="portfolio-caption">
                        <h4>Grupo Oásis</h4>
                        <p class="text-muted">Videos and Makingoff</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                     <img src="img/portfolio/iec.png" class="img-responsive" alt="">
                  
                    <div class="portfolio-caption">
                        <h4>Instituto Evandro Chagas</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/arquivo.png" class="img-responsive" alt="">
                  
                    <div class="portfolio-caption">
                        <h4>Arquivo do Instituto Evandro Chagas</h4>
                        <p class="text-muted">Wordpress Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <!--
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/intranet.png" class="img-responsive" alt="">
                    </a>-->
                    <img src="img/portfolio/intranet.png" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>Intranet do Instituto Evandro Chagas</h4>
                        <p class="text-muted">Websystem Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $xml->pages->about->title; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $xml->pages->about->description; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <?php echo $xml->pages->about->content; ?>


                     <a href="#team" class="page-scroll btn btn-xl">Contrate-me</a> 
                     <a href="#about" class="page-scroll btn btn-xl">baixar currículo</a> 
                    

                    

                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $xml->pages->hireme->title; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $xml->pages->hireme->description; ?></h3>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    
                    <?php echo $xml->pages->hireme->content; ?>
                    <a href="#portfolio" class="page-scroll btn btn-xl">Ver portfólio</a>                   

                </div>
            </div>
        </div>
    </section>

        
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $xml->pages->contact->title; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $xml->pages->contact->description; ?>
                    </h3>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate action="sendMail.php" method='post'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $xml->pages->contact->fields->name; ?>" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo $xml->pages->contact->fields->email; ?>" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="<?php echo $xml->pages->contact->fields->phone; ?>" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcQzyATAAAAAKYPiPe0C675kqixebWZ1UEmIScR"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo $xml->pages->contact->fields->message; ?>" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group" style="background-color: #fff;  color: grey; padding: 10px">
                                <label><?php echo $xml->pages->contact->fields->budget; ?></label>
                                <ul style="list-style-type: none;">
                                    <li ><input  type='radio' value='15.000 - 30.000'  name='orcamento'    /><label for='choice_2_16_0' id='label_2_16_0'><?php echo $xml->currency; ?>15.000 – R$30.000</label></li>
                                    <li ><input  type='radio' value='30.000 - 100.000'  name='orcamento'    /><label for='choice_2_16_1' id='label_2_16_1'><?php echo $xml->currency; ?>30.000 – R$100.000</label></li>
                                    <li ><input  type='radio' value='100.000 - 250.000'  name='orcamento'    /><label for='choice_2_16_2' id='label_2_16_2'><?php echo $xml->currency; ?>100.000 – R$250.000</label></li>
                                    <li ><input  type='radio' value='> 250.000'  name='orcamento'    /><label for='choice_2_16_3' id='label_2_16_3'>> <?php echo $xml->currency; ?>250.000</label></li>
                                </ul>
                               </div>
                                

                            </div>

                            

                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" class="btn btn-xl" value"<?php echo $xml->buttons->send; ?>" name="enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Inovador Digital <?php echo date('Y')?></span>
                </div>
                
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#" data-toggle="modal" data-target="#privacityModal">Política de Privacidade</a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#termsModal">Termos de serviço</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

     <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="privacityModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Política de privacidade</h2>
                               Nós, na INOVADOR DIGITAL SOLUÇÕES EM TECNOLOGIA, estamos comprometidos em proteger a sua privacidade. Nossa meta é proporcionar a você uma experiência positiva mantendo, ao mesmo tempo, as suas informações pessoais seguras, protegidas e nos comprometemos a não compartilha-las em hipótese alguma.
                            </p>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="termsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Termos de Serviço</h2>
                            <p class="item-intro text-muted">Esclarecimento sobre a prestação de serviços.</p>
                            <div style="text-align:left">
                            <p>
                                1.  SOBRE O SITE INOVADOR DIGITAL <br>
                                1.1.    O site INOVADOR DIGITAL, no endereço http://inovadordigital.com, pertence à Wesin Ribeiro Alves. Este documento foi elaborado para estipular os termos de serviços prestados para o cliente que nos contrata.<br>
                                1.2.    Ainda não possuimos CNPJ pois prestamos serviços como freelancer. Estamos estudando a possibilidade de nos regularizar como empresa.</p>
                                <p>2.  A QUEM SE DESTINA ESTE DOCUMENTO <br>
                                2.1.    Clientes quee desejam se informar sobre atualizações nos termos de serviços.<br>
                                2.2.    Você recebeu uma proposta de orçamento por e-mail ou visitou uma página nossa com exposição de serviço e preço do mesmo, por isso decidiu nos contratar e agora deseja saber como trabalhamos e o que esperamos do cliente.</p>
                                <p>3.  SERVIÇOS OFERECIDOS <br>
                                3.1.    Este documento abarca serviços diferentes entre si e que podem ser contratados separadamente ou em conjunto. Para saber quais serviços você está contratando, por favor veja a descrição de sua proposta de orçamento, que enviamos para você por e-mail.<br>
                                3.2.    Atualização de sistema OJS. <br>
                                3.2.1   O serviço de atualização de sistemas OJS será realizado remotamente. O Cliente é responsável por fornecer os dados necessários para a atualização, incluindo o acesso ao banco de dados e sistema de arquivos onde está hospedado o sistema atual. <br>
                                3.2.2   O cliente terá opção de permanecer em sua hospedagem, ou solicitar um orçamento caso queira mudar seu plano de hospedagem.<br>
                                3.2.3   Dúvidas sobre o prazo podem ser consultados na seção 9.<br>
                                3.2.4   Informações sobre o pagamento deste serviço pode ser encontradas na seção 15. <br>
                                <p>4.  CADASTRO DE CLIENTE<br>
                                4.1.    Não realizamos nenhuma espécie de cadastro através do site.<br>
                                4.2.    Caso esteja interssado em algum de nossos serviços, entre em contato por email, por telefone, ou pelo formulário de contato do site.<br>
                                </p>
                                <p>5.  DOMÍNIO<br>
                                5.1.    Domínio são as letras e números digitados para acessar um website. Por exemplo, no caso do Inovador digital, o domínio é: http://inovadordigital.com<br>
                                5.2.    Sobre a propriedade do seu domínio.<br>
                                5.2.1.  Você é proprietário do domínio no qual será instalado ou configurado ou editado o website. Caso não seja, você tem a autorização do proprietário do domínio do site para o uso do mesmo. Você se responsabiliza legalmente pela autorização do uso do domínio.<br>
                                5.2.2.  Não fazemos pesquisa de direito autoral ou de uso de marca sobre o seu domínio escolhido.<br>
                                5.2.3.  No início da prestação de serviços para a qual você nos contratou, pressupõe-se que você tem disponível o domínio para a publicação do site que desenvolvemos ou no qual iremos trabalhar. Sua escolha sobre este domínio não vai mudar durante o projeto sem custos adicionais, por isso faça sua escolha com cuidado antes de iniciar sua contratação de serviços.<br>
                                5.2.4.  O pagamento integral pelo projeto de desenvolvimento do site independe de disponibilização de domínio de instalação do site, no final do processo de criação do mesmo.<br>
                                5.2.5.  Para Projetos Customizados, depois da prova de codificação, caso você não tenha disponível o domínio para instalarmos o website, esperamos por até 30 dias para a implementação do mesmo atrelado ao seu domínio. Se seu domínio não nos for disponibilizado para instalação de arquivos no prazo citado, enviaremos os arquivos do seu site, em formato zip para seu correio eletrônico ou eles serão disponibilizados em empresa de compartilhamento de arquivos, como por exemplo Dropbox, para que você faça download e o desenvolvimento do site considera-se encerrado.<br>
                                5.2.6.  Caso o domínio do site esteja em processo de transferência de propriedade. Você se responsabiliza pela negociação com o proprietário original, além disso se responsabiliza pela burocracia envolvida na transferência de propriedade de domínio.<br>
                                5.3.    Sobre a hospedagem do nome do domínio<br>
                                5.3.1.  Hospedagem de domínio é diferente de hospedagem de site. Este item trata da hospedagem de domínio.<br>
                                5.3.2.  Em geral não há necessidade de transferência de hospedagem de domínio, já que a hospedagem dos arquivos do site pode estar dissociada da hospedagem do nome do site, desde que cumpridos devidos direcionamentos de DNS. Mas se por algum motivo você esteja no meio deste tipo de processo, nosso trabalho não inclui o desembaraço e/ou assessoria de transferência de domínio junto a empresa (s) de hospedagem e/ou órgão responsáveis. Caso nossa consultoria seja necessária, solicite um orçamento. Cada tipo de domínio segue regras do órgão e do país responsável pela sua emissão. Cada empresa que registra e hospeda domínios também tem seus processos internos.<br>
                                5.4.    Sobre a troca ou modificação de nome de domínio depois de iniciado seu projeto, caso esta demanda exista, haverá novo orçamento com devida precificação.</p>
                                <p>6.  CONTEÚDO DO SITE<br>
                                6.1.    Caso seu contrato seja do tipo que inclui a inserção de texto no site por nós. Você se responsabiliza pelo envio de texto correto e revisado para inserção no website para a inicialização do projeto. Não fazemos revisão gramatical ou de conteúdo.<br>
                                6.2.    Você se compromete com a veracidade e com os efeitos legais da publicação de todos os seus textos. A partir do seu texto original podemos sugerir modos de exposição do mesmo em elementos de formas, cores e letras que possam destacar sua mensagem, porém em nenhum momento compartilhamos autoria nos textos publicados em seu website.<br>
                                6.3.    Se desejar modificar o texto do site depois de enviado, será cobrado valor de retrabalho.<br>
                                6.4.    Quando o site é administrável, o proprietário do site tem autonomia para modificar o texto do site, depois de finalizado o projeto, com login e senha que passaremos na entrega do treinamento.<br>
                                6.5.    Não fazemos busca de texto para seu site no Google, nem copiamos texto de sites de seus concorrentes, nem de qualquer outro site.<br>
                                6.6.    A não ser que tenha sido exposto no orçamento, não fazemos a tradução de texto de outros idiomas para inserção no seu site.</p>
                                <p>7.  MANUTENÇÃO MENSAL<br>
                                7.1.    A manutenção é um serviço cobrado mensalmente ou trimestralmente. Ela não é um serviço gratuito, a não ser que tenha sido oferecido no orçamento por período limitado.<br>
                                7.2.    A manutenção mensal pode ser de diferentes tipos, você sabe qual tipo está contratando a partir da leitura da proposta de orçamento que enviamos.<br>
                                <p>8.  ARQUIVOS COM O CÓDIGO DO SITE<br>
                                8.1.    Os subitens abaixo se referem ao código instalado em sites administráveis com painel de controle próprio e banco de dados. Então só se aplica a você se seu site for administrável, com painel de controle próprio e banco de dados.<br>
                                8.1.1.  Algumas palavras de origem técnica e estrangeira usados neste documento: WordPress é o software aberto de uso livre, cujos arquivos são oriundos do site wordpress.org. Plugins ou plug-ins são arquivos com código, com funcionalidade definida por seus autores, com objetivo funcional dentro de um site instalado com WordPress.<br>
                                8.1.2.  Nossos sites, quando administráveis podem ter seu núcleo desenvolvido em código aberto, ou seja, usar códigos já existentes, com licença de categoria Licença Pública Geral. Nesta categoria se encaixa o WordPress, que é baixado do site wordpress.org.<br>
                                8.1.3.  Mesmo que o núcleo de seu site seja montado em arquivos de código com licença GLP, o mesmo não se aplica ao licenciamento de temas e plugins, que são outros componentes de seu site.<br>
                                8.1.4.  Alguns recursos que adicionam funcionalidades ao seu site podem ter sido oriundos de código comprado, ou pelo qual se paga uma vez ou uma anualidade. Nesta categoria se encaixam alguns temas e plugins.<br>
                                8.1.5.  Algumas vezes, usamos temas comprados ou de outras empresas que cobram anualidade, quando (a) o cliente solicita o tema de um determinado fornecedor já escolhido pelo cliente; (b) ou quando a atividade exercida pelo cliente possui funcionalidades muito específicas que já foram desenvolvidas com qualidade em outro tema de mercado; (c) ou quando for solicitada apenas a instalação do site.<br>
                                8.1.6.  Não há regra quanto aos tipos de licença nos plugins que usamos. Algumas vezes, usamos plugins para os quais pagamos direitos de uso ao seu criador. Nos casos onde há pagamento de anualidade, nós não nos comprometemos com a renovação e pagamento da mesma. Em geral, isso não é preciso quando é contratado um pacote de manutenção mensal conosco, porque cuidamos também da renovação dos plugins.<br>
                                8.1.7.  Os temas, folhas de estilos e funcionalidades desenvolvidos pelo Inovador Digital podem ser usados no domínio para o qual o serviço foi prestado, mas não podem ser vendidos para outros usos.<br>
                                8.2.    Os arquivos de código que representam uma página online são feitos para funcionarem na tecnologia existente na data da entrega do projeto. Você está ciente que a tecnologia usada para a abertura de um site vai mudar e evoluir com o tempo de forma não prevista. A não ser que tenhamos sido contratados para isso, não nos responsabilizamos pela evolução do seu código de acordo com a evolução da tecnologia.<br>
                                8.3.    Quando no código do seu site há integração com mídias sociais, como exemplo, inserção de caixa de ‘curtir’ do Facebook, alimentação automática do Twitter, etc., não nos responsabilizamos pelo comportamento destes códigos provenientes de serviços de terceiros em suas páginas online.</p>
                                <p>9.  DATAS, DIAS DE TRABALHO E PRAZOS<br>
                                9.1.    Nossos prazos e etapas são variáveis conforme o projeto e nossa demanda.<br>
                                9.2.    Os prazos em dias das etapas para seu projeto são passados por e-mail ao cliente na ocasião do orçamento, antes de seu pagamento inicial.<br>
                                9.3.    Cumprimos com os prazos desde que o cliente responda com aprovação final de etapa ou solicitação completa de retrabalho em até 5 dias. Este prazo de resposta do cliente pode ser modificado, caso tenha sido acordado outro número de dias antes do início do projeto.<br>
                                9.4.    Quando o cliente passa instruções adicionais depois do início de contagem de prazo, reinicia-se a contagem de prazo para a entrega de etapa.<br>
                                9.5.    Uma vez avançada uma etapa de aprovação, a volta para etapas anteriores é considerada como retrabalho e sujeita a precificação.<br>
                                9.6.    Trabalhamos nos dias úteis, de segunda a sexta, em horário comercial. Não trabalhamos em feriados ou em finais de semana. Podemos abrir exceção, desde que previamente acordado. Em geral, cobra-se extra para disponibilidade em horários não comerciais.<br>
                                9.7.    Mensagens de clientes enviadas no final de semana serão respondidas na segunda-feira, até o final do dia, caso segunda-feira não seja um feriado.<br>
                                9.8.    Não trabalhamos nos feriados nacionais brasileiros e nos feriados da cidade e do Estado do Pará.<br>
                                9.9.    Não trabalhamos no dia 24 de dezembro, nem no dia 31 de dezembro. Tiramos folga na segunda e terça-feira de carnaval.<br>
                                9.10.   O prazo de contagem em dias se inicia no dia seguinte a cada entrega ou solicitação de trabalho ou aprovação de etapa. Por exemplo, o cliente envia aprovação de etapa de layout no dia 06 de abril, então teremos um número de dias para realizar a etapa de codificação (variável conforme cada projeto) a contar a partir do dia 07 de abril.<br>
                                9.11.   Nossos prazos são dados em números de dias, mas isto não implica em dedicação exclusiva de 24 horas em seu projeto. Caso necessite de dedicação integral e exclusiva de um profissional em momentos de integração de sistemas ou em outras demandas pontuais, por favor solicite orçamento.<br>
                                9.12.   A contagem de prazo para entrega de etapa fica suspensa quando houver atraso de pagamento, até a regularização do mesmo.<br>
                                9.13.   Em qualquer momento do projeto você pode solicitar uma reunião ou conversa, desde que seja com 24 horas de antecedência, de dia útil.</p>
                                <p>10. LOCAL DA PRESTAÇÃO DE SERVIÇOS<br>
                                10.1.   A não ser que tenha sido previamente acordado no processo de orçamento, a prestação de serviços não é feita dentro da empresa do cliente.<br>
                                10.2.   Para clientes pessoa física, não fazemos visita para reuniões nem fazemos prestação de serviços em residência.</p>
                                <p>11. GOOGLE ANALYTICS.<br>
                                11.1.   As informações abaixo são pertinentes caso em seu projeto esteja incluso a inserção de código de acompanhamento de visitas de seu website.<br>
                                11.2.   O Google Analytics é um serviço oferecido pelo Google, até o momento da redação deste termo de serviços, é oferecido de forma gratuita. O Inovador Digital não pode garantir que a Google continue oferecendo este serviço sem taxas para sempre. Caso um dia o Google venha a cobrar por este tipo de serviço, não nos responsabilizamos pela criação, manutenção de seu cadastro e pagamento de serviços referentes ao seu site junto ao Google.<br>
                                11.3.   Usamos o nosso login de acesso ao Google analytics para criar um perfil de consulta e acompanhamento do desempenho de seu site junto a este serviço do Google. Para que você possa fazer o acompanhamento, será designado um (1) perfil de acesso de leitura a partir do seu e-mail informado no cadastro de cliente.<br>
                                11.4.   Caso você queira que o código de acompanhamento do Google Analytics esteja diretamente ligado a uma conta sua do Google “Google Account”, então precisamos de login e senha da mesma, estas informações nos devem ser passadas no início do seu projeto. Preferimos que você nos passe uma conta sem gmail atrelado a ela, por questões de segurança, não queremos ficar com a senha de uma conta que mantenha seu e-mail pessoal.<br>
                                11.5.   Não nos responsabilizamos pela qualidade do acompanhamento de visitas do seu site oferecido pelo Google. <br>
                                11.6.   Depois do site pronto e implementado, você fica livre para mudar o código de acompanhamento do seu site junto ao Google. Porém, caso precise de nossa intervenção para inserir o código em seu site, solicite o orçamento para este serviço em particular.<br>
                                11.7.   Nós não oferecemos treinamento para análise do gráficos e indicadores do Google Analytics.<br>
                                11.8.   Acreditamos que a melhor forma de acompanhar seu desempenho de visitação é fazendo login no Google Analytics, a partir de seu login de acesso e senha. Não está inclusa a construção de aplicações a partir do Google Analytics para exposição de seus números de qualquer outra forma, nem a exposição online de seus números em seu site.</p>
                                <p>12. TREINAMENTO<br>
                                12.1.   Tudo que se lê abaixo sobre treinamento, aplica-se a casos em que o treinamento foi oferecido no escopo do orçamento enviado ao seu e-mail.<br>
                                12.2.   Geralmente o treinamento ocorre na entrega de projetos de sites administráveis ou blogs. Sites não administráveis não possuem necessidade de treinamento. Em alguns casos, o cliente já conhece a plataforma do website administrável e prefere não receber treinamento.<br>
                                12.3.   O treinamento básico dura 1,5 horas e compreende tópicos relativos à segurança, inserção de texto e fotos em seu site. Ou pode ser de uma hora, com uso de demais minutos em conversas curtas de esclarecimento posterior ao treinamento.<br>
                                12.4.   O treinamento é feito de forma online, com uso de computador e telefone fixo ou Skype.<br>
                                12.5.   Caso haja mais de uma pessoa para receber o treinamento, espera-se que assistam o mesmo treinamento ao mesmo tempo.<br>
                                12.6.   Liberamos login (nome de acesso) e senha de administrador do seu site após o treinamento inicial. Para tanto precisamos do e-mail e do perfil de acesso das pessoas que editarão o site. Estas informações serão solicitadas por e-mail, no processo de desenvolvimento do site.<br>
                                12.7.   Preferimos marcar treinamento em até 10 dias da finalização da implementação do seu site. A não ser que tenha sido negociado de forma diferente no orçamento do seu site, podemos esperar até um mês após a implementação do site, para oferecer o treinamento.<br>
                                12.8.   Caso o cliente tenha alguma dificuldade na manipulação de seu site. Faz-se necessário que instale algum software para compartilhamento de tela em sessão de esclarecimento de dúvidas, para que eu veja sua tela de computador ou você veja minha tela de computador. Em geral, recomendamos o Skype, mas pode ser usado outro software de preferência do cliente.<br>
                                12.9.   Treinamentos presenciais são precificados a parte, se tiver interesse, por favor solicite orçamento.</p>
                                <p>13. IMAGENS<br>
                                13.1.   Os subitens abaixo se referem às prestações de serviços onde está prevista a inserção de imagens no seu site.<br>
                                13.2.   A não ser que tenha sido incluso no orçamento, o design de logotipo não está incluso no preço de seus serviços de criação, hospedagem e manutenção de site.<br>
                                13.3.   Quando nos referimos a imagens de cortesia, elas são oriundas do site depositphotos.com, ou de outra fonte de uso autorizado.<br>
                                13.4.   Não usamos fotos de editoriais para uso comercial.<br>
                                13.5.   Não buscamos fotos no Google Imagens para uso em seu site.<br>
                                13.6.   Não usamos fotos de outros sites, sem autorização do fotógrafo ou do proprietário da imagem.<br>
                                13.7.   Não fazemos busca ou averiguação de direito de imagens, quando recebemos imagens do cliente. Partimos do princípio de que o cliente nos envia imagens que podem ser usadas em seu site, tendo autorização do proprietário das mesmas, ou tendo comprado em sites de venda de fotos.<br>
                                13.8.   Em geral, a regra para o melhor resultado estético da exposição de sua imagem no site é a seguinte: imagens podem ser facilmente redimensionadas para tamanhos menores e dificilmente redimensionadas para tamanhos maiores, sem perder sua resolução (qualidade), usamos medidas em pixels para saber se uma foto é grande ou pequena para um determinado espaço no site. Caso tenha dúvidas sobre o assunto, consulte-nos para podemos explicar e examinar suas imagens durante o processo de criação do site, sem custos adicionais para a análise e parecer.<br>
                                13.9.   Preferimos receber logotipos em arquivos com final: jpg e/ou png.<br>
                                13.10.  Quando o cliente deseja usar imagens de depósito de fotos, que não são do depositphotos.com, recomendamos que o cliente compre a imagem diretamente do site, ou então podemos fazer a compra, para a qual seguimos a política do site escolhido para compra de créditos a serem usados na imagem. Em alguns sites estoque de fotos, é comum ter de comprar um pacote mínimo de créditos. Em geral os sites de estoque de imagens são de fora do Brasil. Ao cliente será repassado o valor da imagem ou do pacote mínimo de créditos para aquisição da imagem, com devida conversão de moeda aplicada pelo cartão de crédito, mais IOF, mais 30%.<br>
                                13.11.  Não está inclusa impressão e entrega de cópias de imagens impressas para o cliente. Toda a troca de imagens, será feita de modo digital.</p>
                                <p>14. DESCONTO OU SERVIÇOS OFERECIDOS COM CORTESIA<br>
                                14.1.   Descontos podem ser oferecidos na proposta de orçamento e seguem prazo de validade conforme texto da proposta. Cada desconto exposto na proposta de orçamento é individualizado para o cliente em particular. O desconto oferecido tem a data da validade do orçamento.<br>
                                14.2.   Pode ser que no desenrolar do projeto, sejam oferecidos serviços como cortesia, com o objetivo de fortalecer os vínculos comerciais entre cliente e o Inovador Digital. Caso seja oferecido um serviço como cortesia em determinado momento, não significa, que será oferecido para sempre, repetidamente, como cortesia. O cliente será informado por e-mail no caso de serviços dados como cortesia, que o mesmo está sendo oferecido nesta categoria.<br>
                                14.3.   As condições de pagamento e de desconto também são variáveis conforme a proposta enviada. Não significa que a mesma condição de pagamento e descontos venha a se repetir em propostas de orçamento futuras.<br>
                                14.4.   Em casos de atraso no pagamento de seu projeto, serão suspensos serviços de cortesia.</p>
                                <p>15. PAGAMENTO<br>
                                15.1.   Quando você aceita este termo de serviços, você já foi informado sobre o valor e datas de pagamento para seu projeto em particular.<br>
                                15.2.   Espera-se que o pagamento seja feito preferencialmente através da plataforma Paypal. A responsabilidade de criar um conta nessa plataforma é do Cliente.<br>
                                15.3.   Se o Cliente desejar, o pagamento poderá ser realizado via depósito bancário.<br>
                                15.4.    Ao realizar o pagamento, você declara automaticamente estar de acordo com este termo de serviço.<br>
                                <p>16. MODIFICAÇÕES DESTE DOCUMENTO<br>
                                16.1.   Este documento pode ser modificado sem prévio aviso e podem ser inseridas referência a termos específicos para determinadas modalidades de serviço. Faremos os melhores esforços para manter o link desta página com este documento sempre o mesmo, para que você possa voltar e ler quando desejar.</p>
                                <p>17. FORO<br>
                                17.1.   Fica eleito o foro da Cidade de Belém para decidir qualquer litígio decorrente do presente instrumento.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
        


    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <script type="text/javascript">
    var lsBaseURL = (("https:" == document.location.protocol) ? "https://tracker.leadsius.com/djs/" : "http://tracker.leadsius.com/djs/");
    document.write(unescape("%3Cscript src='" + lsBaseURL + "tracker.js?_k=9bed3c8cadd15adb02244522358a7ea0ba7d4968' type='text/javascript'%3E%3C/script%3E"));
    </script>

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-64546145-4', 'auto');
      ga('send', 'pageview');

    </script>

    
</body>

</html>
