console.log('main ready');

function hintShow(id){
    const ob = document.getElementById(id+'_hint');
    if( ob.style.display !== "block" ){
         ob.style.display="block";
    } else {
         ob.style.display="none";
    }
}


document.addEventListener('DOMContentLoaded', function () {
            const mainField = document.getElementById('mainField');
            const additionalField = document.getElementById('additionalField');

            function toggleAdditionalField() {
                if (mainField.value === 'show') {
                    additionalField.style.display = 'block';
                } else {
                    additionalField.style.display = 'none';
                }
            }

            toggleAdditionalField();
            mainField.addEventListener('change', toggleAdditionalField);
});
