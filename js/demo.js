jQuery(function($) {

	// Custom: iPad by gitaarik
	// ********************
	$('#ipad').keyboard({

		display: {
			'bksp'    : '\u2190',
			'accept'  : 'return',
			'default' : 'ABC',
			'shift'   : '\u21d1',
			'meta1'   : '.?123',
			'meta2'   : '#+='
		},

		layout: 'custom',

		customLayout: {

			'default': [
				'q w e r t y u i o p {bksp}',
				'a s d f g h j k l {enter}',
				'{s} z x c v b n m , . {s}',
				'{meta1} {space} {meta1} {accept}'
			],
			'shift': [
				'Q W E R T Y U I O P {bksp}',
				'A S D F G H J K L {enter}',
				'{s} Z X C V B N M ! ? {s}',
				'{meta1} {space} {meta1} {accept}'
			],
			'meta1': [
				'1 2 3 4 5 6 7 8 9 0 {bksp}',
				'- / : ; ( ) \u20ac & @ {enter}',
				'{meta2} . , ? ! \' " {meta2}',
				'{default} {space} {default} {accept}'
			],
			'meta2': [
				'[ ] { } # % ^ * + = {bksp}',
				'_ \\ | ~ < > $ \u00a3 \u00a5 {enter}',
				'{meta1} . , ? ! \' " {meta1}',
				'{default} {space} {default} {accept}'
			]

		}

	});

	// Custom: iPad email by gitaarik
	// ********************
	$('#ipad-email').keyboard({

		display: {
			'bksp'    : '\u2190',
			'enter'   : 'return',
			'default' : 'ABC',
			'meta1'   : '.?123',
			'meta2'   : '#+=',
			'accept'  : '\u21d3'
		},

		layout: 'custom',

		customLayout: {

			'default': [
				'q w e r t y u i o p {bksp}',
				'a s d f g h j k l {enter}',
				'{s} z x c v b n m @ . {s}',
				'{meta1} {space} _ - {accept}'
			],
			'shift': [
				'Q W E R T Y U I O P {bksp}',
				'A S D F G H J K L {enter}',
				'{s} Z X C V B N M @ . {s}',
				'{meta1} {space} _ - {accept}'
			],
			'meta1': [
				'1 2 3 4 5 6 7 8 9 0 {bksp}',
				'` | { } % ^ * / \' {enter}',
				'{meta2} $ & ~ # = + . {meta2}',
				'{default} {space} ! ? {accept}'
			],
			'meta2': [
				'[ ] { } \u2039 \u203a ^ * " , {bksp}',
				'\\ | / < > $ \u00a3 \u00a5 \u2022 {enter}',
				'{meta1} \u20ac & ~ # = + . {meta1}',
				'{default} {space} ! ? {accept}'
			]

		}

	});

	// Console showing callback messages
	// ********************
	$('.ui-keyboard-input').bind('visible hidden beforeClose accepted canceled restricted', function(e, keyboard, el, status){
		var c = $('#console'),
			t = '<li><span class="keyboard">' + $(el).parent().find('h2 .tooltip-tipsy').text() + '</span>';
			switch (e.type){
				case 'visible'  : t += ' keyboard is <span class="event">visible</span>'; break;
				case 'hidden'   : t += ' keyboard is now <span class="event">hidden</span>'; break;
				case 'accepted' : t += ' content "<span class="content">' + el.value + '</span>" was <span class="event">accepted</span>' + ($(el).is('[type=password]') ? ', yeah... not so secure :(' : ''); break;
				case 'canceled' : t += ' content was <span class="event ignored">ignored</span>'; break;
				case 'restricted'  : t += ' The "' + String.fromCharCode(e.keyCode) + '" key is <span class="event ignored">restricted</span>!'; break;
				case 'beforeClose' : t += ' keyboard is about to <span class="event">close</span>, contents were <span class="event ' + (status ? 'accepted">accepted' : 'ignored">ignored') + '</span>'; break;
			}
		t += '</li>';
		c.append(t);
		if (c.find('li').length > 3) { c.find('li').eq(0).remove(); }
	});

	// Show code
	// ********************
	$('h2 span').click(function(){
		var orig = 'Click, then scroll down to see this code',
			active = 'Scroll down to see the code for this example',
			t = '<h3>' + $(this).parent().text() + ' Code</h3>' + $(this).closest('.block').find('.code').html();
		// add indicator & update tooltips
		$('h2 span')
			.attr({ title : orig, 'original-title': orig })
			.parent()
			.filter('.active')
			.removeClass('active');
		$(this)
			.attr({ title : active, 'original-title': active })
			// hide, then show the tooltip to force updating & realignment
			.tipsy('hide')
			.tipsy('show')
			.parent().addClass('active');
		$('#showcode').html(t).show();
	});

	// add tooltips
	// ********************
	$('.tooltip-tipsy').tipsy({ gravity: 's' });
	$('.navbar [title]').tipsy({ gravity: 'n' });

// ********************
// Extension demos
// ********************

	// Set up typing simulator extension on ALL keyboards
	$('.ui-keyboard-input').addTyping();

	// simulate typing into the keyboard
	// \t or {t} = tab, \b or {b} = backspace, \r or \n or {e} = enter
	// added {l} = caret left, {r} = caret right & {d} = delete
	$('#inter-type').click(function(){
		$('#inter').getkeyboard().reveal().typeIn("{t}Hal{l}{l}{d}e{r}{r}l'o{b}o {e}{t}World", 500);
		return false;
	});
	$('#meta-type').click(function(){
		var meta = $('#meta').getkeyboard();
		meta.reveal().typeIn('aBcD1112389\u2648\u2649', 700, function(){ meta.accept(); alert('all done!'); });
		return false;
	});

	// Autocomplete demo
	var availableTags = [
		"ActionScript",
		"AppleScript",
		"Asp",
		"BASIC",
		"C",
		"C++",
		"Clojure",
		"COBOL",
		"ColdFusion",
		"Erlang",
		"Fortran",
		"Groovy",
		"Haskell",
		"Java",
		"JavaScript",
		"Lisp",
		"Perl",
		"PHP",
		"Python",
		"Ruby",
		"Scala",
		"Scheme"
	];
	$('#text')
		.autocomplete({
			source: availableTags
		})
		.addAutocomplete();

	prettyPrint();

});
