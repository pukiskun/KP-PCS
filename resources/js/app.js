import './bootstrap'
import 'datatables.net-bs5'
import 'datatables.net-buttons-bs5'
import.meta.glob(['../images/**'])

$(document).ready(function () {
  // Listen for changes in the select element
  $('#kategori').on('change', function () {
    var selectedValue = $(this).val()

    // Find both select elements
    var selectBox = $('#parent-box select')
    var selectMap = $('#parent-map select')

    if (selectedValue == 2) {
      // Activate the BOX select and change its name
      selectBox.attr('name', 'parent')
      selectMap.attr('name', 'inactive_parent')
      $('#parent-box').show()
      $('#parent-map').hide()
    } else if (selectedValue == 3) {
      // Activate the MAP select and change its name
      selectMap.attr('name', 'parent')
      selectBox.attr('name', 'inactive_parent')
      $('#parent-map').show()
      $('#parent-box').hide()
    } else {
      // Deactivate both selects
      selectBox.attr('name', 'inactive_parent')
      selectMap.attr('name', 'inactive_parent')
      $('#parent-box').hide()
      $('#parent-map').hide()
    }
  })

  var table = $('#arsipTable').DataTable()

  // Use event delegation to handle click events for links with class 'boxy'
  $(document).on('click', '.boxy', function (e) {
    e.preventDefault() // Prevent the default link behavior (navigation)

    var keyword = $(this).text() // Extract the text content of the clicked link
    table.search(keyword).draw()

    $('#offcanvasExample').offcanvas('hide') // Hide the offcanvas after the search
  })

  // Handle click events for links with class 'linky'
  $(document).on('click', '.linky', function (e) {
    e.preventDefault() // Prevent the default link behavior (navigation)

    // Find the closest 'p' element within the clicked link's parent
    var $pElement = $(this).find('#buttonText')

    // Extract the text content of the 'p' element
    var keyword = $pElement.text()

    // Perform the DataTables search with the extracted text
    table.search(keyword).draw()

    // Close the offcanvas
    $('#offcanvasExample').offcanvas('hide')
  })
})
