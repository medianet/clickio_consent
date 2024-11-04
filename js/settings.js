function hintShow(id){
    const ob = document.getElementById(id+'_hint');
    if( ob.style.display !== "block" ){
         ob.style.display="block";
    } else {
         ob.style.display="none";
    }
}

const consent_enabled = document.getElementById('consent_enabled');
consent_enabled.addEventListener('change', (event) => {
  const consent_enabled_section = document.getElementById('consent_enabled_section');
  if (event.currentTarget.checked) {
    consent_enabled_section.style.display="block";
  } else {
    consent_enabled_section.style.display="none";
  }
});