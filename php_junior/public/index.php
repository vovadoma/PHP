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
        <a href="">Brand 33</a>
        <a href="">Brand 34</a>
        <br>
        <button type="submit">Submit</button>
        <button class="c-form-button_delete j-button_delete" type="submit">Delete</button>
    </form>
</div>

<script>

    $("document").ready( function(e) {

        $('#container').on('click', '.j-button_delete', function () {
            alert(444);
            e.stopPropagation();
        });


    });

</script>

<?php


?>


