const form = document.querySelector(".addPhoto"),
    inputField = form.querySelector(".addPhoto-input"),
    sendBtn = form.querySelector("button"),
    fileBox = document.querySelector(".files-list");

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-photo.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {
                inputField.value = "";
                // scrollToBottom();
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}

fileBox.onmouseenter = () => {
    fileBox.classList.add("active");
}
fileBox.onmouseleave = () => {
    fileBox.classList.remove("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-photo.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                fileBox.innerHTML = data;
                // if (!fileBox.classList.contains("active")) {
                //     scrollToBottom();
                // }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

// function scrollToBottom() {
//     chatBox.scrollTop = chatBox.scrollHeight;
// }