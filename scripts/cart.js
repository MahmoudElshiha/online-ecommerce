// function subtotal() {

// }

function buildCart(array, table_body) {
  subtotal_label = document.getElementById("subtotal_label");
  total_label = document.getElementById("total_label");

  //   console.log(array);
  for (product of array) {
    // init table row element
    table_row = document.createElement("tr");

    // init table data elements
    const delete_product = document.createElement("td");
    const product_image = document.createElement("td");
    const product_name = document.createElement("td");
    const product_price = document.createElement("td");
    const product_amount = document.createElement("td");
    const product_subtotal = document.createElement("td");

    const amount_input = document.createElement("input");
    amount_input.type = "number";
    amount_input.value = product.amount;
    amount_input.min = 1;

    // add data to every td
    delete_product.innerHTML = `<a href="./functions/delete_cart.php?element_id=${product.element_id}"><i class="far fa-times-circle"></i></a>`;
    product_image.innerHTML = `<img src="${product.product_image}" alt="Product Image">`;
    product_name.innerHTML = `${product.product_name}`;
    product_price.innerHTML = `${product.product_price}`;
    product_subtotal.innerHTML = amount_input.value * product.product_price;

    // change total labels
    subtotal_label.innerHTML =
      parseInt(subtotal_label.innerHTML) + parseInt(product_subtotal.innerHTML);
    total_label.innerHTML = subtotal_label.innerHTML;

    amount_input.addEventListener("change", function () {
      subtotal = amount_input.value * product_price.innerHTML; // new product_subtotal
      if (subtotal_label) {
        res = parseInt(subtotal) - parseInt(product_subtotal.innerHTML);
        subtotal_label.innerHTML = parseInt(subtotal_label.innerHTML) + res;
        total_label.innerHTML = subtotal_label.innerHTML;
      }

      product_subtotal.innerHTML = subtotal;
    });

    product_amount.appendChild(amount_input);

    // add elements to the row
    table_row.appendChild(delete_product);
    table_row.appendChild(product_image);
    table_row.appendChild(product_name);
    table_row.appendChild(product_price);
    table_row.appendChild(product_amount);
    table_row.appendChild(product_subtotal);

    // add row to the body
    table_body.appendChild(table_row);
  }
}
