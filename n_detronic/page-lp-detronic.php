<?php

/**
 ** Template name: LP de Detronic
 **/

// Recupera o nome da pagina atual
$slug = basename(get_permalink());
get_header('assinatura');
?>

<main>
    <section class="hero" data-aos="fade-down" data-aos-delay="300">
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__title">PAGUE MENOS PELA ENERGIA QUE VOCÊ CONSOME</h1>
                <p class="default__desc">
                    Com o Plano de Assinatura de Energia Solar, você reduz a conta de
                    luz da sua casa ou da sua empresa sem instalação e investimento.
                </p>
            </div>
            <div class="hero__img">
                <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/img-hero.png" alt />
            </div>
        </div>
    </section>
    <section class="simulador" id="simule">
        <div class="simulador__container">
            <div class="simulador__content">
                <h2 class="default__title">
                    Simule e descubra quanto você pode economizar:
                </h2>
                <p class="default__desc">Insira o valor atual da sua conta de luz</p>
                <form class="simulador__form" onsubmit="return false;">
                    <div class="simulador__input">
                        <label for="calculo">
                            R$
                            <input type="text" id="numberInput" placeholder="130,00" required/>
                        </label>
                    </div>
                    <button type="submit" id="calculando">→</button>
                </form>
                <div class="simulador__infos">
                    <p class="default__desc second">
                        <span>Valor mínimo:</span> R$130,00 |
                        <span>APENAS CONTAS CEMIG</span>
                    </p>
                    <div class="simulador__toggle">
                        <div class="toggle" role="doc-subtitle">
                            <p class="active" id="residencial">🏠 RESIDÊNCIA</p>
                            <form>
                                <input type="checkbox" id="checkbox" value="residencia" />
                            </form>
                            <p id="comercial">🏢 EMPRESA</p>
                        </div>
                    </div>
                    <p class="default__desc" style="margin-top: 16px">
                        Selecione seu tipo de imóvel
                    </p>
                </div>
            </div>
            <div class="simulador__side">
                <div class="simulador__bars">
                    <div class="bar" id="bar-1">
                        <p class="default__text">Mensal</p>
                        <p class="value">R$ <span id="value-monthly">00,00</span></p>
                        <div class="bar-size"></div>
                    </div>
                    <div class="bar" id="bar-2">
                        <p class="default__text">Em 1 ano</p>
                        <p class="value">R$ <span id="value-yearly">00,00</span></p>
                        <div class="bar-size" style="height: 80px"></div>
                    </div>
                    <div class="bar" id="bar-3">
                        <p class="default__text">Em 5 anos</p>
                        <p class="value">R$ <span id="value-five">00,00</span></p>
                        <div class="bar-size" style="height: 120px"></div>
                    </div>
                </div>
                <div class="button--container">
                    <a href="javascript:void(0)" id="form-open" class="bigger button full">quero aderir</a>
                </div>
            </div>
        </div>
        <div class="contact__container">
            <button class="close-btn">X</button>
            <h3 class="default__title">Faça agora sua adesão</h3>
            <form action="https://detronicenergia.com/obrigado/" name="formAssinaturaSimulador" class="contact__form">
                <div class="form-gap">
                    <div class="input_wrap">
                        <input name="nome" type="text" required />
                        <label><img src="<?php echo get_template_directory_uri() ?>/res/img/assets/person.svg" alt /> Nome</label>
                    </div>
                    <div class="input_wrap">
                        <input name="telefone"type="tel" id="telefone" required />
                        <label><img src="<?php echo get_template_directory_uri() ?>/res/img/assets/phone.svg" alt /> Telefone</label>
                    </div>
                    <div class="input_wrap">
                        <input name="email" type="email" required />
                        <label><img src="<?php echo get_template_directory_uri() ?>/res/img/assets/mail.svg" alt /> E-mail</label>
                    </div>
                    <input type="hidden" name="tipo-da-conta" id="tipo-da-conta" value="residencial">
                    <input type="hidden" name="valor-da-conta" id="valor-da-conta">
					<input type="hidden" name="faixa-de-valor" id="faixa-de-valor" >

                </div>
                <button type="submit" class="button">enviar formulário</button>
            </form>
        </div>
    </section>
    <section class="benefits" id="como-funciona">
        <h2 class="default__title" style="text-align: center; padding: 0px 24px;">Entenda como funciona:</h2>
        <div class="benefits__container">
            <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/infografico.svg" alt />
        </div>
    </section>
    <section class="resources" id="plano">
        <div class="resources__container">
            <h2 class="default__title" data-aos="fade-down" data-aos-delay="300">
                Para quem é o plano de assinatura?
            </h2>
            <p class="default__desc" data-aos="fade-down" data-aos-delay="300">
                Para qualquer pessoa com <span>imóvel próprio</span> ou
                <span>alugado</span>, seja:
            </p>
            <div class="resources__content">
                <div class="card-resources">
                    <div class="card-resources__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/casa.svg" alt />
                    </div>
                    <p class="default__desc">Casa</p>
                </div>
                <div class="card-resources">
                    <div class="card-resources__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/apt.svg" alt />
                    </div>
                    <p class="default__desc">Apartamento</p>
                </div>
                <div class="card-resources">
                    <div class="card-resources__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/pessoas.svg" alt />
                    </div>
                    <p class="default__desc">Empresas, comércios e condomínios</p>
                </div>
            </div>
        </div>
    </section>
    <section class="assine" id="assine">
        <div class="assine__container">
            <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/img-assinatura.webp" alt />
            <div class="assine__content">
                <h3 class="default__title">ASSINE EM 3 PASSOS</h3>
                <div class="step">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <p class="default__desc">
                            Clique em "quero aderir”, preencha o formulário e aguarde nossa
                            equipe comercial.
                        </p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <p class="default__desc" style="display:flex; align-items: center;">Tenha sua conta da CEMIG em mãos.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <p class="default__desc">
                            Leia e assine o termo de adesão online que será enviado para
                            você. Pronto!
                        </p>
                    </div>
                </div>
                <div class="button--container">
                    <a href="#simule" class="bigger button">simule sua economia</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contas" id="fatura">
        <div class="contas__container">
            <div class="contas__content">
                <h3 class="default__title">
                    Após a adesão, você passa a receber dois boletos.
                </h3>
                <p class="default__desc">
                    Fazendo a soma das duas faturas, você perceberá o quanto a economia
                    é significativa.
                </p>
                <div class="contas__paper">
                    <div class="contas__card">
                        <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/cemig.webp" alt />
                        <p class="contas__card--text">
                            Você recebe a fatura da CEMIG, contendo taxas obrigatórias como
                            iluminação pública e impostos como PIS/COFINS
                        </p>
                    </div>
                    <div class="contas__card">
                        <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/detronic.webp" alt />
                        <p class="contas__card--text">
                            E também a fatura da Detronic, com seu consumo de energia já com
                            o desconto contratado
                        </p>
                    </div>
                </div>
            </div>
            <div class="contas__side">
                <p class="default__title">Até</p>
                <p class="contas__bigger-text">15%</p>
                <p class="default__title">DE ECONOMIA</p>
                <p class="contas__text full">GARANTIDA</p>
            </div>
        </div>
    </section>
    <section class="economia">
        <div class=" economia__container">
            <h2 class="default__title">TUDO FEITO DE FORMA LEGAL!</h2>
            <p class="default__desc">
                Aqui na Detronic Energia nossos processos e produtos se enquadram na
                Geração Compartilhada, um dos modelos de Geração Distribuída. Tanto
                esse, quanto o modelo de compensação de créditos e demais normas do
                mercado de energia solar são regulamentados pela Lei n° 14.300.
            </p>
            <div class="economia__content">
                <div class="d-flex economia__card"><span>132 </span> USINAS</div>
                <div class="d-block economia__card">
                    <span>R$ 33,2mi</span> <br />economia anual dos nossos clientes
                </div>
                <div class="economia__card"><span>+4 MIL</span>CLIENTES</div>
            </div>
        </div>
    </section>
    <section class="switcher" id="clube-certo">
        <div class="switcher__container">
            <div class="switcher__content">
                <h2 class="default__title">
                    AINDA DÁ PRA ECONOMIZAR <span>MAIS!</span>
                </h2>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="active nav-link" id="nav-year-tab" data-bs-toggle="tab" data-bs-target="#nav-year" type="button" role="tab" aria-controls="nav-year" aria-selected="false">
                        CLUBE CERTO
                    </button>
                    <button class="nav-link" id="nav-year1-tab" data-bs-toggle="tab" data-bs-target="#nav-year1" type="button" role="tab" aria-controls="nav-year1" aria-selected="false">
                        PROGRAMA DE INDICAÇÃO
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="active fade relatorios__resultado show tab-pane" id="nav-year" role="tabpanel" aria-labelledby="nav-year-tab" tabindex="0">
                        <p class="default__text">
                            Quem assina o
                            <b>Plano de Assinatura de Energia Solar Detronic </b>conta com
                            benefícios exclusivos em mais de
                            <b> 600 mil produtos e serviços </b>por todo o Brasil. Conheça o
                            <b>Clube Certo</b> — descontos e cashback em lojas, gastronomia,
                            lazer, esportes e mais!
                        </p>
                    </div>
                    <div class="fade relatorios__resultado tab-pane" id="nav-year1" role="tabpanel" aria-labelledby="nav-year1-tab" tabindex="0">
                        <p class="default__text">
                            Com o nosso Programa de Indicação, você pode zerar sua fatura
                            Detronic. A cada amigo que realizar a adesão do nosso plano de
                            assinatura de energia solar, você ganha um desconto de R$25,00
                            na sua conta Detronic.
                        </p>
                    </div>
                </div>
                <h3 class="default__title">
                    E aí, vamos começar a economizar de verdade?
                </h3>
                <div class="button--container">
                    <a href="#simule" class="bigger button">simule sua economia</a>
                </div>
            </div>
            <div class="switcher__side">
                <img src="<?php echo get_template_directory_uri() ?>/res/img/assets/img-economizar.webp" alt />
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="testimonials__container">
            <div class="tag">
                <p class="tag__text">depoimentos</p>
            </div>
            <h3 class="default__title">
                VEJA QUEM JÁ ESTÁ ECONOMIZANDO COM A GENTE!
            </h3>
            <div class="testimonials__content">
                <div class="testimonials__card">
                    <p class="testimonials__text">Dário Júnior</p>
                    <p class="testimonials__place">Hortifruti Bem-estar</p>
                    <p class="testimonials__card--text">
                        "Um projeto que foi planejado durante algum tempo, e só foi
                        possível sua realização graças ao empenho e profissionalismo da
                        Detronic Energia. Só temos que agradecer o empenho de todos que
                        realizaram com excelência e qualidade todas as etapas e superaram
                        todas as expectativas! Parabéns a todos e vamos para a próxima!"
                    </p>
                </div>
                <div class="testimonials__card">
                    <p class="second testimonials__text">Eleonora Mhyrra</p>
                    <p class="testimonials__card--text">
                        "Estou bastante satisfeita com a minha adesão à Detronic. O
                        desconto é real, e convenhamos, qualquer economia nesses tempos
                        complicados, já vale a pena! Outro fator que me influenciou a
                        aderir à Detronic, foi a possibilidade de uso de energia
                        alternativa, como energia solar, o que sempre quis fazer, mas por
                        falta de espaço, nunca tive essa oportunidade."
                    </p>
                </div>
                <div class="testimonials__card">
                    <p class="testimonials__text">Edilene Lott</p>
                    <p class="testimonials__place">Comercial Água Marinha</p>
                    <p class="testimonials__card--text">
                        "Não tem muito tempo que uso o serviço da Detronic mas já estou
                        economizando consideravelmente na conta de luz. Estamos
                        satisfeitos com o serviço e com a economia certa. Redução na
                        despesa fixa é tudo que uma empresa precisa na economia do
                        Brasil."
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" id="faq">
        <h2 class="default__title" style="text-align: center; margin-bottom: 48px">
            FAQ
        </h2>
        <div class="faq__container">
            <div class="faq__content">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. Preciso mudar a instalação ou fazer obras?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Não precisa de instalação ou obras. Você continua recebendo a
                                energia da mesma forma, através da Distribuidora, no caso de
                                Minas Gerais, a CEMIG.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. Passo a receber o desconto imediatamente após a adesão?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Você começa a receber as faturas Detronic e o desconto
                                acordado somente após o recebimento dos créditos de energia em
                                sua conta de luz. Esse processo pode levar até 90 dias após a
                                assinatura do termo de adesão.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Preciso pagar algo no momento da contratação?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Não! Você precisa apenas estar de acordo com as condições
                                comerciais e assinar digitalmente o termo de adesão. Você só
                                começa a pagar após o recebimento do crédito em sua conta de
                                energia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. Caso minha energia acabe, a quem devo recorrer?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Qualquer problema com a rede elétrica da sua localidade é a
                                CEMIG que continua sendo seu ponto de contato. Nesse sentido,
                                nada muda no seu dia a dia. Se, porventura, surgir algum
                                problema em nossas usinas solares, terá impacto apenas nos
                                créditos de energia, você não ficará sem luz!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. O que são créditos de energia?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Créditos de Energia são os KWh gerados nas fazendas solares,
                                respectivos ao consumo mensal do cliente, eles viram desconto
                                na conta da CEMIG.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. Não sou o titular da conta de energia, posso fazer adesão?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Neste caso, é necessário fazer a contratação em nome do
                                titular atual ou regularizar o cadastro junto à CEMIG. Nós
                                podemos te orientar com esse procedimento.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. Por que eu recebo dois boletos?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Após a adesão, você continuará recebendo a conta da Cemig com
                                as tarifas mínimas, que são o custo de disponibilidade (custo
                                para levar a energia até o local) e a taxa de iluminação
                                pública (custeio repassado à prefeitura). Posteriormente, você
                                passará a receber uma fatura da Detronic referente ao seu
                                consumo de energia. Ao somar os valores da fatura Cemig e
                                Detronic, você observará a redução na sua conta. Será um valor
                                menor do que você paga hoje para a Cemig.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. Moro de aluguel, posso fazer o plano de assinatura de
                                energia?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Sim. Qualquer pessoa física ou jurídica atendida pela Cemig,
                                com consumo mensal superior a R$130,00, exceto aqueles que não
                                são classificados como média/alta tensão ou que tenham algum
                                benefício social.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php get_footer('assinatura'); ?>