document.getElementById("cartbtn").onclick = function () {
  var a = document.getElementById("cart");
  a.style.display = "block";
  a.style.width = "300px";
};
document.getElementById("cartbtn").ondblclick = function () {
  var a = document.getElementById("cart");
  a.style.width = "0";
  a.style.display = "none";
};
let list = document.querySelectorAll("#list #item");
list.forEach((item) => {
  item.addEventListener("click", function (event) {
    if (event.target.classList.contains("add")) {
      var itemNew = item.cloneNode(true);
      let checkIsset = false;
      let listCart = document.querySelectorAll("#cart #item");
      listCart.forEach((cart) => {
        if (cart.getAttribute("data-key") == itemNew.getAttribute("data-key")) {
          checkIsset = true;
          cart.classList.add("danger");
          setTimeout;
          (function () {
            cart.classList.remove("danger");
          }),
            1000;
        }
      });
      if (checkIsset == false) {
        document.querySelector(".listCart").appendChild(itemNew);
      }
    }
  });
});
function Remove($key) {
  let listCart = document.querySelectorAll("#cart #item");
  listCart.forEach((item) => {
    if (item.getAttribute("data-key") == $key) {
      item.remove();
      return;
    }
  });
}
