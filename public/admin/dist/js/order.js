 $(document).ready(function(){
    $('.modal').on('hidden.bs.modal', function(e){ 
             $('form').trigger("reset");
          }) ;
        var table_order = $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                orders: [],
                ajax: 'data_orders',
                columns: [
                    { data:'id' , name: 'id' },
                    { data: 'customer_name', name: 'bills.customer_name' },
                    { data: 'customer_address', name: 'bills.customer_address' },
                    { data: 'customer_phone', name: 'bills.customer_phone' },
                    { data: 'total', name: 'total' },
                    { data: 'status', name: 'status' },
                    { data: 'action' , name: 'action'}
                ]
            });

        var table_order_product = $('#order-products-table').DataTable({
                processing: true,
                serverSide: true,
                orders: [],
                ajax: 'data_order_products/1',
                columns: [
                    { data:'product_code' , name: 'products.product_code' },
                    { data: 'thumbnail', name: 'thumbnail' },
                    { data: 'name', name: 'products.name' },
                    { data: 'color', name: 'colors.code_color' },
                    { data: 'size', name: 'sizes.name' },
                    { data: 'quantity', name: 'orders.quantity' },
                    { data: 'price', name: 'price' }
                ]
            });

        $(document).on('click', '.btn-list-order', function(){
            $('#modal-order-product').modal('show');
            id =  $(this).data('id');
                table_order_product.destroy();

                table_order_product = $('#order-products-table').DataTable({
                processing: true,
                serverSide: true,
                orders: [],
                ajax: 'data_order_products/'+id,
                columns: [
                    { data:'product_code' , name: 'products.product_code' },
                    { data: 'thumbnail', name: 'thumbnail' },
                    { data: 'name', name: 'products.name' },
                    { data: 'color', name: 'colors.code_color' },
                    { data: 'size', name: 'sizes.name' },
                    { data: 'quantity', name: 'orders.quantity' },
                    { data: 'price', name: 'price' }
                ]
            });
        })

        $(document).on('click', '.btn-', function(){
            $('#modal-order-product').modal('show');
            id =  $(this).data('id');
                table_order_product.destroy();

                table_order_product = $('#order-products-table').DataTable({
                processing: true,
                serverSide: true,
                orders: [],
                ajax: 'data_order_products/'+id,
                columns: [
                    { data:'product_code' , name: 'products.product_code' },
                    { data: 'thumbnail', name: 'thumbnail' },
                    { data: 'name', name: 'products.name' },
                    { data: 'color', name: 'colors.code_color' },
                    { data: 'size', name: 'sizes.name' },
                    { data: 'quantity', name: 'orders.quantity' },
                    { data: 'price', name: 'price' }
                ]
            });
        })

        $(document).on('click', '.btn-cancel-order', function(){
            swal({
                  title: "Bạn có muốn Hủy đơn hàng này khôngs ?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    id = $(this).data('id');
                    $.ajax({
                        type: 'delete',
                        url: 'orders/'+ id,
                        success: function(response){
                            table_order.ajax.reload();
                            toastr.success('Đơn hàng đã bị hủy!!!')
                        }
                    })
                  } else {
                    toastr.info('Hủy thao tác')
                  }
                });
        })
 })

 