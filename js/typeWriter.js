
var i = 0;
var txt = 'I am using netlify for my site and soon this will be my new site So if you found this link, you are extra special I love you "/<3!"/';
 /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
window.onload = typeWriter; 