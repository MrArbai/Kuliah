function submitForm(url) {
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = url;
    document.body.appendChild(form);
    form.submit();
}
function handleCheckboxChange(checkboxNumber) {
    if (checkboxNumber === 1) {
      document.getElementById("inlineCheckbox2").checked = false;
    } else if (checkboxNumber === 2) {
      document.getElementById("inlineCheckbox1").checked = false;
    }
  }