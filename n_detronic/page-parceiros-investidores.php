<?php
/**
 ** Template name: Parceiros investidores
 **/

// Recupera o nome da página atual
$slug = basename(get_permalink());
get_header();
get_template_part('navbar');

?>
<body style="background-color: #f2f2f2;">

<div class="reduce">
    <img src="<?php echo get_template_directory_uri() ?>/css/images/new_banner_03.jpg" style="width: 100%">
</div>


<div class="banner-02">
    <div class="banner-02-txt">
        <span class="d4">Energia Sustentável.<br>O futuro já começou.</span>
        <div class="banner-icons">
            <div class="banner-icons">
                <div class="content_img">
                    <a href="<?php echo get_bloginfo('home'); ?>/reducao-de-ate-20-na-conta">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag3/icon-banner-01.png"
                             alt="Redução de contas de luz" style="height:50px">
                        <div>Redução de até 20% na conta</div>
                    </a>
                </div>
                <div class="content_img_2">
                    <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag3/icon-banner-02.png"
                             style="height:50px">
                        <div>Parceiros/ Investidores</div>
                    </a>
                </div>
                <div class="content_img_3">
                    <a href="<?php echo get_bloginfo('home'); ?>/instalacao">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag3/icon-banner-03.png"
                             style="height:50px">
                        <div>Instalação usina solar</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="container">

    <div class="invest" style="text-align: justify;">
        <a href="<?php echo get_bloginfo('home'); ?>/investimento">
            <img src="<?php echo get_template_directory_uri() ?>/icons/quero-ser-investidor-v2.png" id="parc-img" alt="investidor" style="margin:auto;text-align:center;">
        </a>
        <br>

        <span>Investir no mercado de energia de forma

        descomplicada e com riscos mitigados.

        Soluções que garantem segurança e maior

        retorno sobre seu investimento. Nossa experiência

        no desenvolvimento, implantação e gestão

        de projetos são um diferencial, uma vez que

        também somos investidores no mercado.</span>

        

    </div>

    <div class="parceiros">


        <!-- Button trigger modal -->
        <a type="button" class="" data-toggle="modal" data-target="#exampleModal">
            <img src="<?php echo get_template_directory_uri() ?>/icons/parceiro.png" id="parc-img" alt="parceiro">
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-form-1">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
						<div class="form-contato">
							<?php echo do_shortcode( '[contact-form-7 id="379" title="Parceiro/Investidor"]' ); ?>
						</div>
<!--                         <iframe name="iframe_formex_lahar" width="650px" height="750px" frameborder="0"
                                style="background: none; border: none;" allowtransparency="true"
                                src="https://forms.lahar.com.br/formularios-externos/acessa/pageparceiroinvestidor-HGQg50FlU9gkA6D7RI8ocAGoaSl">
                            Seu navegador não possui suporte para iframes.
                        </iframe> -->
                    </div>
                </div>
            </div>
        </div>
        <!--<a id="myBtn" href="">
            <img src="icons/parceiro.png" id="parc-img" alt="parceiro">
        </a>-->
        <br>

        <span>Desenvolvemos um Hub de energia para criar pontes

        rentáveis de negócios. Conheça a nossa estrutura

        e modalidades que podem te gerar receita acessória

        mensal, entrega de novas soluções ou podemos

        desenhar juntos um novo modelo de parceria.</span>

    </div>

</div>

<div style="clear:both;height:15px;"></div>


