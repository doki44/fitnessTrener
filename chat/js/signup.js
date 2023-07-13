const form = document.querySelector(".signup form"),
btn = form.querySelector(".field-signup"),
continueBtn = form.querySelector(".btn-signup input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

let check = document.querySelector('.input-check');

check.onclick = ()=>{
    if(check.checked){
        btn.style.display = "block";
    }else{
        btn.style.display = "none";
    }
}

continueBtn.onclick = ()=>{ 
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            
            if(xhr.status === 200){
                let data = xhr.response;
                
                if (data == "Успех"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }

            }

        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}