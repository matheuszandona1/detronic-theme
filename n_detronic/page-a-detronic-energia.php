<?php

/**
 * Template Name: Detronic
 **/
get_header('new');
get_template_part('navbar-new');
?>

<body onload="load()" style="background-color: #FFF;">
<style>
.topo-celular.navbar.navbar-expand-lg.navbar-light.bg-light.rounded.fixed-top {
  display: initial;
}
.navbar.navbar-expand-lg.navbar-light.bg-light.rounded.fixed-top {
  display: none;
}
</style>
<div class="reduce">
    <img src="<?php echo get_template_directory_uri() ?>/css/images/new_banner.jpg" style="width: 100%">
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
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag5/icon-banner-04.png"
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

<div class="energia" style="background-color: #FFF;">
    <div class="energia1">
        <div class="energia-img">
            <div class="w3-content w3-display-container">
				<div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/sucesso/sicoob/Fotos-10-4.jpg" style="width:500px; height: 308px;">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA CONCEIÇÃO DA BARRA - ESPIRITO SANTO - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/img-energia-para-todos-2.jpg"
                         style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA MONTES CLAROS - MINAS GERAIS - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/sucesso/pag1/DJI_0435.jpg"
                         style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA MONTES CLAROS - MINAS GERAIS - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/usina-lapao-bahia.jpg" style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA LAPÃO - BAHIA - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/DJI_0066.jpg" style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA LAPÃO - BAHIA - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/sucesso/sicoob/Fotos-10-2.jpg" style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA CONCEIÇÃO DA BARRA - ESPIRITO SANTO - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/sucesso/horti/01.jpg" style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA PAI PEDRO - MINAS GERAIS - BRASIL
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img src="<?php echo get_template_directory_uri() ?>/icons/sucesso/horti/02.jpg" style="width:500px; height: 308px">
                    <div class="w3-display-middle  w3-container w3-padding-16 energia-img-txt">
                        USINA PAI PEDRO - MINAS GERAIS - BRASIL
                    </div>
                </div>

                <!--<img class="mySlides" src="icons/pag2/img-energia-para-todos-2.jpg" style="width:500px">
                <img class="mySlides" src="icons/pag2/blog01.png" style="width:500px">-->
                <button class="w3-button w3-black w3-display-left " onclick="plusDivs(-1)"
                        style="background: none !important;"><
                </button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)"
                        style="background: none !important;">>
                </button>
            </div>
        </div>
        <div class="energia-text">
            <span class="energia-title">somos energia</span>
            <span class="energia-sub">para todos.</span>
            <span class="energia-txt">
                Somos a Detronic Energia.<br>

                Há mais de 8 anos temos como objetivo<br>

                garantir às pessoas o acesso a uma fonte<br>

                de energia alternativa e mais barata.<br>

                Estamos motivados a contribuir para a redução<br>

                de impactos ambientais e ecológicos, através<br>

                da geração de energia sustentável para todos!<br>

            </span>

        </div>

    </div>

</div>
<div class="container historia" style="background-color: #FFF;">

        <span class="energia-sub">
            nossa história
        </span>
    <div class="hist-align">
        <div class="historia-txt" style="text-align: justify-all;">
            A nossa origem está no Grupo DETRONIC que atua há mais
            de 25 anos no mercado, sendo líder no segmento de
            demolição para construção pesada, obras civis e soluções
            técnicas para siderurgia. A expertise de engenharia do Grupo
            propiciou em 2013, a abertura do Segmento de Energia,
            alavancado principalmente pela geração via fonte solar
            fotovoltaica.
            <br><br>
            Desde então desenvolvemos múltiplos projetos, full EPC,
            instalações, monitoramento, manutenção e gestão de usinas
            a biogás, fotovoltaicas e CGHs.
        </div>
        <div class="historia-txt" style="text-align: justify;">
            A partir de 2020 passamos a empregar a Energia Térmica
            utilizando tecnologias inovadoras israelenses, com
            capacidade para atender projetos de todos os portes com
            abrangência nacional.
            <br><br>
            Hoje, criamos o HUB de energia, conectando todos
            os players do setor, executando bons projetos e entregando
            verticalmente soluções eficientes e rentáveis a seus clientes
            e parceiros.
        </div>
    </div>
</div>


<div class="container proposito" style="background-color: #FFF;">
    <span class="energia-sub">nosso propósito</span>
    <div class="prop-cont">
        <div class="prop-icons">
            <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/missao.png" alt="" class="real-icons">
            <span class="energia-sub-2">missão</span>
            <div class="prop-txt">
                <span class="historia-txt" style="width:100%;text-align:center;">Transformar vidas<br> e integrar o mercado<br>de energia através<br> de soluções eficientes.</span>
            </div>
        </div>
        <div class="prop-icons">
            <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/visao.png" alt="" class="real-icons">
            <span class="energia-sub-2">visão</span>
            <div class="prop-txt">
                <span class="historia-txt" style="width:100%;text-align:center;">Ser reconhecida como<br> a empresa que honra a Deus<br>e é líder de mercado</span>
            </div>
        </div>
        <div class="prop-icons">
            <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/valores.png" alt="" class="real-icons">
            <span class="energia-sub-2">valores</span>
            <div class="prop-txt">
                <span class="historia-txt" style="width:100%;text-align:center;">Ética, fé em Deus,<br> Compromisso<br>e Sustentabilidade.</span>
            </div>
        </div>
    </div>
