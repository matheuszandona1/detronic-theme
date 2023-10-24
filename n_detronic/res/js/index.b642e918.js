$(document).ready(function () {
  document.getElementById("numberInput").addEventListener("input", function () {
    // Remover caracteres não permitidos (aceitando números, ponto e vírgula)
    this.value = this.value.replace(/[^0-9.,]/g, "");

    // Trocar vírgulas por pontos para facilitar a validação
    let valueWithDot = this.value.replace(",", ".");
    console.log("o valor da conta é:", numberInput.value);
  });
  var valorInserido = "";
  $("#numberInput").on("input", function () {
    valorInserido = $(this).val();
    $("#valor-da-conta").val(valorInserido);

    let faixa = determinarFaixa(parseFloat(valorInserido));
    console.log("Faixa de valor é: ", faixa);
    $("#faixa-de-valor").val(faixa);
  });
  function determinarFaixa(valor) {
    if (valor < 130) {
      return "Menos de R$ 130";
    } else if (valor >= 130 && valor <= 500) {
      return "De R$ 130 a R$ 500";
    } else if (valor > 500 && valor <= 1000) {
      return "De R$ 500 a R$ 1.000";
    } else {
      return "Acima de R$ 1.000";
    }
  }
  function calcularDesconto() {
    const checkbox = document.getElementById("checkbox");
    const tipoConta = checkbox.checked ? "comercial" : "residencial";
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
    };
    const valorConta = parseFloat(valorInserido);
    console.log(valorInserido);

    const consumoReal = valorConta - tarifas[tipoConta].tarifaIluminacao;
    const consumoKWH = consumoReal / tarifas[tipoConta].tarifaCheia;
    const valorEnergiaDesconto = consumoKWH - tarifas[tipoConta].tarifaRede;
    const valorConsumoDesconto =
      valorEnergiaDesconto *
      tarifas[tipoConta].tarifaDesconto *
      tarifas[tipoConta].descontoMax;

    const valorPisCofins =
      tarifas[tipoConta].tarifaPisCofins * valorEnergiaDesconto;
    const valorCustoDisponibilidade =
      tarifas[tipoConta].tarifaRede * tarifas[tipoConta].tarifaCheia;

    const valorFinalCusto =
      valorConsumoDesconto +
      valorPisCofins +
      valorCustoDisponibilidade +
      tarifas[tipoConta].tarifaIluminacao;

    const valorFinalDescontoMensal = valorConta - valorFinalCusto;

    localStorage.setItem("valorConta", valorConta.toFixed(2));
    localStorage.setItem(
      "valorFinalDescontoMensal",
      valorFinalDescontoMensal.toFixed(2)
    );
    $("#tipo-da-conta").val(tipoConta);
  }

  document.getElementById("checkbox").addEventListener("change", function () {
    const residencial = document.getElementById("residencial");
    const comercial = document.getElementById("comercial");

    if (this.checked) {
      residencial.classList.remove("active");
      comercial.classList.add("active");
      localStorage.setItem("ativo", "comercial");
    } else {
      residencial.classList.add("active");
      comercial.classList.remove("active");
      localStorage.setItem("ativo", "residencial");
    }

    calcularDesconto();
  });

  document
    .querySelector(".simulador__form")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      let tipoConta = document.getElementById("checkbox").checked
        ? "residencial"
        : "comercial";
      calcularDesconto(tipoConta);

      atualizarValoresDesconto();
    });

  function atualizarValoresDesconto() {
    const valorDesconto = localStorage.getItem("valorFinalDescontoMensal");

    // Se o valor existir, atualizar os elementos com os IDs apropriados
    if (valorDesconto) {
      document.getElementById("value-monthly").textContent = valorDesconto;
      document.getElementById("value-yearly").textContent = (
        valorDesconto * 12
      ).toFixed(2);
      document.getElementById("value-five").textContent = (
        valorDesconto * 60
      ).toFixed(2);
    } else {
      console.error("valorFinalDescontoMensal não encontrado no localStorage.");
    }
  }

  $(".close-btn").on("click", function (e) {
    $(this).parent().addClass("d-none");
  });
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
  };
});

// Function to calculate the discount

localStorage.removeItem("valorFinalDescontoMensalMed");
localStorage.removeItem("valorFinalDescontoMensalMin");

var calculandoClicked = false; // flag para verificar se o botão #calculando foi clicado

$("#calculando").on("click", function () {
  calculandoClicked = true; // seta a flag como verdadeira
});

$("#form-open").on("click", function (e) {
  if (!calculandoClicked) {
    // Se a flag for false, simplesmente retorna sem executar qualquer ação
    return;
  }

  $(".contact__container").slideToggle("fast").addClass("d-flex");
});

$(".close-btn").on("click", function (e) {
  $(this).parent().addClass("d-none");
});
