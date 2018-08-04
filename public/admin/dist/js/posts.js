/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 18);
/******/ })
/************************************************************************/
/******/ ({

/***/ 18:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(19);


/***/ }),

/***/ 19:
/***/ (function(module, exports) {



$(function () {

	$('#users-table').on('click', '.btn-show', function () {
		$('#show').modal('show');
		id = $(this).data('id');
		$.ajax({
			type: 'GET',
			url: app_url + 'admin/posts/' + id,
			success: function success(response) {
				console.log(response);
				$('.jumbotron').remove();
				$('.modal-body').append('<div class="jumbotron"><div class="container"><p>' + response.title + '</p><p>' + response.description + '</p>@foreach(' + response.images + '+ as $image)<p><img src="{{ asset("$image->image_path") }}"></p>@endforeach</div></div>');
			}
		});
	});

	$('.btn-create').click(function () {
		$('#create').modal('show');
	});

	$('#submit').click(function (e) {
		e.preventDefault();
		var name = $('input#name').val();
		var price = $('input#price').val();
		var quantity = $('input#quantity').val();
		console.log(name);
		console.log(price);
		console.log(quantity);

		$.ajax({
			type: 'POST',
			url: app_url + '/products/store',
			data: { name: name, price: price, quantity: quantity },
			success: function success(response) {}
		});
	});

	$('.btn-edit').click(function () {
		id = $(this).data('id');
		$('#edit-' + id).modal('show');
		$.ajax({
			type: 'GET',
			url: app_url + 'products/' + id + '/edit',
			success: function success(response) {
				$('input#name').val(response.name);
				$('input#price').val(response.price);
				$('input#quantity').val(response.quantity);
			}
		});
	});

	// $('.btn-del').click(function(){
	// 	var r = confirm("Bạn có muốn xóa sản phẩm không!");
	//     if (r == true) {
	//       var id = $(this).data('id');
	// 		$.ajax({
	// 			type: 'delete',
	// 			url: 'posts/'+ id,
	// 			success: function(response){

	// 				$('#post_'+id).remove();  
	// 			}
	// 		})
	//     } else {
	//         // txt = "You pressed Cancel!";
	//     }
	// })

});

/***/ })

/******/ });