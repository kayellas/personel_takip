// admin-script.js

document.addEventListener('DOMContentLoaded', function () {
    const userForm = document.getElementById('user-form');
    const tableBody = document.querySelector('tbody');

    userForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // Kullanıcı ekleme işlemleri burada yapılacak
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const role = document.getElementById('role').value;

        // Örnek olarak yeni bir satır ekleyelim
        const newRow = `<tr>
            <td>${Math.floor(Math.random() * 100)}</td>
            <td>${username}</td>
            <td>${email}</td>
            <td>${role}</td>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>`;

        tableBody.innerHTML += newRow;
        userForm.reset();
    });
});
