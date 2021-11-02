const $form = document.querySelector ('#form');
const $button = document.querySelector ('#mail');

$form.addEventListener('submit', handleSubmit );

function handleSubmit(event) {
    event.preventDefault()
    const form = new FormData (this)
    $button.setAttribute('href', `mailto:lautaroreinosoquinteto@gmail.com?subject=${form.get('nombre')}${form.get('e-email')}&body=${form.get(mensaje)}`)
    $button.click ()
};