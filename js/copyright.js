var footer = document.getElementById('copyright');
var year = new Date().getFullYear();
console.log(year);

function copyright(){
    footer.innerHTML = '<strong> Copyright &copy; Yjang Wynter ' + year + '</strong>';
}
window.onload = copyright;