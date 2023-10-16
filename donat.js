var donat = document.getElementById("selectdonat").value;
function showPrice() {
    var select = document.getElementById("selectdonat");
    var price = document.getElementById("price");
  
    if (select.value == "1") {
      price.innerHTML = "200 рублей";
    } else if (select.value == "2") {
      price.innerHTML = "300 рублей";
    } else {
      price.innerHTML = "Выберите товар";
    }
  }