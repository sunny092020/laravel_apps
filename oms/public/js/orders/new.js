$(document).ready(function(){
  var table = $('#product').DataTable({
    "columnDefs": [
      { "name": "id", "visible": false, "targets": 0 },
      { "name": "type", "targets": 1 },
      { "name": "code", "targets": 2 },
      { "name": "name", "targets": 3 },
      { "name": "name_jp", "targets": 4 },
      { "name": "unit", "targets": 5 },
      { "name": "quantity", "targets": 6 },
      { "name": "previous_day_quantity", "targets": 7 },
      { "name": "previous_week_quantity", "targets": 8 },
      { "name": "price", "targets": 9 },
      { "name": "total", "targets": 10 }
    ],
    scrollY:        '60vh',
    scrollCollapse: true,
    paging:         false,
  });

  $( ".quantity" ).change(function() {
    var tr = $(this).closest( "tr" );
    var product_id = table.row( tr ).cell( tr.index(), 'id:name' ).data();
    var quantity = $(this).val();
    var department = $("#department").val();

    var params = "department=" + encodeURIComponent(department) + "&" +
                 "product_id=" + encodeURIComponent(product_id) + "&" +
                 "quantity=" + encodeURIComponent(quantity);
    var url = "/orders/update";

    var post = function() {
      $.ajax({
        url: url,
        type:'post',
        data: params,
        dataType: 'text',
        success: function(data, textStatus) {
          console.log("success")
        },
        error: function(xmlHttpRequest, textStatus, errorThrown) {
          console.log("error")
        }
      });
    };

    post();

  });
  
});
