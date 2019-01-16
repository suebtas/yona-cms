/**
 * FileUpload - a TinyMCE image upload plugin base on jQuery File Upload plugin
 * fileupload/js/dialog.js
 *
 * Author: Marius Gebhardt
 *
 * Version: 0.1
 */

 $(function () {
	'use strict';

	$('#fileupload').fileupload({
		url: $('#uploadForm').attr('action'),
		dataType: 'json',

		start: function(){
			var str = '<div class="hover01"> <center>';
			top.tinymce.execCommand('mceInsertContent', false, str);
		},
		done: function (e, data) {
			var str = "";
			$.each(data.result.files, function (index, file) {
				str += '<a class="fancybox-thumbs" data-fancybox-group="thumb" href="' + file.url +'"><figure><img src="' + file.thumbnailUrl +'" width="150" height="150"></<figure></a>';				
			});
			top.tinymce.execCommand('mceInsertContent', false, str);
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css(
				'width',
				progress + '%'
			);
		}
	}).prop('disabled', !$.support.fileInput)
	.parent().addClass($.support.fileInput ? undefined : 'disabled');
});
