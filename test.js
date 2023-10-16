function showPrice() {
    var select = document.getElementById("product-list");
    var price = document.getElementById("price");
  
    if (select.value == "1") {
      price.innerHTML = "Цена товара 1: $10";
    } else if (select.value == "2") {
      price.innerHTML = "Цена товара 2: $20";
    } else if (select.value == "3") {
      price.innerHTML = "Цена товара 3: $30";
    } else {
      price.innerHTML = "";
    }
  }