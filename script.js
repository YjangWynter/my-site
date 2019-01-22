
var i = 0;
var txt = 'Hello, I’m Yjang Wynter.';
var speed = 90;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("name").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
