function checkCheckBox(f) {
  if (f.agree.checked == false) {
    alert('Please check the box to continue.');
    return false;
  } else
    return true;
}