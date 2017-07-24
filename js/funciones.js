var loginBtn = $('.topAside .clienteAreaIn, .clienteArea .closeBtn'),
	clientForm = $('.topAside .clienteArea');

	loginBtn.on('click', function(){
		clientForm.toggleClass('clicked');
		window.getSelection().removeAllRanges();
	});

var ayudaBtn = $('.chat-fixed .botonAyuda, .cont-chat .closeBtn'),
	ayudaForm = $('.cont-chat');

	ayudaBtn.on('click', function(){
		ayudaForm.toggleClass('mostrarChat');
		window.getSelection().removeAllRanges();
	});