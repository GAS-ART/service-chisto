//Async form sending
const forms = document.querySelectorAll('form');
const errorsMessagesUA = {
  name: ['Не заполнено поле "ВАШЕ ИМЯ"', 'Не заповнено поле "ВАШЕ ІМ\'Я"', 'Поле \"ИМЯ\" должно иметь 2 или больше символов', 'Поле "ІМ\'Я" повинно мати 2 або більше символів', 'Поле \"ИМЯ\" должно иметь не больше 80 символов', 'Поле "ІМ\'Я" повинно мати не більше 80 символів', 'Поле \"ИМЯ\" не может содержать цифры', 'Поле "ІМ\'Я" не може містити цифри'],
  phone: ['Не верный формат номера телефона', 'Невірний формат номеру телефона', 'Не заполнено поле "Номер телефона"', 'Не заповнено поле "Номер телефону"',],
}

forms.forEach(form => {
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const token = form.querySelector('input[name="_token"]').value;
    const nameError = form.querySelector('.error-name');
    const phoneError = form.querySelector('.error-phone');
    const loadingBody = form.closest('.popup__row');
    const loading = loadingBody ? loadingBody.previousElementSibling.previousElementSibling : form.querySelector('.form-loading');
    loading.classList.add('active');
    const formData = new FormData(form);

    const local = 'http://localhost:8000/send-main-form';
    const server = 'https://eltop.artgas.pro/send-main-form'

    try {
      const response = await fetch(local, {
        headers: {
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": token
        },
        method: 'post',
        body: formData,
        credentials: "same-origin",
      })
      if (response.ok) {
        loading.classList.remove('active');
        form.closest('.popup').classList.add('sent');
        nameError.innerText = '';
        nameError.classList.remove('error');
        nameError.previousElementSibling.classList.remove('error');
        nameError.previousElementSibling.previousElementSibling.classList.remove('error');
        phoneError.innerText = '';
        phoneError.classList.remove('error');
        phoneError.previousElementSibling.classList.remove('error');
        phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
        form.reset();
      } else {
        const data = await response.json();
        loading.classList.remove('active');
        if (form.classList.contains('ru')) {
          if (data.errors?.name) {
            nameError.innerText = data.errors?.name[0];
            nameError.classList.add('error');
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
            console.log(nameError.previousElementSibling);
          } else {
            nameError.innerText = '';
            nameError.classList.remove('error');
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = data.errors?.phone[0];
            phoneError.classList.add('error');
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.classList.remove('error');
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
        } else {
          if (data.errors?.name) {
            nameError.innerText = errorsMessagesUA.name[errorsMessagesUA.name.findIndex(msg => msg == data.errors.name[0]) + 1];
            nameError.classList.add('error');
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            nameError.innerText = '';
            nameError.classList.remove('error');
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = errorsMessagesUA.phone[errorsMessagesUA.phone.findIndex(msg => msg == data.errors.phone[0]) + 1];
            phoneError.classList.add('error');
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.classList.remove('error');
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
        }
      }
    } catch (e) {
      console.log(e);
    }
  })
});
