
    /*typeWriter.js */
    var i = 0;
    var txt = 'My name is Yjang Wynter';
    /* The text */
    var speed = 90; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("name").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    /*copyright.js*/
    var footer = document.getElementById('copyright');
    var year = new Date().getFullYear();
    console.log(year);

    function copyright() {
        footer.innerHTML = '<strong> Copyright &copy; Yjang Wynter ' + year + '</strong>';
    }


if (window.addEventListener) // W3C standard
{
    window.addEventListener('load', typeWriter, true);
    window.addEventListener('load', copyright, true); 
}
else if (window.attachEvent) // Microsoft
{
    window.attachEvent('onload', typeWriter);
    window.attachEvent('onload', copyright);
}
console.log('dicks');