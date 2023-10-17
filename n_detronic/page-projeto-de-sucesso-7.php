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

<img src="<?php echo get_template_directory_uri(); ?>/icons/sucesso/horti-b.jpg" alt="" style="width:100%;">

<div class="container sucesso text-center d-flex">
    <span class="energia-sub ">
        Pai Pedro /MG
    </span>
    <span class="faq-sub">Usina Fotovoltaica de 102 kWp de potência.</span>
    <div class="sucesso-div">
        <div class="sucesso-div-1">
            <span class="parc-project">
				Usina implantada na cidade de Pai Pedro/MG. A energia gerada pela usina é compensada em algumas unidades consumidoras de um hortifruti, localizadas em Belo Horizonte. A usina possui capacidade de produção de 13.400 kWh/mês e é compensada em uma tarifa comercial B3.
			</span>
        </div>
        <div class="sucesso-div-2">
            <div class="quadro-sucesso-esq">
                <span class="sucesso-esq">Usina</span>
                <span class="sucesso-esq">Nº de módulos</span>
                <span class="sucesso-esq">Nº de inversores</span>
                <span class="sucesso-esq">Potência Pico</span>
                <span class="sucesso-esq">Potência do Inversor</span>
                <span class="sucesso-esq">Área da UFV</span>
                <span class="sucesso-esq">Localização</span>
                <span class="sucesso-esq">Geração Média</span>
            </div>
            <div class="quadro-sucesso-dir">
                <span class="sucesso-dir">DTC0044 – Bem-Estar Hortifruti</span>
                <span class="sucesso-dir">300 módulos de 340 Wp</span>
                <span class="sucesso-dir">3 inversores de 25 kW</span>
                <span class="sucesso-dir">102 kWp</span>
                <span class="sucesso-dir">75 kW</span>
                <span class="sucesso-dir">1.425 m²</span>
                <span class="sucesso-dir">Pai Pedro /MG</span>
                <span class="sucesso-dir">13.400 MWh/mês</span>
            </div>
        </div>
    </div>
    <div class="usinas-col">
        <div class="usinas-row">
            <img class="img-resize" src="<?php echo get_template_directory_uri(); ?>/icons/sucesso/horti/01.jpg"
                 alt="">
            <img class="img-resize" src="<?php echo get_template_directory_uri(); ?>/icons/sucesso/horti/02.jpg"
                 alt="">
        </div>
    </div>

</div>

<?php get_template_part('components/dobra-parceiros'); ?>

<div class="call_calc" style="padding: 30px;">

    <span style="font-size: 30px;">Invista agora!</span>

    <button type="button" class="btn-calc8" style="text-decoration: none;" data-toggle="modal"
            data-target="#exampleModal">
        QUERO ENTRAR EM CONTATO
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-form-3">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe name="iframe_formex_lahar" width="650px" height="750px" frameborder="0"
                            style="background: none; border: none;" allowtransparency="true"
                            src="https://forms.lahar.com.br/formularios-externos/acessa/pageinstalacao-5kqxHa9M1HtXzghj6MVlkK3Fm2sCleMuspT">
                        Seu navegador n�o possui suporte para iframes.
                    </iframe>
                </div>
            </div>
        </div>
    </div>

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

<?php get_footer(); ?>
