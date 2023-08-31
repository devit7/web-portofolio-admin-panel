const openModalButton = document.getElementById('openModalButton');
const openModalButton2 = document.getElementById('openModalButton2');
const deleteButtons = document.querySelectorAll('.delete-button');
const closeModalButton = document.getElementById('closeModalButton');
const closeModalButton2 = document.getElementById('closeModalButton2');
const overlay = document.getElementById('overlay');
const modalContainer = document.getElementById('modalContainer');
const modalContainer2 = document.getElementById('modalContainer2');
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

