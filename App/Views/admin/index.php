<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: '.$baseUrl.'Home/login');
	exit;
}
?>
<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
  <div class="mb-2 sm:mb-0">
  </div>
  <div>
    <a href="<?php $baseUrl?>invitados" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Invitados</a>
    <a href="<?php $baseUrl?>asistencia" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">asistencia</a>
    <a href="<?php $baseUrl?>" base="<?php echo $baseUrl?>" class="btnsalir  text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Salir</a>
  </div>
</nav>


</main>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/logout.js"></script>