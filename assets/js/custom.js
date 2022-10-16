function changeImage(element) {
  var main_prodcut_image = document.getElementById('main_product_image');
  main_prodcut_image.src = element.src;
}

var myLink = document.querySelector('a[href="#"]');
myLink.addEventListener('click', function (e) {
  e.preventDefault();
});
