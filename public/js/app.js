

    document.addEventListener("DOMContentLoaded", function() {
        const user = document.querySelector('.username');
        const pass = document.querySelector('.password');
        const btn = document.querySelector('.submit-btn');
    
        btn.addEventListener('click', function() {
            const username = user.value;
            const password = pass.value;
    
            if (username === "admin" && password === "admin123") {
                window.location.href = "/create";
            } else if (username === "" || password === "") {
                alert("Harap isi username dan password!");
            } else {
                alert("Username atau password salah!");
            }
        });
    });
    