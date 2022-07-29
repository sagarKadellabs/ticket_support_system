const togglePassword = document
            .querySelector('#togglePassword');

        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', () => {

            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';

            password.setAttribute('type', type);

            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
        $("#uname").on("keypress", function (e) {
            if ((e.which === 32 && !this.value.length) || (e.which >= 33 && e.which <= 64) || (e.which >= 123 && e.which <= 126) || (e.which >= 91 && e.which <= 96))
                e.preventDefault();
        });
        


    