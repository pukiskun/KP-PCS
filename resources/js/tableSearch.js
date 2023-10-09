$(document).ready(function () {
  var table = $('#arsipTable').DataTable()

  $(document).on('click', '.boxy', function (e) {
    e.preventDefault()

    var keyword = $(this).text()
    table.search(keyword).draw()

    $('#offcanvasExample').offcanvas('hide')
  })

  $(document).on('click', '.linky-search', function (e) {
    e.preventDefault()

    var $pElement = $(this).find('#buttonText')
    var keyword = $pElement.text()

    table.search(keyword).draw()
    $('#offcanvasExample').offcanvas('hide')
  })
})
