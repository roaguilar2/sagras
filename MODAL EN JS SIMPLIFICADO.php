MODAL EN JS SIMPLIFICADO
<!-- modal js -->
<dialog>
  <h1>¿Sabías abrir modales asi?</h1>
  <p>¡Y es totalmente nativo! </p>
  <button id="cancel">Salir</button>
</dialog>

<button id="show">Abrir modal</button>

<script> const dialog = document.querySelector('dialog')
const cancel = document.querySelector('#cancel')
const show = document.querySelector('#show')

show.addEventListener('click', () => dialog.showModal())
cancel.addEventListener('click',() => dialog.close()) </script>
<!-- fin de modal js -->

