  document.getElementById("numberInput").addEventListener("input", function () {
    // Remover caracteres não permitidos (aceitando números, ponto e vírgula)
    this.value = this.value.replace(/[^0-9.,]/g, "")

    // Trocar vírgulas por pontos para facilitar a validação
    let valueWithDot = this.value.replace(",", ".")

    // Armazena o valor no localStorage
    localStorage.setItem("valorInserido", this.value)
  })

  // Function to calculate the discount
  function calcularDesconto() {
    const checkbox = document.getElementById("checkbox")
    const tipoConta = checkbox.checked ? "comercial" : "residencial"
    const tarifas = {
      residencial: {
        tarifaCheia: 0.9595,
        tarifaPisCofins: 0.0336,
        tarifaDesconto: 0.9259,
        tarifaIluminacao: 30,
        tarifaRede: 50,
        descontoMax: 0.85,
      },
      comercial: {
        tarifaCheia: 0.9595,
        tarifaPisCofins: 0.0336,
        tarifaDesconto: 0.9259,
        tarifaIluminacao: 30,
        tarifaRede: 100,
        descontoMax: 0.85,
      },
    }
    const valorConta = parseFloat(localStorage.getItem("valorInserido"))

    const consumoReal = valorConta - tarifas[tipoConta].tarifaIluminacao
    const consumoKWH = consumoReal / tarifas[tipoConta].tarifaCheia
    const valorEnergiaDesconto = consumoKWH - tarifas[tipoConta].tarifaRede
    const valorConsumoDesconto = valorEnergiaDesconto * tarifas[tipoConta].tarifaDesconto * tarifas[tipoConta].descontoMax

    const valorPisCofins = tarifas[tipoConta].tarifaPisCofins * valorEnergiaDesconto
    const valorCustoDisponibilidade = tarifas[tipoConta].tarifaRede * tarifas[tipoConta].tarifaCheia

    const valorFinalCusto = valorConsumoDesconto + valorPisCofins + valorCustoDisponibilidade + tarifas[tipoConta].tarifaIluminacao

    const valorFinalDescontoMensal = valorConta - valorFinalCusto

    localStorage.setItem("valorConta", valorConta.toFixed(2))
    localStorage.setItem("valorFinalDescontoMensal", valorFinalDescontoMensal.toFixed(2))

    localStorage.setItem("tipoConta", tipoConta)
  }

  document.getElementById("checkbox").addEventListener("change", function () {
    const residencial = document.getElementById("residencial")
    const comercial = document.getElementById("comercial")

    if (this.checked) {
      residencial.classList.remove("active")
      comercial.classList.add("active")
      localStorage.setItem("ativo", "comercial")
      console.log("comercial está ativo agora.")
    } else {
      residencial.classList.add("active")
      comercial.classList.remove("active")
      localStorage.setItem("ativo", "residencial")
      console.log("Residência está ativo agora.")
    }

    calcularDesconto()
  })

  window.onload = function () {
    // Quando a página carregar, você pode recuperar o valor inserido anteriormente
    let valorSalvo = localStorage.getItem("valorInserido");
    if (valorSalvo) {
      document.getElementById("numberInput").value = valorSalvo;
    }

    const ativo = localStorage.getItem("ativo");
    const checkbox = document.getElementById("checkbox");

    if (ativo === "comercial") {
      checkbox.checked = true;
      document.getElementById("residencial").classList.remove("active");
      document.getElementById("comercial").classList.add("active");
    } else {
      checkbox.checked = false;
      document.getElementById("residencial").classList.add("active");
      document.getElementById("comercial").classList.remove("active");
    }

    calcularDesconto();
    localStorage.clear();

  }

  localStorage.removeItem("valorFinalDescontoMensalMed");
  localStorage.removeItem("valorFinalDescontoMensalMin");

  document.querySelector(".simulador__form").addEventListener("submit", function (event) {
    event.preventDefault()

    let tipoConta = document.getElementById("checkbox").checked ? "residencial" : "comercial"
    calcularDesconto(tipoConta)

    atualizarValoresDesconto()
  })

  function atualizarValoresDesconto() {
    const valorDesconto = localStorage.getItem("valorFinalDescontoMensal")

    // Se o valor existir, atualizar os elementos com os IDs apropriados
    if (valorDesconto) {
      document.getElementById("value-monthly").textContent = valorDesconto
      document.getElementById("value-yearly").textContent = (valorDesconto * 12).toFixed(2)
      document.getElementById("value-five").textContent = (valorDesconto * 60).toFixed(2)
    } else {
      console.error("valorFinalDescontoMensal não encontrado no localStorage.")
    }
  }

  $("#form-open").on("click", function (e) {
    $(this).parent().parent().parent().find(".contact__container")
    $(".contact__container").slideToggle("fast").addClass("d-flex")
  })

  $(".close-btn").on("click", function (e) {
    $(this).parent().addClass("d-none")
  })
  // Pega o valor do localStorage
  let valorConta = parseFloat(localStorage.getItem("valorConta"))

  // Função para determinar a faixa
  function determinarFaixa(valor) {
    if (valor < 130) {
      return "Menos de R$ 130"
    } else if (valor >= 130 && valor <= 500) {
      return "De R$ 130 a R$ 500"
    } else if (valor > 500 && valor <= 1000) {
      return "De R$ 500 a R$ 1.000"
    } else {
      return "Acima de R$ 1.000"
    }
  }

  // Determina a faixa do valor
  let faixa = determinarFaixa(valorConta)

  // Registra no input hidden

  const valorInput = localStorage.getItem("tipoConta")
  const valorContaHidden = localStorage.getItem("valorConta")
  document.getElementById("tipoContaHidden").value = valorInput
  document.getElementById("valorContaHidden").value = valorContaHidden
  document.getElementById("faixaValor").value = faixa

  console.log("valor é:", valorInput)
  console.log("valor da conta:", valorContaHidden)
  console.log("faixa é : ", faixa)