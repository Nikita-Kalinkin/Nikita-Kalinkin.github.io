 const searchLink = document.querySelector('.search-link');
 const searchBlock = document.querySelector('.header-search');
 const searchClose = document.querySelector('.header-search__close');
 searchLink.addEventListener('click', () => {
   searchBlock.style.display = 'block';
 });

 searchClose.addEventListener('click', () => {
   searchBlock.style.display = 'none';
 });

 let formEl = document.querySelector('.callback-form');
 if (formEl) {
   formEl.addEventListener('submit', function(e) {
     e.preventDefault();
     let action = e.currentTarget.getAttribute('action');
     let th = e.currentTarget;
     let form = th;

     let formData = new FormData(form);
     let xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function() {
       if (xhr.readyState === 4) {
         if (xhr.status === 200) {
           console.log('Отправлено');
         }
       }
     }
     xhr.open('POST', action, true);
     xhr.send(formData);
     form.reset();
   })
 }