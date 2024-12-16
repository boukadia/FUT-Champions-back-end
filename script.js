let addGk = document.querySelector(".addGk");
let add = document.querySelector(".add");
let addRemplacementGk = document.querySelector(".addRemplacementGk");
let addRemplacement = document.querySelector(".addRemplacement");
let addPlayersR = document.querySelector(".addPlayersR");
let addGkRempl = document.querySelector(".addGkRempl");
let cardInputR = document.querySelector(".cardInputR");
let cardInputGkR = document.querySelector(".cardInputGkR");
let positionInpt = document.getElementById("positionInpt");
let remplacant = document.querySelector(".remplacant");
let positionName;
let positionInptGk = document.getElementById("positionInptGk");
let ajouter = document.querySelector(".ajouter");
let btn = "";

let icon = document.querySelector(".fa-solid");
let stockData;
let deleteButton = document.querySelector(".delete");
let selectOption;
let cardInput = document.querySelector(".cardInput");
let card;
var formule;
const formInputs = cardInput.querySelectorAll("input");

function hide(event) {
  event.target.parentElement.classList.add("hidden");
}

// ............................................affichage la list des inputs.......................................
function formuleShow(event) {
  formulaire = event.target.parentElement;

  btn = event.target;
  
    if (btn.textContent == "modifier") {
      deleteButton.classList.remove("hidden");
      formule.querySelector(".nameInpt").value =
        formulaire.querySelector(".namePlayer").textContent;
      formule.querySelector(".equipe").value =
        formulaire.querySelector(".logo").src;

      formule.querySelector(".photo").value =
        formulaire.querySelector(".photoPlayer").src;
      formule.querySelector(".nationalityI").value =
        formulaire.querySelector(".flagg").src;
      formule.querySelector(".rating").value =
        formulaire.querySelector(".rate").textContent;
      formule.querySelector(".paceI").value =
        formulaire.querySelector(".paceValeur").textContent;
      formule.querySelector(".shootingI").value =
        formulaire.querySelector(".shootingValeur").textContent;

      formule.querySelector(".passingI").value =
        formulaire.querySelector(".passingValeur").textContent;

      formule.querySelector(".dribblingI").value =
        formulaire.querySelector(".dribblingValeur").textContent;

      formule.querySelector(".defendingI").value =
        formulaire.querySelector(".defendingValeur").textContent;
      formule.querySelector(".physicalI").value =
        formulaire.querySelector(".physicalValeur").textContent;

      cardInput.style.display = "grid";

      cardInputGk.classList.add("hidden");
    } else {
      formInputs.forEach((input) => (input.value = ""));
      deleteButton.classList.add("hidden");
      cardInput.style.display = "grid";
    }
  

  positionInpt.options[0].textContent =
    formulaire.querySelector(".position").textContent;
  positionInptGk.options[0].textContent =
    formulaire.querySelector(".position").textContent;

  return formulaire;
}
// .........................................................add les donner dans card....................................................
function inputAdd(event) {
  deleteButton.classList.add("hidden");
  formule = event.target.parentElement;
  cardInput.classList.add("hidden");
  formulaire.querySelector(".cardsInfoDetails").classList.remove("hidden");

  stockData = [
    formule.querySelector(".nameInpt").value,
    formule.querySelector(".physicalI").value,
    formule.querySelector(".defendingI").value,
    formule.querySelector(".dribblingI").value,
    formule.querySelector(".passingI").value,
    formule.querySelector(".shootingI").value,
    formule.querySelector(".paceI").value,
    formule.querySelector(".rating").value,
    formule.querySelector(".nationalityI").value,
    formule.querySelector(".equipe").value,
    formule.querySelector(".photo").value,
  ];
  // ...................................debut: validation des donnes..........................................................
  if (formule.querySelector(".nameInpt").value.trim() == "") {
    formInputs.forEach((input) => (input.value = ""));
    event.preventDefault();
    alert("remplire les champ");

    return;
  }

  for (let i = 8; i < 11; i++) {
    if (!URL.canParse(stockData[i])) {
      formInputs.forEach((input) => (input.value = ""));

      alert("URL est invalide");

      return;
    }
  }
  for (let i = 1; i < 7; i++) {
    if (Number(stockData[i]) >= 100 || Number(stockData[i]) < 1) {
      formInputs.forEach((input) => (input.value = ""));
      alert("choisir une nombre entre 1 et 99 ");

      return;
    }
  }
  // ...................................Fin: validation des donnes..........................................................

  formulaire.querySelector(".namePlayer").textContent =
    formule.querySelector(".nameInpt").value;
  formulaire.querySelector(".logo").src =
    formule.querySelector(".equipe").value;
  formulaire.querySelector(".photoPlayer").src =
    formule.querySelector(".photo").value;
  formulaire.querySelector(".flagg").src =
    formule.querySelector(".nationalityI").value;
  formulaire.querySelector(".rate").textContent =
    formule.querySelector(".rating").value;
  formulaire.querySelector(".paceValeur").textContent =
    formule.querySelector(".paceI").value;
  formulaire.querySelector(".shootingValeur").textContent =
    formule.querySelector(".shootingI").value;
  formulaire.querySelector(".passingValeur").textContent =
    formule.querySelector(".passingI").value;
  formulaire.querySelector(".dribblingValeur").textContent =
    formule.querySelector(".dribblingI").value;
  formulaire.querySelector(".defendingValeur").textContent =
    formule.querySelector(".defendingI").value;
  formulaire.querySelector(".physicalValeur").textContent =
    formule.querySelector(".physicalI").value;
  btn.textContent = "modifier";

  cardInput.style.display = "none";
}
function del(event) {
  formulaire.querySelector(".photoPlayer").textContent = "";
  formulaire.querySelector(".namePlayer").textContent = "";
  formulaire.querySelector(".rate").src = "";
  formulaire.querySelector(".logo").classList.remove("src");
  formulaire.querySelector(".flagg").src = "";
  formulaire.querySelector(".rate").textContent = "";
  formulaire.querySelector(".paceValeur").textContent = "";
  formulaire.querySelector(".dribblingValeur").textContent = "";
  formulaire.querySelector(".passingValeur").textContent = "";
  formulaire.querySelector(".defendingValeur").textContent = "";
  formulaire.querySelector(".physicalValeur").textContent = "";
  formulaire.querySelector(".shootingValeur").textContent = "";
  formulaire.querySelector(".cardsInfoDetails").classList.add("hidden");
  deleteButton.classList.add("hidden");
  formInputs.forEach((input) => (input.value = ""));
  btn.textContent = "ajouter";

  cardInput.style.display = "none";
 
}
// .................................................................
