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