</div>

<div class="container proposito" style="background-color: #FFF;">
    <span class="energia-sub">PACTO GLOBAL</span>
	
	<br><br>
    <center>
		<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/banner_pacto_global.jpg" alt="" class="" style="width:60%;">
	<center>
	<br><br>
    <span class="energia-sub">SUSTENTABILIDADE<br>COMO PILAR</span>&nbsp;&nbsp;<span class="energia-title">TRANSFORMADOR</span>
</div>


<div class="container historia" style="background-color: #FFF;">	
	<div class="hist-align">
        <div class="historia-txt">
			A Detronic Energia é integrante da maior iniciativa
			voluntária de sustentabilidade corporativa do mundo,
			a Rede Brasil do Pacto Global!
            <br><br>
			Lançado em 2000 pelo então secretário-geral das
			Nações Unidas, Kofi Annan, o Pacto Global é uma
			chamada para as empresas alinharem suas estratégias
			e operações a Dez Princípios universais nas áreas
			de Direitos Humanos, Trabalho, Meio Ambiente e
			Anticorrupção e desenvolverem ações que contribuam
			para o enfrentamento dos desafios da sociedade. 

        </div>
        <div class="historia-txt">
            É hoje a maior iniciativa de sustentabilidade
			corporativa do mundo, com mais de 13 mil
			membros em quase 80 redes locais, que
			abrangem 160 países.
            <br><br>
			Ao integrar o Pacto Global, nos comprometemos
			a reportar anualmente o nosso progresso em
			relação aos 10 princípios, que são:
        </div>
    </div>
</div>	

