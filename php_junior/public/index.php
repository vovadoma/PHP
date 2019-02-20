<?php
    if (!empty($_POST)) {
        header('Content-Type: application/json');

        $deleted_id = $_POST['id'];
        // delete from DB
         echo json_encode([
            'action' => true, 'deleted' => $deleted_id
        ]);
        exit;
    }

?>


<script src="/assets/js/jquery-3.3.1.min.js"></script>

<div id="container">

    <form method="post" action="">
        <div>
            Select:
        </div>
        <input type="number" name="price">
        <br>
        <a href="">Cat 1</a>
        <a href="">Cat 2</a>
        <a href="">Cat 3</a>
        <a href="">Cat 4</a>
        <br>
        <p class="j-par-33">
            <a href="">Brand 33</a> <button data-brand-id="33" class="c-form-button_delete j-button_delete">Delete</button>
        </p>
        <p class="j-par-34">
            <a href="">Brand 34</a> <button data-brand-id="34" class="c-form-button_delete j-button_delete">Delete</button><br>
        </p>
        <button type="submit">Submit</button>
     </form>
</div>

<script>

    $("document").ready( function(e) {

        $('#container').on('click', '.j-button_delete', function (e) {
            var button = $(this);
            var id = button.attr('data-brand-id');
            $.ajax({
                type: "POST",
                url: "/item/delete?id=" + id,
                data: {id: id},
                success: function (data) {
                    if(data.action) {
                        var id = data.deleted;
                        var par = $('#container').find('.j-par-' + id);
                        par.detach();
                        console.log(par);
                    }
                }
            });
            return false;
        });


    });

</script>

<?php


?>


