window.cfields = {"6":"origemurl"};
window._show_thank_you = function(id, message, trackcmp_url, email) {
	var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
	form.querySelector('._form-content').style.display = 'none';
	thank_you.innerHTML = message;
	thank_you.style.display = 'block';
	const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
	var visitorObject = window[vgoAlias];
	if (email && typeof visitorObject !== 'undefined') {
		visitorObject('setEmail', email);
		visitorObject('update');
	} else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
		// Site tracking URL to use after inline form submission.
		_load_script(trackcmp_url);
	}
	if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
	var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
	if (old_error) old_error.parentNode.removeChild(old_error);
	err.innerHTML = message;
	err.className = '_error-inner _form_error _no_arrow';
	var wrapper = document.createElement('div');
	wrapper.className = '_form-inner';
	wrapper.appendChild(err);
	button.parentNode.insertBefore(wrapper, button);
	document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
	if (html) {
		var div = document.createElement('div');
		div.className = '_error-html';
		div.innerHTML = html;
		err.appendChild(div);
	}
};
window._load_script = function(url, callback) {
	var head = document.querySelector('head'), script = document.createElement('script'), r = false;
	script.type = 'text/javascript';
	script.charset = 'utf-8';
	script.src = url;
	if (callback) {
		script.onload = script.onreadystatechange = function() {
			if (!r && (!this.readyState || this.readyState == 'complete')) {
				r = true;
				callback();
			}
		};
	}
	head.appendChild(script);
};
(function() {
	if (window.location.search.search("excludeform") !== -1) return false;
	var getCookie = function(name) {
		var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
		return match ? match[2] : null;
	}
	var setCookie = function(name, value) {
		var now = new Date();
		var time = now.getTime();
		var expireTime = time + 1000 * 60 * 60 * 24 * 365;
		now.setTime(expireTime);
		document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
	}
			var addEvent = function(element, event, func) {
		if (element.addEventListener) {
			element.addEventListener(event, func);
		} else {
			var oldFunc = element['on' + event];
			element['on' + event] = function() {
				oldFunc.apply(this, arguments);
				func.apply(this, arguments);
			};
		}
	}
	var _removed = false;
	var _form_output = '\<style\>\n #_form_6217FB3928036_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }\n #_form_6217FB3928036_ * { outline:0; }\n ._form_hide { display:none; visibility:hidden; }\n ._form_show { display:block; visibility:visible; }\n #_form_6217FB3928036_._form-top { top:0; }\n #_form_6217FB3928036_._form-bottom { bottom:0; }\n #_form_6217FB3928036_._form-left { left:0; }\n #_form_6217FB3928036_._form-right { right:0; }\n #_form_6217FB3928036_ input[type=\"text\"],#_form_6217FB3928036_ input[type=\"date\"],#_form_6217FB3928036_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:14px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }\n #_form_6217FB3928036_ textarea { resize:none; }\n #_form_6217FB3928036_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#f60 !important; border:0 !important; color:#fff !important; padding:10px !important; }\n #_form_6217FB3928036_ ._close-icon { cursor:pointer; background-image:url(\'https:\/\/d226aj4ao1t61q.cloudfront.net\/esfkyjh1u_forms-close-dark.png\'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }\n #_form_6217FB3928036_ ._close-icon:before { position:relative; }\n #_form_6217FB3928036_ ._form-body { margin-bottom:30px; }\n #_form_6217FB3928036_ ._form-image-left { width:150px; float:left; }\n #_form_6217FB3928036_ ._form-content-right { margin-left:164px; }\n #_form_6217FB3928036_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }\n #_form_6217FB3928036_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url(\'https:\/\/d226aj4ao1t61q.cloudfront.net\/hh9ujqgv5_aclogo_li.png\'); background-size:130px auto; background-repeat:no-repeat; }\n #_form_6217FB3928036_ .form-sr-only { position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0, 0, 0, 0); border:0; }\n #_form_6217FB3928036_ ._form-label,#_form_6217FB3928036_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }\n #_form_6217FB3928036_._dark ._form-branding { color:#333; }\n #_form_6217FB3928036_._dark ._form-branding ._logo { background-image:url(\'https:\/\/d226aj4ao1t61q.cloudfront.net\/jftq2c8s_aclogo_dk.png\'); }\n #_form_6217FB3928036_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }\n #_form_6217FB3928036_ ._form_element * { font-size:14px; }\n #_form_6217FB3928036_ ._form_element._clear { clear:both; width:100%; float:none; }\n #_form_6217FB3928036_ ._form_element._clear:after { clear:left; }\n #_form_6217FB3928036_ ._form_element input[type=\"text\"],#_form_6217FB3928036_ ._form_element input[type=\"date\"],#_form_6217FB3928036_ ._form_element select,#_form_6217FB3928036_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-family:inherit; }\n #_form_6217FB3928036_ ._field-wrapper { position:relative; }\n #_form_6217FB3928036_ ._inline-style { float:left; }\n #_form_6217FB3928036_ ._inline-style input[type=\"text\"] { width:150px; }\n #_form_6217FB3928036_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; }\n #_form_6217FB3928036_ ._form_element img._form-image { max-width:100%; }\n #_form_6217FB3928036_ ._form_element ._form-fieldset { border:0; padding:0.01em 0 0 0; margin:0; min-width:0; }\n #_form_6217FB3928036_ ._clear-element { clear:left; }\n #_form_6217FB3928036_ ._full_width { width:100%; }\n #_form_6217FB3928036_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }\n #_form_6217FB3928036_ input[type=\"text\"]._has_error,#_form_6217FB3928036_ textarea._has_error { border:#f37c7b 1px solid; }\n #_form_6217FB3928036_ input[type=\"checkbox\"]._has_error { outline:#f37c7b 1px solid; }\n #_form_6217FB3928036_ ._error { display:block; position:absolute; font-size:14px; z-index:10000001; }\n #_form_6217FB3928036_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }\n #_form_6217FB3928036_ ._error._below { padding-top:4px; top:100%; right:0; }\n #_form_6217FB3928036_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }\n #_form_6217FB3928036_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }\n #_form_6217FB3928036_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:14px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }\n #_form_6217FB3928036_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }\n #_form_6217FB3928036_ ._button-wrapper ._error-inner._form_error { position:static; }\n #_form_6217FB3928036_ ._error-inner._no_arrow { margin-bottom:10px; }\n #_form_6217FB3928036_ ._error-arrow { position:absolute; width:0; height:0; }\n #_form_6217FB3928036_ ._error-html { margin-bottom:10px; }\n .pika-single { z-index:10000001 !important; }\n #_form_6217FB3928036_ input[type=\"text\"].datetime_date { width:69%; display:inline; }\n #_form_6217FB3928036_ select.datetime_time { width:29%; display:inline; height:32px; }\n @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }\n #_form_6217FB3928036_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }\n #_form_6217FB3928036_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }\n #_form_6217FB3928036_ ._form-content { margin:0; width:100%; }\n #_form_6217FB3928036_ ._form-inner { display:block; min-width:100%; }\n #_form_6217FB3928036_ ._form-title,#_form_6217FB3928036_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }\n #_form_6217FB3928036_ ._form-title { font-size:1.2em; }\n #_form_6217FB3928036_ ._form_element { margin:0 0 20px; padding:0; width:100%; }\n #_form_6217FB3928036_ ._form-element,#_form_6217FB3928036_ ._inline-style,#_form_6217FB3928036_ input[type=\"text\"],#_form_6217FB3928036_ label,#_form_6217FB3928036_ p,#_form_6217FB3928036_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }\n #_form_6217FB3928036_ ._row._checkbox-radio label { display:inline; }\n #_form_6217FB3928036_ ._row,#_form_6217FB3928036_ p,#_form_6217FB3928036_ label { margin-bottom:0.7em; width:100%; }\n #_form_6217FB3928036_ ._row input[type=\"checkbox\"],#_form_6217FB3928036_ ._row input[type=\"radio\"] { margin:0 !important; vertical-align:middle !important; }\n #_form_6217FB3928036_ ._row input[type=\"checkbox\"] + span label { display:inline; }\n #_form_6217FB3928036_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }\n #_form_6217FB3928036_ ._form-image { max-width:100%; height:auto !important; }\n #_form_6217FB3928036_ input[type=\"text\"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }\n #_form_6217FB3928036_ input[type=\"radio\"],#_form_6217FB3928036_ input[type=\"checkbox\"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }\n #_form_6217FB3928036_ button[type=\"submit\"] { padding:20px; font-size:1.5em; }\n #_form_6217FB3928036_ ._inline-style { margin:20px 0 0 !important; }\n }\n #_form_6217FB3928036_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:transparent !important; border:0px solid #fff !important; width:500px; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#fff !important; }\n #_form_6217FB3928036_._inline-form,#_form_6217FB3928036_._inline-form ._form-content,#_form_6217FB3928036_._inline-form input,#_form_6217FB3928036_._inline-form ._submit { font-family:\"IBM Plex Sans\", Helvetica, sans-serif, \'IBM Plex Sans\', arial, sans-serif; }\n #_form_6217FB3928036_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }\n #_form_6217FB3928036_:before,#_form_6217FB3928036_:after { content:\" \"; display:table; }\n #_form_6217FB3928036_:after { clear:both; }\n #_form_6217FB3928036_._inline-style { width:auto; display:inline-block; }\n #_form_6217FB3928036_._inline-style input[type=\"text\"],#_form_6217FB3928036_._inline-style input[type=\"date\"] { padding:10px 12px; }\n #_form_6217FB3928036_._inline-style button._inline-style { position:relative; top:27px; }\n #_form_6217FB3928036_._inline-style p { margin:0; }\n #_form_6217FB3928036_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }\n #_form_6217FB3928036_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }\n @media all and (min-width:320px) and (max-width:667px) { #_form_6217FB3928036_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }\n }\n\n #_form_6217FB3928036_._form_176 { margin:0px; padding:0px; }\n #_form_6217FB3928036_ ._form_element { padding-left:0px; }\n #_form_6217FB3928036_ ._submit { width:100%; }\n\<\/style\>\n\<link href=\"https:\/\/fonts.googleapis.com\/css2?family=Lato&family=Montserrat&family=Roboto&display=swap\" rel=\"stylesheet\"\>\n\n\n\<form method=\"POST\" action=\"https://hashtagtreinamentos.activehosted.com\/proc.php\" id=\"_form_6217FB3928036_\" class=\"_form _form_176 _inline-form  _dark\" novalidate\>\n	\<input type=\"hidden\" name=\"u\" value=\"6217FB3928036\" \/\>\n	\<input type=\"hidden\" name=\"f\" value=\"176\" \/\>\n	\<input type=\"hidden\" name=\"s\" \/\>\n	\<input type=\"hidden\" name=\"c\" value=\"0\" \/\>\n	\<input type=\"hidden\" name=\"m\" value=\"0\" \/\>\n	\<input type=\"hidden\" name=\"act\" value=\"sub\" \/\>\n	\<input type=\"hidden\" name=\"v\" value=\"2\" \/\>\n	\<input type=\"hidden\" name=\"or\" value=\"ff6e033c82ed7d65d98e3e4e0aa36cae\" \/\>\n	\<div class=\"_form-content\"\>\n						\<div class=\"_form_element _x64548996 _full_width _clear\" \>\n						\<div class=\"_form-title\"\>Cadastre-se para receber conteúdo gratuito de Excel e VBA toda semana!\<\/div\>\n					\<\/div\>\n						\<div class=\"_form_element _x41432449 _full_width \" \>\n						\<label for=\"fullname\" class=\"_form-label\"\>Seu primeiro nome*\<\/label\>\n			\<div class=\"_field-wrapper\"\>\n				\<input type=\"text\" id=\"fullname\" name=\"fullname\" placeholder=\"Seu primeiro nome\" required\/\>\n			\<\/div\>\n					\<\/div\>\n						\<div class=\"_form_element _x72223670 _full_width \" \>\n						\<label for=\"email\" class=\"_form-label\"\>Seu melhor e-mail*\<\/label\>\n			\<div class=\"_field-wrapper\"\>\n				\<input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Seu melhor e-mail\" required\/\>\n			\<\/div\>\n					\<\/div\>\n						\<div class=\"_form_element _field6 _full_width \" \>\n						\<input type=\"hidden\" name=\"field[6]\" value=\"\" \/\>\n					\<\/div\>\n				\<div class=\"_button-wrapper _full_width\"\>\<button id=\"_form_176_submit\" class=\"_submit\" type=\"submit\"\>Enviar\<\/button\>\<\/div\>		\<div class=\"_clear-element\"\>\<\/div\>\n	\<\/div\>\n	\<div class=\"_form-thank-you\" style=\"display:none;\"\>\<\/div\>\n	\<\/form\>\n';
	var _form_element = null, _form_elements = document.querySelectorAll('._form_176');
	for (var fe = 0; fe < _form_elements.length; fe++) {
		_form_element = _form_elements[fe];
		if (_form_element.innerHTML.trim() === '') break;
		_form_element = null;
	}
	if (!_form_element) {
		_form_element = document.createElement('div');
		if (!document.body) { document.firstChild.appendChild(document.createElement('body')); }
		document.body.appendChild(_form_element);
	}
	_form_element.innerHTML = _form_output;
	var form_to_submit = document.getElementById('_form_6217FB3928036_');
	var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

	var getUrlParam = function(name) {
		var params = new URLSearchParams(window.location.search);
		return params.get(name) || false;
	};

	for (var i = 0; i < allInputs.length; i++) {
		var regexStr = "field\\[(\\d+)\\]";
		var results = new RegExp(regexStr).exec(allInputs[i].name);
		if (results != undefined) {
			allInputs[i].dataset.name = window.cfields[results[1]];
		} else {
			allInputs[i].dataset.name = allInputs[i].name;
		}
		var fieldVal = getUrlParam(allInputs[i].dataset.name);

		if (fieldVal) {
			if (allInputs[i].dataset.autofill === "false") {
				continue;
			}
			if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
				if (allInputs[i].value == fieldVal) {
					allInputs[i].checked = true;
				}
			} else {
				allInputs[i].value = fieldVal;
			}
		}
	}

	var remove_tooltips = function() {
		for (var i = 0; i < tooltips.length; i++) {
			tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
		}
		tooltips = [];
	};
	var remove_tooltip = function(elem) {
		for (var i = 0; i < tooltips.length; i++) {
			if (tooltips[i].elem === elem) {
				tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
				tooltips.splice(i, 1);
				return;
			}
		}
	};
	var create_tooltip = function(elem, text) {
		var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
		if (elem.type != 'radio' && elem.type != 'checkbox') {
			tooltip.className = '_error';
			arrow.className = '_error-arrow';
			inner.className = '_error-inner';
			inner.innerHTML = text;
			tooltip.appendChild(arrow);
			tooltip.appendChild(inner);
			elem.parentNode.appendChild(tooltip);
		} else {
			tooltip.className = '_error-inner _no_arrow';
			tooltip.innerHTML = text;
			elem.parentNode.insertBefore(tooltip, elem);
			new_tooltip.no_arrow = true;
		}
		new_tooltip.tip = tooltip;
		new_tooltip.elem = elem;
		tooltips.push(new_tooltip);
		return new_tooltip;
	};
	var resize_tooltip = function(tooltip) {
		var rect = tooltip.elem.getBoundingClientRect();
		var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
		if (scrollPosition < 40) {
			tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
		} else {
			tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
		}
	};
	var resize_tooltips = function() {
		if (_removed) return;
		for (var i = 0; i < tooltips.length; i++) {
			if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
		}
	};
	var validate_field = function(elem, remove) {
		var tooltip = null, value = elem.value, no_error = true;
		remove ? remove_tooltip(elem) : false;
		if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
		if (elem.getAttribute('required') !== null) {
			if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
				var elems = form_to_submit.elements[elem.name];
				if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
					no_error = elem.checked;
				}
				else {
					no_error = false;
					for (var i = 0; i < elems.length; i++) {
						if (elems[i].checked) no_error = true;
					}
				}
				if (!no_error) {
					tooltip = create_tooltip(elem, "Please select an option.");
				}
			} else if (elem.type =='checkbox') {
				var elems = form_to_submit.elements[elem.name], found = false, err = [];
				no_error = true;
				for (var i = 0; i < elems.length; i++) {
					if (elems[i].getAttribute('required') === null) continue;
					if (!found && elems[i] !== elem) return true;
					found = true;
					elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
					if (!elems[i].checked) {
						no_error = false;
						elems[i].className = elems[i].className + ' _has_error';
						err.push("Checking %s is required".replace("%s", elems[i].value));
					}
				}
				if (!no_error) {
					tooltip = create_tooltip(elem, err.join('<br/>'));
				}
			} else if (elem.tagName == 'SELECT') {
				var selected = true;
				if (elem.multiple) {
					selected = false;
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected) {
							selected = true;
							break;
						}
					}
				} else {
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected && !elem.options[i].value) {
							selected = false;
						}
					}
				}
				if (!selected) {
					elem.className = elem.className + ' _has_error';
					no_error = false;
					tooltip = create_tooltip(elem, "Please select an option.");
				}
			} else if (value === undefined || value === null || value === '') {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "This field is required.");
			}
		}
		if (no_error && elem.name == 'email') {
			if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "Enter a valid email address.");
			}
		}
		if (no_error && /date_field/.test(elem.className)) {
			if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "Enter a valid date.");
			}
		}
		tooltip ? resize_tooltip(tooltip) : false;
		return no_error;
	};
	var needs_validate = function(el) {
        if(el.getAttribute('required') !== null){
            return true
        }
        if(el.name === 'email' && el.value !== ""){
            return true
        }
        return false
	};
	var validate_form = function(e) {
		var err = form_to_submit.querySelector('._form_error'), no_error = true;
		if (!submitted) {
			submitted = true;
			for (var i = 0, len = allInputs.length; i < len; i++) {
				var input = allInputs[i];
				if (needs_validate(input)) {
					if (input.type == 'text') {
						addEvent(input, 'blur', function() {
							this.value = this.value.trim();
							validate_field(this, true);
						});
						addEvent(input, 'input', function() {
							validate_field(this, true);
						});
					} else if (input.type == 'radio' || input.type == 'checkbox') {
						(function(el) {
							var radios = form_to_submit.elements[el.name];
							for (var i = 0; i < radios.length; i++) {
								addEvent(radios[i], 'click', function() {
									validate_field(el, true);
								});
							}
						})(input);
					} else if (input.tagName == 'SELECT') {
						addEvent(input, 'change', function() {
							validate_field(this, true);
						});
					} else if (input.type == 'textarea'){
						addEvent(input, 'input', function() {
							validate_field(this, true);
						});
					}
				}
			}
		}
		remove_tooltips();
		for (var i = 0, len = allInputs.length; i < len; i++) {
			var elem = allInputs[i];
			if (needs_validate(elem)) {
				if (elem.tagName.toLowerCase() !== "select") {
					elem.value = elem.value.trim();
				}
				validate_field(elem) ? true : no_error = false;
			}
		}
		if (!no_error && e) {
			e.preventDefault();
		}
		resize_tooltips();
		return no_error;
	};
	addEvent(window, 'resize', resize_tooltips);
	addEvent(window, 'scroll', resize_tooltips);
	window._old_serialize = null;
	if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
	_load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
		window._form_serialize = window.serialize;
		if (window._old_serialize) window.serialize = window._old_serialize;
	});
	var form_submit = function(e) {
		e.preventDefault();
		if (validate_form()) {
			// use this trick to get the submit button & disable it using plain javascript
			document.querySelector('#_form_176_submit').disabled = true;
						var serialized = _form_serialize(document.getElementById('_form_6217FB3928036_')).replace(/%0A/g, '\\n');
			var err = form_to_submit.querySelector('._form_error');
			err ? err.parentNode.removeChild(err) : false;
			_load_script('https://hashtagtreinamentos.activehosted.com/proc.php?' + serialized + '&jsonp=true');
		}
		return false;
	};
	addEvent(form_to_submit, 'submit', form_submit);
})();
