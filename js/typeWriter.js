
var i = 0;
var txt = 'My name is Yjang Wynter';
 /* The text */
var speed = 82; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
window.onload = typeWriter; 