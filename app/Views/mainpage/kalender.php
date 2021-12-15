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
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: [{
					title: 'All Day Event',
					start: '2021-11-01'
				},
				{
					title: 'Long Event',
					start: '2021-11-07',
					end: '2021-11-10'
				},
				{
					groupId: '999',
					title: 'Repeating Event',
					start: '2021-11-09T16:00:00'
				},
				{
					groupId: '999',
					title: 'Repeating Event',
					start: '2021-11-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2021-11-11',
					end: '2021-11-13'
				},
				{
					title: 'Conference meja bundar',
					start: '2021-12-13T11:00:00',
					end: '2021-12-15T11:00:00'
				},
				{
					title: 'Meeting',
					start: '2021-11-12T10:30:00',
					end: '2021-11-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2021-11-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2021-11-12T14:30:00'
				},
				{
					title: 'Birthday Party',
					start: '2021-11-13T07:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2021-12-14T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2021-11-28'
				}
			]
		});
		calendar.render();
	});
</script>

<?= $this->endSection(); ?>