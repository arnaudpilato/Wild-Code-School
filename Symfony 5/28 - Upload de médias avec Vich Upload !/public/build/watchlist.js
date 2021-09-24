(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["watchlist"],{

/***/ "./assets/watchlist.js":
/*!*****************************!*\
  !*** ./assets/watchlist.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.promise */ "./node_modules/core-js/modules/es.promise.js");

document.querySelector('#watchlist').addEventListener('click', addToWatchlist);

function addToWatchlist() {
  // Get the link object you click in the DOM
  var watchlistIcon = document.getElementById('watchlistIcon');
  var link = watchlistIcon.dataset.href; // Send an HTTP request with fetch to the URI defined in the href

  fetch(link) // Extract the JSON from the response
  .then(function (res) {
    return res.json();
  }) // Then update the icon
  .then(function (res) {
    if (res.isInWatchlist) {
      watchlistIcon.classList.remove('far'); // Remove the .far (empty heart) from classes in <i> element

      watchlistIcon.classList.add('fas'); // Add the .fas (full heart) from classes in <i> element
    } else {
      watchlistIcon.classList.remove('fas'); // Remove the .fas (full heart) from classes in <i> element

      watchlistIcon.classList.add('far'); // Add the .far (empty heart) from classes in <i> element
    }
  });
}

/***/ })

},[["./assets/watchlist.js","runtime","vendors~watchlist"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvd2F0Y2hsaXN0LmpzIl0sIm5hbWVzIjpbImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImFkZEV2ZW50TGlzdGVuZXIiLCJhZGRUb1dhdGNobGlzdCIsIndhdGNobGlzdEljb24iLCJnZXRFbGVtZW50QnlJZCIsImxpbmsiLCJkYXRhc2V0IiwiaHJlZiIsImZldGNoIiwidGhlbiIsInJlcyIsImpzb24iLCJpc0luV2F0Y2hsaXN0IiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7O0FBQUFBLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixZQUF2QixFQUFxQ0MsZ0JBQXJDLENBQXNELE9BQXRELEVBQStEQyxjQUEvRDs7QUFFQSxTQUFTQSxjQUFULEdBQTBCO0FBQzFCO0FBQ0ksTUFBSUMsYUFBYSxHQUFHSixRQUFRLENBQUNLLGNBQVQsQ0FBd0IsZUFBeEIsQ0FBcEI7QUFDQSxNQUFJQyxJQUFJLEdBQUdGLGFBQWEsQ0FBQ0csT0FBZCxDQUFzQkMsSUFBakMsQ0FIc0IsQ0FJMUI7O0FBQ0lDLE9BQUssQ0FBQ0gsSUFBRCxDQUFMLENBQ0k7QUFESixHQUVLSSxJQUZMLENBRVUsVUFBQUMsR0FBRztBQUFBLFdBQUlBLEdBQUcsQ0FBQ0MsSUFBSixFQUFKO0FBQUEsR0FGYixFQUdJO0FBSEosR0FJS0YsSUFKTCxDQUlVLFVBQVNDLEdBQVQsRUFBYztBQUNoQixRQUFJQSxHQUFHLENBQUNFLGFBQVIsRUFBdUI7QUFDbkJULG1CQUFhLENBQUNVLFNBQWQsQ0FBd0JDLE1BQXhCLENBQStCLEtBQS9CLEVBRG1CLENBQ29COztBQUN2Q1gsbUJBQWEsQ0FBQ1UsU0FBZCxDQUF3QkUsR0FBeEIsQ0FBNEIsS0FBNUIsRUFGbUIsQ0FFaUI7QUFDdkMsS0FIRCxNQUdPO0FBQ0haLG1CQUFhLENBQUNVLFNBQWQsQ0FBd0JDLE1BQXhCLENBQStCLEtBQS9CLEVBREcsQ0FDb0M7O0FBQ3ZDWCxtQkFBYSxDQUFDVSxTQUFkLENBQXdCRSxHQUF4QixDQUE0QixLQUE1QixFQUZHLENBRWlDO0FBQ3ZDO0FBQ0osR0FaTDtBQWNILEMiLCJmaWxlIjoid2F0Y2hsaXN0LmpzIiwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3dhdGNobGlzdCcpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgYWRkVG9XYXRjaGxpc3QpO1xuXG5mdW5jdGlvbiBhZGRUb1dhdGNobGlzdCgpIHtcbi8vIEdldCB0aGUgbGluayBvYmplY3QgeW91IGNsaWNrIGluIHRoZSBET01cbiAgICBsZXQgd2F0Y2hsaXN0SWNvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd3YXRjaGxpc3RJY29uJyk7XG4gICAgbGV0IGxpbmsgPSB3YXRjaGxpc3RJY29uLmRhdGFzZXQuaHJlZjtcbi8vIFNlbmQgYW4gSFRUUCByZXF1ZXN0IHdpdGggZmV0Y2ggdG8gdGhlIFVSSSBkZWZpbmVkIGluIHRoZSBocmVmXG4gICAgZmV0Y2gobGluaylcbiAgICAgICAgLy8gRXh0cmFjdCB0aGUgSlNPTiBmcm9tIHRoZSByZXNwb25zZVxuICAgICAgICAudGhlbihyZXMgPT4gcmVzLmpzb24oKSlcbiAgICAgICAgLy8gVGhlbiB1cGRhdGUgdGhlIGljb25cbiAgICAgICAgLnRoZW4oZnVuY3Rpb24ocmVzKSB7XG4gICAgICAgICAgICBpZiAocmVzLmlzSW5XYXRjaGxpc3QpIHtcbiAgICAgICAgICAgICAgICB3YXRjaGxpc3RJY29uLmNsYXNzTGlzdC5yZW1vdmUoJ2ZhcicpOyAvLyBSZW1vdmUgdGhlIC5mYXIgKGVtcHR5IGhlYXJ0KSBmcm9tIGNsYXNzZXMgaW4gPGk+IGVsZW1lbnRcbiAgICAgICAgICAgICAgICB3YXRjaGxpc3RJY29uLmNsYXNzTGlzdC5hZGQoJ2ZhcycpOyAvLyBBZGQgdGhlIC5mYXMgKGZ1bGwgaGVhcnQpIGZyb20gY2xhc3NlcyBpbiA8aT4gZWxlbWVudFxuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICB3YXRjaGxpc3RJY29uLmNsYXNzTGlzdC5yZW1vdmUoJ2ZhcycpOyAvLyBSZW1vdmUgdGhlIC5mYXMgKGZ1bGwgaGVhcnQpIGZyb20gY2xhc3NlcyBpbiA8aT4gZWxlbWVudFxuICAgICAgICAgICAgICAgIHdhdGNobGlzdEljb24uY2xhc3NMaXN0LmFkZCgnZmFyJyk7IC8vIEFkZCB0aGUgLmZhciAoZW1wdHkgaGVhcnQpIGZyb20gY2xhc3NlcyBpbiA8aT4gZWxlbWVudFxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==