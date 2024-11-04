console.log('main ready');
document.addEventListener('DOMContentLoaded', function () {

           const els = Array.from(document.querySelectorAll('[data-show]'));
           for(const el of els) {
             el.addEventListener('change', () => {
               const id = el.getAttribute("data-show")
               const ob = document.getElementById(id +'_hint');
               if( ob.style.display !== "block" ){
                    ob.style.display="block";
               } else {
                    ob.style.display="none";
               }
             });
           }
           const consent_enabled = document.getElementById('consent_enabled');
           function toggleAdditionalField() {
               const consent_enabled_section = document.getElementById('consent_enabled_section');
                if (event.currentTarget.checked) {
                     consent_enabled_section.style.display="block";
                } else {
                     consent_enabled_section.style.display="none";
                }
           }

            toggleAdditionalField();
            consent_enabled.addEventListener('change', toggleAdditionalField);
});
