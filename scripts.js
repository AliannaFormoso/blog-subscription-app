document.querySelector('#reg-form').addEventListener('submit', function(event) {

    let firstName = document.querySelector('input[name="first_name"]').value;
    let lastName = document.querySelector('input[name="last_name"]').value;
    let email = document.querySelector('input[name="email"]').value;
    let userName = document.querySelector('input[name="user_name"]').value;
    let password = document.querySelector('input[name="pass"]').value;
    
    
    if(firstName.trim() === '' || lastName.trim() === '' || email.trim() === '' || userName.trim() === '' || password.trim() === '' ) {
        alert('⚠️ Please, fill out all form fields');
        event.preventDefault();
       
    } else {
        
        alert(" ✅ Form sent successfully!");
        
    }
});


document.getElementById("reset-button").addEventListener("click", reset);
function reset() {
    document.querySelector("#reg-form").reset();
}



