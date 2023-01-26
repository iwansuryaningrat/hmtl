<?= $this->extend('mainpage/layout/template'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<!-- FINISH -->
<header class="headers" style="background-image: url(/mainpage/images/jumbotron-kalender.jpg);">
	<div class="container">
		<div class="body__section text-center">
			<h2>KALENDER</h2>
		</div> <!-- end body section -->
	</div> <!-- end container -->
</header> <!-- end header -->

<!-- calendar -->

<div class="kalender__section">
	<div class="container">
		<!-- kalender header -->
		<div class="title__section text-center">
			<h3>Agenda</h3>
			<p>Temukan berbagai agenda kegiatan dan akademik di Himpunan Mahasiswa Teknik Lingkungan</p>
		</div> <!-- end kalender header -->
		<div class="kalender__content">
			<div id='calendar'></div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			initialDate: '2021-11-12',
			// eventDidMount: function(info) {
			// 	var tooltip = new Tooltip(info.el, {
			// 		title: info.event.extendedProps.description,
			// 		placement: 'top',
			// 		trigger: 'hover',
			// 		container: 'body'
			// 	});
			// },
			dayMaxEvents: true,
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: [
				<?php foreach ($kegiatan as $cal) : ?> {
						title: '<?= $cal['kegiatan']; ?>',
						description: "<?= $cal['kategori']; ?>",
						start: "<?= $cal['tanggal']; ?>"
					},
				<?php endforeach; ?>
			]
		});

		calendar.render();
	});
</script>

<?= $this->endSection(); ?>