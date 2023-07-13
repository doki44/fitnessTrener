const form = document.querySelector(".notes__form"),
    inputField = form.querySelector(".notes__form-input"),
    sendBtn = form.querySelector("button"),
    noteBox = document.querySelector(".notes-list");

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-note.php", true);
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

noteBox.onmouseenter = () => {
    noteBox.classList.add("active");
}
noteBox.onmouseleave = () => {
    noteBox.classList.remove("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-note.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                noteBox.innerHTML = data;
                console.log(data);
                // if (!noteBox.classList.contains("active")) {
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