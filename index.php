<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="form-content">
        <form id="contactForm" action="php.php" method="POST" onsubmit="return validateForm()">
        <h1>Регистрация</h1>
        <div class="inputs">
            <input type="text" id="name" name="name" placeholder="Имя" required>
            
            <input type="text" id="company" name="company" placeholder="Сайт компании" required>

            <input type="tel" id="phone" name="phone" placeholder="Телефон" required>
            </div>
            <button type="submit" disabled>Получить код</button>
            
            <div class="form-group">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">Отправляя сведения через электронную форму, вы даете согласие на обработку персональных данных, 
                    в том числе сбор, хранение и передачу третьим лицам представленной вами информации на условиях Политики обработки персональных данных 
                    <a href="#"">Политики обработки персональных данных</a>.</label>
            </div>
        </form>
        <script>
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
        </script>
      
    </div>
    <script src="script.js"></script>
</body>
</html> 

