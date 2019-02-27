const docModalBtns = document.querySelectorAll('.doc-card-page__button');
const modalContent = document.querySelector('.doc-output');
let docName;


const patientForm = document.getElementById('patient-form');

if(patientForm) {
  patientForm.addEventListener('submit', validateForm);
}



function validateForm(e) {
  e.preventDefault();
  const name = document.getElementById('patient-name');
  const re = /^[A-Za-zА-Яа-я]{3,20}$/;

  let validName;
  let validPhone;
  

  if(!re.test(name.value)) {
    name.classList.add('is-invalid');

  } else {
    name.classList.remove('is-invalid');
    validName = true;
  }

  const phone = document.getElementById('patient-phone');
  const re2 = /[0-9]/;


  if(!re2.test(phone.value)) {
    phone.classList.add('is-invalid');

  } else {
    phone.classList.remove('is-invalid');
    validPhone = true;
  }

  if(validPhone && validName) {
    console.log(validPhone, validName );
    patientForm.submit();
  } else {
    return false;
  }

}





// EVENT LISTINER

docModalBtns.forEach(btn => {
  btn.addEventListener('click', (e) => {
    const doc = btn.dataset.doc;
    getDoc(doc);
    e.preventDefault();
  });
});



// FETCH
function getDoc(doc) {
  fetch('../docs.json')
    .then(response => response.json())
    .then(function (data) {
      console.log(data);
      let docOutput;
      data.forEach(elem => {
        if (elem.id === doc) {
          docOutput = elem;
        }
      });
      displayDoc(docOutput);
      return data;
    });
}



function displayDoc(docOutput) {
  modalContent.innerHTML = `
    <img class="doc-modal__img" src="${docOutput.imgSrc}"/> 
    <h3 class="doc-modal__title">${docOutput.name}</h3>
    <input type="hidden" name="Доктор" value="${docOutput.name}" />
  `;
}




