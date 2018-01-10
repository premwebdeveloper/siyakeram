<script type="text/javascript">

    $(document).ready(function(){

        var marital_status = [];
        var annual_income = [];

        /*// search users
        $(document).on('click', '.marital_status', function(){

            var marital = $(this).attr('id');

            var income = $('.annual_income').attr('id');

            marital_status.push({
                marital: marital
            });

            console.log(marital_status);

        });*/


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

            /*alert(items);
            console.log(selected_items);*/

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