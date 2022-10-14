Validator = (options) => {
    formElement = document.querySelector(options.form)

    if(formElement) {
        options.rules.forEach((rule)=> {
            var inputElement = formElement.querySelector(rule.selector)
            if (inputElement) {
                inputElement.onblur = () => {
                    var errorMessage = rule.test(inputElement.value)
                    if (errorMessage) {
                        
                    }
                }
            }
        })
    }
}

// Rules list
Validator.isChars = (selector) => {
    return {
        selector: selector,
        test: (value) => {
            var iChars = "&";
            for (var i = 0; i < value.length; i++) {
                if (iChars.indexOf(value.charAt(i)) != -1) {
                    $(document).ready(function() {
                        $("#toast-alert-chars").toast('show');
                    });
                    return false;
                }
            }
        }
    }
}