<style>
.class-div-1{margin:auto;width:600px;}
.class-div-2{margin:auto;width:1000px;}
.class-div-3{margin:auto;width:750px;}
.class-img-1{margin:auto; min-height:200px;border:0px solid #ccc;text-align:center;float:left;width:300px;padding:0 20px;}
.class-img-2{margin:auto; min-height:200px;border:0px solid #ccc;text-align:center;float:left;width:250px;padding:0 20px;}
.class-img-3{margin:auto; min-height:200px;border:0px solid #ccc;text-align:center;width:300px;padding:0 20px;}
@media only screen and (max-width: 479px){
	.class-div-1, .class-div-2, .class-div-3, .class-img-1, .class-img-2, .class-img-3{
		width:100%; clear: both;
	}
	.class-img-1, .class-img-2, .class-img-3{
		margin-bottom:60px;
	}
}
</style>


<div class="container historia" style="background-color: #FFF;">	

	<span class="energia-sub" style="font-size:13pt;">DIREITOS HUMANOS</span>
	
	<div class="class-div-1">
		<div class="class-img-1">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/1.png" style="max-width:150px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">RESPEITAR</span>
				<br>
				<div class="" style="text-align:center;">
					As empresas devem apoiar
					e respeitar a proteção de
					direitos humanos
					reconhecidos
					internacionalmente.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-1">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/2.png" style="max-width:183px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">ASSEGURAR</span>
				<br>
				<div class="" style="text-align:center;">
					Assegurar-se de sua
					não participação
					em violações
					destes direitos.
				</div>	
			</center>
		</div>	
	</div>


	<span class="energia-sub" style="font-size:13pt;">TRABALHO</span>
	
	<div class="class-div-2">
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/3.png" style="max-width:190px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">APOIAR</span>
				<br>
				<div class="" style="text-align:center;">
					As empresas devem
					apoiar a liberdade
					de associação e o
					reconhecimento efetivo
					do direito à
					negociação coletiva.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/4.png" style="max-width:145px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">ELIMINAR</span>
				<br>
				<div class="" style="text-align:center;">
					A eliminação
					de todas as formas
					de trabalho forçado
					ou compulsório.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/5.png" style="max-width:155px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">ERRADICAR</span>
				<br>
				<div class="" style="text-align:center;">
					A abolição
					efetiva do
					trabalho infantil.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/6.png" style="max-width:135px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">ESTIMULAR</span>
				<br>
				<div class="" style="text-align:center;">
					Eliminar a
					discriminação
					no emprego.
				</div>	
			</center>
		</div>	
	</div>

	
	<span class="energia-sub" style="font-size:13pt;">MEIO AMBIENTE</span>
	
	<div class="class-div-3">
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/7.png" style="max-width:150px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">PREVENIR</span>
				<br>
				<div class="" style="text-align:center;">
					 As empresas
					devem apoiar
					uma abordagem
					preventiva aos
					desafios ambientais.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/8.png" style="max-width:145px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">DESENVOLVER</span>
				<br>
				<div class="" style="text-align:center;">
					Desenvolver
					iniciativas
					para promover
					maior responsabilidade
					ambiental.
				</div>	
			</center>
		</div>	
		
		<div class="class-img-2">
			<center>
				<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/9.png" style="max-width:155px;">
				<br>
				<span class="energia-sub" style="font-size:13pt;">INCENTIVAR</span>
				<br>
				<div class="" style="text-align:center;">
					Incentivar o
					desenvolvimento e
					difusão de tecnologias
					ambientalmente
					amigáveis.
				</div>	
			</center>
		</div>		
	</div>
	
	<span class="energia-sub" style="font-size:13pt;">ANTICORRUPÇÃO</span>
	
	
	<div class="class-img-3">
		<center>
			<img src="<?php echo get_template_directory_uri() ?>/icons/pag6/10.png" style="max-width:150px;">
			<br>
			<span class="energia-sub" style="font-size:13pt;">COMBATER</span>
			<br>
			<div class="" style="text-align:center;">
				As empresas devem
				combater a corrupção
				em todas as suas formas,
				inclusive extorsão e propina.
			</div>	
		</center>
	</div>
</div>	

<section style="background-color: #FFF;">
    <div class="real">

        <span class="energia-sub">Resultados alcançados</span>

        <div class="realization">
            <div class="icons-realization">

                <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/icon-beneficios-4.png"
                     class="real-icons">

                <div class="col-sm d-flex justify-content-center">
                    <p id='0101' class="text-red-2">0</p>
                    <p class="text-red-2">.</p>
                    <p class="text-red-2" id="0102">0</p>
                    <p class="text-red-2 padding-left"> MILHÕES</p>

                </div>

                <div class="energia-txt-1">de economia mensal</div>

            </div>

            <div class="icons-realization">

                <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/icon-01.png" class="real-icons">

                <div class="col-sm d-flex justify-content-center">
                    <p id='0103' class="text-red-2">0</p>
                    <p class="text-red-2">.</p>
                    <p class="text-red-2" id="0104">0</p>
                    <p class="text-red-2 padding-left"> MILHÕES</p>

                </div>

                <div class="energia-txt-1">Produção Mensal estimada</div>

            </div>

            <div class="icons-realization">

                <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/icon-reducao-1.png" class="real-icons">

                <div class="col-sm d-flex justify-content-center">
                    <p id='0105' class="text-red-2">0</p>
                    <p class="text-red-2">.</p>
                    <p class="text-red-2" id="0106">0</p>
                    <p class="text-red-2 padding-left"> MILHÕES</p>

                </div>

                <div class="energia-txt-1">Redução de CO2 na atmosfera</div>

            </div>

            <div class="icons-realization">

                <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/icone_arvores.png" class="real-icons">

                <div class="col-sm d-flex justify-content-center">
                    <p id='0107' class="text-red-2">0</p>
                    <p class="text-red-2">.</p>
                    <p class="text-red-2" id="0108">0</p>
                    <p class="text-red-2 padding-left"> MIL</p>
                </div>

                <div class="energia-txt-1">Equivalente a arvores plantadas</div>

            </div>

        </div>
    </div>
</section>

</body>


<?php get_template_part('components/dobra-blog'); ?>

<?php get_footer('new'); ?>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

<script>
    function animate(obj, initVal, lastVal, duration) {

        let startTime = null;

        //get the current timestamp and assign it to the currentTime variable
        let currentTime = Date.now();

        //pass the current timestamp to the step function
        const step = (currentTime) => {

            //if the start time is null, assign the current time to startTime
            if (!startTime) {
                startTime = currentTime;
            }

            //calculate the value to be used in calculating the number to be displayed
            const progress = Math.min((currentTime - startTime) / duration, 1);

            //calculate what to be displayed using the value gotten above
            obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

            //checking to make sure the counter does not exceed the last value (lastVal)
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                window.cancelAnimationFrame(window.requestAnimationFrame(step));
            }
        };

        //start animating
        window.requestAnimationFrame(step);
    }

    let text1 = document.getElementById('0101');
    let text2 = document.getElementById('0102');
    let text3 = document.getElementById('0103');
    let text4 = document.getElementById('0104');
    let text5 = document.getElementById('0105');
    let text6 = document.getElementById('0106');
    let text7 = document.getElementById('0107');
    let text8 = document.getElementById('0108');


    const load = () => {
        animate(text1, 0, 3, 5000);
        animate(text2, 0, 110, 5000);
        animate(text3, 0, 3, 5000);
        animate(text4, 0, 173, 5000);
        animate(text5, 0, 545, 5000);
        animate(text6, 0, 650, 5000);
        animate(text7, 0, 3, 5000);
        animate(text8, 0, 897, 5000);

    }
</script>