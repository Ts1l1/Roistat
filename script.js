  function validateForm() {
    const nameInput = document.getElementById('name');
    const companyInput = document.getElementById('company');
    const phoneInput = document.getElementById('phone');
    const submitButton = document.querySelector('button[type="submit"]');
    
    if (nameInput.value.trim() !== '' && companyInput.value.trim() !== '' && phoneInput.value.trim() !== '') {
        submitButton.disabled = false; 
    } else {
        submitButton.disabled = true;
    }
}

document.getElementById('name').addEventListener('input', validateForm);
document.getElementById('company').addEventListener('input', validateForm);
document.getElementById('phone').addEventListener('input', validateForm);

window.onload = function() {
    document.querySelector('button[type="submit"]').disabled = true; 
};

