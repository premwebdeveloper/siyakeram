<script type="text/javascript">

    $(document).ready(function(){

        // On click selected checkbox
        $(document).on('click', '.selected_checkbox', function(){
            var gender_val = $('#selected_input').val();
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
                data : {"_token": "{{ csrf_token() }}", 'items': items, 'gender_val': gender_val},
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

        $(document).on('click', '.state', function(){

            // get city according to state id
            var selected_states = [];
            $('input.state:checkbox:checked').each(function () {
                selected_states.push($(this).attr('id'));
            });

            var items = '';

            // Make a string from all items
            $.each( selected_states, function( key, value ) {
              items += value + '|';
            });

            $.ajax({
                method : 'post',
                url : 'getCityByState',
                async : true,
                data : {"_token": "{{ csrf_token() }}", 'items': items},
                success:function(response){
                    console.log(response);
                    $("#searched_city").html('');
                    $("#searched_city").html(response.html);
                },
                error: function(data){
                    console.log(data);
                },
            });

        });
    });
</script>