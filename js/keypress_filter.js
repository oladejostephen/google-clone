var KeypressFilter  = function($element) {
	this.element = $element;
	this.contentEditable = $element[0].isContentEditable;

	this.regex = function(regex) {
		var $element = this.element;

		var that = this;

		$element.keypress(function(e) {
			var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
			var character = String.fromCharCode(charCode);

			var afterKeypress = that.getAfterKeypress(character);

			var valid = (afterKeypress.match(regex) !== null);

			if(!valid) {
				e.preventDefault();
				return false;
			}
		});

		if(!window.keypressBubblingDisabled) {
			window.keypressBubblingDisabled = true;

			$('*').keypress(function(e){
				var $target = $(e.target);

				// console.log(e.target);
				var contentEditable = e.target.isContentEditable;
				// console.log($target.is(':input'));
				if(contentEditable || $target.is(':input')) {
					// console.log('inputable');
				} else {
					// console.log('Not Inputable');
					e.preventDefault();
					return false;
				}
			});
		}
	};

	this.val = function(val) {
		var $element = this.element;
		var contentEditable = $element[0].isContentEditable;

		if(typeof val == 'undefined') {
			var value = contentEditable ? $element.text() : $element.val();

			// console.log(value);
			return value;
		} else {
			if(contentEditable) {
				$element.text(val);
			} else {
				$element.val(val);
			}
		}
	};

	this.getAfterKeypress = function(character) {
		var $element = this.element;
		var element = $element[0];

		var text = this.val();
		var selection = this.getSelection();

		var before = text.slice(0, selection.start);
		var after = text.slice(selection.end);

		var afterKeypress = before + character + after;

		return afterKeypress;
	};

	this.getSelection = function() {
		var containerEl = this.element[0];

		var start;
		var selection;

		var contentEditable = $element[0].isContentEditable;

		if(contentEditable) {
			if(window.getSelection && document.createRange) {
				var range = window.getSelection().getRangeAt(0);
				var preSelectionRange = range.cloneRange();
				preSelectionRange.selectNodeContents(containerEl);
				preSelectionRange.setEnd(range.startContainer, range.startOffset);
				start = preSelectionRange.toString().length;

				selection = {
					start: start,
					end: start + range.toString().length
				};
			} else if(document.selection) {
				var selectedTextRange = document.selection.createRange();
				var preSelectionTextRange = document.body.createTextRange();
				preSelectionTextRange.moveToElementText(containerEl);
				preSelectionTextRange.setEndPoint("EndToStart", selectedTextRange);
				start = preSelectionTextRange.text.length;

				selection = {
					start: start,
					end: start + selectedTextRange.text.length
				};
			}
		} else {
			selection = {
				start: containerEl.selectionStart,
				end: containerEl.selectionEnd
			};
		}

		console.log(selection.start +', '+ selection.end);

		return selection;
	};

	this.phone = function() {
		var $element = this.element;

		var that = this;

		$element.keypress(function(e) {
			var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
			var character = String.fromCharCode(charCode);

			var afterKeypress = that.getAfterKeypress(character);

			// var valid = (afterKeypress.match(regex) !== null);


			var regexs = [
				/^\d{0,3}$/,
				/^\d{3}[-]\d{0,3}$/,
				/^\d{3}[-]\d{3}[-]\d{0,4}$/
			];
			var valid = false; //default
			var match;
			var regex;
			for(var i in regexs) {
				regex = regexs[i];
				console.log(regex);
				match = (afterKeypress.match(regex) !== null);
				if(match) {
					valid = true;
					break;
				}
			}
			console.log(valid);

			var formatted = '';
			if(valid) {
				formatted = afterKeypress;
			} else {
				var numbersOnly = afterKeypress.replace(/\D/g,'');

				var length = numbersOnly.length;


				if(length > 3) {
					var first3 = numbersOnly.substring(0, 3);
					formatted += first3 + '-';

					var rest;
					if(length > 6) {
						var mid3 = numbersOnly.substring(3, 6);
						rest = numbersOnly.substring(6);
						formatted += mid3 + '-' + rest;

						if(length <= 10) {
							// $element.val(formatted);
						} else {
							//prevent input
							formatted = 'too long';
							e.preventDefault();
							return false;
						}
					} else {
						rest = numbersOnly.substring(3);
						formatted += rest;
					}
				} else {
					formatted = numbersOnly;
				}

			}

			e.preventDefault();
			$element.val(formatted);
			console.log(formatted);
		});
	};
};