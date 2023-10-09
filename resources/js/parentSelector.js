$(document).ready(function () {
  $('#kategori').on('change', function () {
    var selectedValue = $(this).val()
    var selectBox = $('#parent-box select')
    var selectMap = $('#parent-map select')

    if (selectedValue == 2) {
      selectBox.attr('name', 'parent')
      selectMap.attr('name', 'inactive_parent')
      $('#parent-box').show()
      $('#parent-map').hide()
    } else if (selectedValue == 3) {
      selectMap.attr('name', 'parent')
      selectBox.attr('name', 'inactive_parent')
      $('#parent-map').show()
      $('#parent-box').hide()
    } else {
      selectBox.attr('name', 'inactive_parent')
      selectMap.attr('name', 'inactive_parent')
      $('#parent-box').hide()
      $('#parent-map').hide()
    }
  })
})
