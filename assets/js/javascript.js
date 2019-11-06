$(document).ready(function(){
	var t = $('.dataTable').DataTable({
		"columnDefs": [{
			"searchable": false,
			"orderable": false,
			"targets": 'no-sort',
		}],
		"pageLength": 25,
		"order": [],
		"language": {
			"lengthMenu": "Tampilkan _MENU_ data per halaman",
			"zeroRecords": "Data tidak tersedia",
			"info": "Halaman _PAGE_ dari _PAGES_ halaman",
			"infoEmpty": "",
			"infoFiltered": "(disaring dari _MAX_ jumlah data)",
			"search": "Pencarian",
			"paginate": {
				"first":      "Pertama",
				"last":       "Terakhir",
				"next":       "Selanjutnya",
				"previous":   "Sebelumnya"
			},
		}
	});
	t.on('order.dt search.dt', function() {
		t.column(0, {search:'applied', order:'applied'}).nodes().each(function (cell, i) {
			cell.innerHTML = i+1+'.';
		});
	}).draw();
});

$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
});
$(function() {
	//Flashdata Tambah Perusahaan
	$('.modalTambahFaq').on('click', function(){
		$('#modalFaqLabel').html('Tambah FAQ');
		$('.modal-footer button[type=submit').html('Tambah');
		$('input').val("");
	});
	//Flashdata Ubah Perusahaan
	$('.modalUbahFaq').on('click', function(){
		$('#modalFaqLabel').html('Ubah FAQ');
		$('.modal-footer button[type=submit').html('Ubah');
		$('.modal-dialog .formFaq').attr('action', 'http://localhost/himifda/admin/updateFaq');
		
		//Ajax Ubah Perusahaan
		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/himifda/admin/getFaq',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#id').val(data.id);
				$('#pertanyaan').val(data.pertanyaan);
				$('#jawaban').val(data.jawaban);
			}
		});
	});
});
