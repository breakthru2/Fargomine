// JavaScript Document for the Image Preiew (APTECH COMPUTER EDUCATION)

window.onload = function() {
    var files = document.querySelectorAll("input[type=file]");
    files[0].addEventListener("change", function(e) {
        if(this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) { document.querySelector(".img-box").style.backgroundImage = 'url(' + e.target.result + ')';
            document.querySelector(".img-box").style.display = "block"; }
            reader.readAsDataURL(this.files[0]);
        }
    });
}