<section class="icon-box" style="background-color: #d3d3d3">

    <div class="container partners" style="padding-top:20px; width: 1000px;">

        <div class="row">

            <div class="col-sm-12 text-center row">

                <span class="font-weight-bold text-uppercase text-center d5">Parceiros</span>

                <span class="text-uppercase text-center pb-5 d6">quem já faz parte da nossa rede de parceiros</span>
            </div>

        </div>


        <div class="glider-contain multiple">
            <button class="glider-prev">
                <
            </button>

            <div class="glider">
                
				<a href="https://www.inhotim.org.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/inhotim-logo.png" alt="detronic"
                         style="width: 250px !important;  margin-left: 20px;margin-top: -70px;">
                </a>
				<a href="https://www.federassantas.org.br/novosite/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/federasamtas.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="https://elevaeducacao.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/eleva.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="https://coleguium.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/coleguium.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="http://batistasmineiros.org.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/cbm.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="https://www.detronicenergia.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/sindicon.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="https://www.mentesquepensam.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/mentes.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				
                <a href="https://ensinoelite.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/elite.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>

                <a href="https://www.laboratoriocarloschagas.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/lab.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>

                <a href="https://www.pmssistemas.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/pms.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://seusindico.net.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/seu_sindico.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                
                <a href="https://sintesc.com.br/contents/a-cooperativa/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/coopersind.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				<a href="https://sintesc.com.br/contents/a-cooperativa/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/coopersind.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
				
                <a href="https://www.detronicenergia.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/credimais.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                
                
                <a href="https://www.instagram.com/granjasaraiva/?hl=en">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/granja.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://informacontabil.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/informa.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.engetron.com.br/jasistemas/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/ja.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.detronicenergia.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/jf.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://jumpereletrica.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/jumper.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.kuaraenergiasolar.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/kuara.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                
                <a href="https://www.detronicenergia.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/ponta.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://simcredito.net.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/sim.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.thesunenergy.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/sun.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://switchse.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/switch.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.alsolenergia.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/al.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://brclube.org/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/br.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                
                <a href="https://www.potencialfinanceira.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/ok.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="http://www.heatmapsports.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/heatmap.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.hchavesimoveis.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/heloisa.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://radianceenergia.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/radiance.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.linkedin.com/in/atos-solu%C3%A7%C3%B5es-em-neg%C3%B3cios-6b801b21b/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/atos.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.facebook.com/BarbosaCorr/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/barbosa.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="http://www.chart.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/chart.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://contajul.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/contajul.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://diferencialprotecao.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/diferencial.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.instagram.com/alimentosdonalica/?hl=en">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/donalica.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.enterative.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/enterative.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://www.yeseg.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/yeseg.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>
                <a href="https://greenvolt.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/parc/greenvolt.png" alt="detronic"
                         style="width: 250px !important; margin-left: 20px;">
                </a>


            </div>

            <button class="glider-next">></button>

        </div>


    </div><!-- container-->

</section>

<div class="call_calc">

    <span style="font-size: 20px;">Mais rentabilidade com segurança!</span>


    <!-- The Modal -->
    <button type="button" class="btn-calc9" style="text-decoration: none;" data-toggle="modal"
            data-target="#exampleModal">
        ENTRAR EM CONTATO
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-form-1">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">					
						<div class="form-contato">
							<?php echo do_shortcode( '[contact-form-7 id="379" title="Parceiro/Investidor"]' ); ?>
						</div>
<!--                     <iframe name="iframe_formex_lahar" width="650px" height="750px" frameborder="0"
                            style="background: none; border: none;" allowtransparency="true"
                            src="https://forms.lahar.com.br/formularios-externos/acessa/pageparceiroinvestidor-HGQg50FlU9gkA6D7RI8ocAGoaSl">
                        Seu navegador não possui suporte para iframes.
                    </iframe> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <a target="popup"onclick="window.open('popup-investidor.php','name','width=700px,height=780px')" href="" class="btn-calc3" style="text-decoration: none;">QUERO

         ENTRAR EM CONTATO</a>-->

</div>


