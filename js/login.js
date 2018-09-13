$(document).ready(
    () => {
       $('#signin-form').on('submit',( event )=>{
           event.preventDefault();
           //get the form data 
           //email field
           let email = $('#userEmail').val();
           let password = $('userPassword').val();
           //create a data object
           let data = {userEmail: userEmail, userPassword:userPassword};
           //send the data via ajax request to handler: /ajax/login.ajax.php
           $.ajax(
                {url: '/ajax/login.ajax.php', method: 'post', dataType: 'json'}    
                
            )
            .done( (response) => {
                
            });
       }); 
    });