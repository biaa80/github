/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
    
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Cliente #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

/**
 * Formata os campos CPF, CEP, PHONE e MOBILE 
 */
function formatInput(input, type) {
  let value = input.value.replace(/\D/g, '');

  switch (type) {
      case 'cep':
          value = value.replace(/^(\d{2})(\d{3})(\d{0,3})$/, '$1.$2-$3');
          break;
      case 'cpf':
          value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{0,2})$/, '$1.$2.$3-$4');
          break;
      case 'phone':
          value = value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, '$1 $2-$3');
          break;
      case 'mobile':
          value = value.replace(/^(\d{2})(\d{5})(\d{0,4})$/, '$1 $2-$3');
          break;
  }

  input.value = value;
}