
    function validateForm () {
        var name = document.forms['myForm']['name'];
        var surname = document.forms['myForm']['surname'];
        var password = document.forms['myForm']['password'];

        let letters = /^[A-Za-z]+$/;
        let test = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        if ( !(name.value.match(letters)) ||  !(name.value.charAt(0) === name.value.charAt(0).toUpperCase())) {
            window.alert('Please, enter valid name with capital letter');
            name.focus();
            return false;
        }

        if (!(surname.value.match(letters)) || !(surname.value.charAt(0) === surname.value.charAt(0).toUpperCase())) {
            window.alert('Please enter valid last name with capital letter');
            name.focus();
            return false;
        }

        if (! (password.value.match(test))) {
            window.alert('Password must contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character');
            name.focus();
            return false;
        }

        return true;
    }


