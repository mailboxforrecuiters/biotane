<script>
function update () {
document.getElementById('element_28').value = document.getElementById('element_25').value * document.getElementById('element_27').value;
}
</script>
<input id='element_27' type='number' onchange='update()' ><input id='element_25' type='number' onchange='update()' ><input id='element_28' type='number'>
