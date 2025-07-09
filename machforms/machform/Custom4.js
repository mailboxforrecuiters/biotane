<script type="text/javascript">
function update totalsqft() {
a = parseInt(document.getElementById('(Sheet 1) Length').value, 10);
b = parseInt(document.getElementById('(Sheet 1) Width').value, 10);
total = a * b;
document.getElementById('(Sheet 1) Total Square Footage').value = total;
}
</script>
<input id='(Sheet 1) Width' type='text' onchange='update totalsqft'> <input id='(Sheet 1) Length' type='text' onchange='update totalsqft'> <input id='(Sheet 1) Total Square Footage' type='text'>