<div class="faq-align">

    <div class="container style-faq">

        <div class="faq-1">

            <span class="faq-title">Perguntas Frequentes</span>

            <span class="faq-sub">O que mais querem saber sobre nós e nossas soluções</span>

            <br>

        </div>

        <div class="accordion accordion-flush" id="questions">


            <!-- Item 1 -->


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-one" style="background-color: #2c548c">

                        É necessário fazer obras para ter energia solar?

                    </button>

                </h2>

                <div id="question-one" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        Não! Não há necessidade de obras ou instalações para você aderir a este modelo de energia solar.

                        A

                        energia produzida em nossas usinas será compensada em sua fatura de energia, sem investimento,

                        através de créditos.

                    </div>

                </div>

            </div>


            <!-- Item 2 -->


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-two" style="background-color: #2c548c">

                        Preciso pagar algo no momento da contratação?

                    </button>

                </h2>

                <div id="question-two" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        Não! Você só precisa escolher o melhor plano para você e assinar o termo de adesão, que receberá

                        em

                        seu email. Você só começa a pagar após o recebimento do crédito em sua conta de energia.

                    </div>

                </div>

            </div>


            <!-- Item 3 -->


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-three" style="background-color: #2c548c">

                        Caso minha energia acabe, a quem devo recorrer?

                    </button>

                </h2>

                <div id="question-three" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        A CEMIG continua sendo seu ponto de contato no caso de qualquer problema com a rede elétrica da

                        sua

                        localidade. Nada muda quanto a isso. Ela é a responsável por levar a energia até a sua casa.

                    </div>

                </div>

            </div>


            <!-- Item 4 -->


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-four" style="background-color: #2c548c">

                        Como será feito o pagamento para a CEMIG e para a Detronic Energia?

                    </button>

                </h2>

                <div id="question-four" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        Você receberá dois boletos, um da CEMIG e outro da Detronic Energia. No boleto da CEMIG, você

                        receberá os créditos energia e pagará as taxas mínimas. No boleto da Detronic você pagará o

                        valor

                        reduzido. Ao somar os dois boletos, a sua redução será de até 20% (conforme plano escolhido).

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-five" style="background-color: #2c548c">

                        Quais são as taxas mínimas que continuo pagando para a Cemig?

                    </button>

                </h2>

                <div id="question-five" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        Você permanece pagando o custo de disponibilidade (valor mínimo cobrado pela concessionária, que

                        corresponde em média a R$ 28,50 para clientes monofásicos, R$ 47,50 para clientes bifásicos e R$

                        95,00 para clientes trifásicos), a iluminação pública e o PIS/COFINS, que corresponde em média a

                        R$

                        0,027/kWh consumido.

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-six" style="background-color: #2c548c">

                        Imóvel alugado pode ter energia solar?

                    </button>

                </h2>

                <div id="question-six" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        SIM, é possível! Quem mora de aluguel ou tem uma empresa em um imóvel alugado também pode

                        usufruir

                        dos benefícios da energia solar.

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse"

                            data-bs-target="#question-seven" style="background-color: #2c548c">

                        Quais documentos preciso apresentar para ser cliente Detronic Energia?

                    </button>

                </h2>

                <div id="question-seven" class="accordion-collapse collapse"

                     data-bs-parent="#questions">

                    <div class="accordion-body">

                        <p>Apenas:</p>

                        <p> CNPJ ou CPF;</p>

                        <p> Conta de energia com histórico de consumo de no mínimo de 12 meses;</p>

                        <p> Se for empresa, precisamos da última alteração do contrato social e para condomínios da Ata

                            de

                            Assembléia.</p>

                        <p> A titularidade da conta de energia deverá ser a mesma da pessoa contratante.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<section class="caurosel" style="background-color: #d3d3d3">

    <div class="container depo" style="width: 100%;">

        <div class="depo-title">

            <h2 class="font-weight-bold text-uppercase text-center d5">DEPOIMENTOS</h2>

            <h2 class="text-uppercase text-center d6">de parceiros e investidores</h2>

            <br>

        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="min-height:350px;">

            <div class="carousel-inner">

                <div class="carousel-item active">

                    <h2>Italo Vinhal - Corretora Barbosa</h2>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>
                    </div>
                    <br>

                    <span>"Ser parceiro comercial da Detronic Energia é algo diferenciado,
                        juntos desenvolvemos inúmeras parcerias e negócios. Construímos uma
                        aliança duradoura embasada pelos princípios e valores que possuímos
                        em comum, nos possibilitando transformar a vida de nossos clientes
                        através de benefícios e produtos que realmente fazem a diferença em suas vidas.
                        <br>
                        Agradecemos o empenho e dedicação do time Detronic, que sempre esteve
                        ao nosso lado, desde o início de nossa história, possibilitando resultados
                        inicialmente inesperados, mas que hoje se concretizaram!"
                        </span>

                </div>

                <div class="carousel-item">

                    <h2>Lucas Sigefredo - Inhotim </h2>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                    </div>
                    <br>

                    <span>"Construir caminhos com a Detronic tem se mostrado uma tarefa
                        muito gratificante e inovadora. Comungamos modos de olhar o mundo
                        e de compreender as oportunidades em que existem ganhos para todos os envolvidos."</span>

                </div>
				
				
				
				<div class="carousel-item">

                    <h2>Stefan David - Fundo de Investimento Internacional MGM</h2>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"

                             class="bi bi-star-fill" viewBox="0 0 16 16">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>

                        </svg>

                    </div>
                    <br>

                    <span>"O desenvolvimento de nossas usinas solares, nas quais a Detronic além de ser nossa sócia, é também a empresa de engenharia contratada dentro do modelo full EPC, têm sido uma grata surpresa.<br>
Com uma equipe técnica altamente qualificada e capaz de implementar as obras dentro dos cronogramas estabelecidos e sempre se antecipando aos desafios a serem vencidos, uma equipe comercial agressiva, atenta às necessidades do mercado e preocupada em atingir as metas definidas, a Detronic têm se mostrado altamente competente com sua estrutura administrativa e financeira apoiando a implementação de nossos negócios. É uma organização de fácil trato e focada em resultados. Estamos felizes de contar com essa parceria!"</span>

                </div>
				
				

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"
               style="background-image: none">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

</section>


<script src="<?php echo get_template_directory_uri(); ?>/glider/glider.min.js"></script>

<script>
    new Glider(document.querySelector('.glider'), {
        // Mobile-first defaults
        slidesToShow: 1,
        slidesToScroll: 1,
        scrollLock: true,
        draggable: true,
        dots: '#resp-dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [
            {
                // screens greater than >= 775px
                breakpoint: 775,
                settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 'auto',
                    slidesToScroll: 'auto',
                    itemWidth: 150,
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    itemWidth: 150,
                    duration: 0.25
                }
            }
        ]
    });
</script>

<?php get_footer(); ?>
