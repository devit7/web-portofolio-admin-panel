const openModalButton = document.getElementById('openModalButton');
const deleteButtons = document.querySelectorAll('.delete-button');
const closeModalButton = document.getElementById('closeModalButton');
const overlay = document.getElementById('overlay');
const modalContainer = document.getElementById('modalContainer');
const userForm = document.getElementById('userForm');

openModalButton.addEventListener('click', () => {
    overlay.classList.remove('hidden');
    modalContainer.classList.remove('hidden');
});

closeModalButton.addEventListener('click', () => {
    overlay.classList.add('hidden');
    modalContainer.classList.add('hidden');
});

userForm.addEventListener('submit', (event) => {
    // Add your form submission logic here
});

