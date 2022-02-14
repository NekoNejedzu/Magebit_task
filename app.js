const form = document.getElementById('form');
const email = document.getElementById('emailinput');
const errors=document.getElementsByTagName('small');



form.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();
	

});

function checkInputs() {

	const emailValue = email.value.trim();
	var columbia =emailValue.slice(emailValue.length - 3);
	var eee=".co";
    Array.from(errors).forEach((x) => {
	if(emailValue === '') {
		setErrorFor(email, 'Email address is required')	
        email.style.borderColor='#B80808';
        x.style.display = "block";
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Please provide a valid e-mail address');
        email.style.borderColor='#B80808';
        x.style.display = "block";
	} 
	else if(!form.checkbox.checked){
		setErrorFor(email, 'You must accept the terms and conditions');
        email.style.borderColor='#B80808';
        x.style.display = "block";
	}
	else if (columbia===eee) {
		setErrorFor(email, 'We are not accepting subscriptions from Colombia emails');
        email.style.borderColor='#B80808';
        x.style.display = "block";
	} else {
		$.ajax({
            type: 'POST',
            url: 'insert.php',
            data:  ({email:emailValue}),
			cache: false,
            success: function () {		
			x.style.display = "none";
        	email.style.borderColor='#4066A5'; 
        	form.remove();
        	document.getElementById('thank-you').style.display = 'block'
            }
          });

        }
    })    
	}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	small.innerText = message;
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}