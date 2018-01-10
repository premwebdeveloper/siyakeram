<script type="text/javascript">

    $(document).ready(function(){

        // On click selected checkbox
        $(document).on('click', '.selected_checkbox', function(){

            // Push selected items in array
            var selected_items = [];
            $('input.selected_checkbox:checkbox:checked').each(function () {
                selected_items.push($(this).attr('id'));
            });

            var items = '';

            // Make a string from all items
            $.each( selected_items, function( key, value ) {
              items += value + '|';
            });

            $.ajax({
                method : 'post',
                url : 'search_user_for',
                async : true,
                data : {"_token": "{{ csrf_token() }}", 'items': items},
                success:function(response){
                    console.log(response);
                    $("#searched_data").html('');
                    $("#searched_data").html(response.html);
                },
                error: function(data){
                    console.log(data);
                },
            });
        });
    });
</script>