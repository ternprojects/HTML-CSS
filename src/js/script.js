var modal = document.getElementById('myModal');
var span = document.getElementById('close');
function showModal() {
    modal.style.display = 'flex';
}
span.onclick = function () {
    modal.style.display = 'none';
};
window.onclick = function (event) {
    console.log(event.target);
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};