
<?php require_once ROOT.'/templates/header.php'; ?>

<ul id="category">
    <?php foreach ($returnParams as $image): ?>
        <li class="category" id="<?php echo $image['id']; ?>">
            <a href="#modal" role="button" class="btn" data-toggle="modal" data-id="<?php echo $image['id']; ?>"
               data-counter="<?php echo $image['category']; ?>/<?php echo $image['id']; ?>">
                <img id='wer' src="<?php echo $image['linkthumb']; ?>"></a>
            <div class="photo_info">
                <img src="/templates/images/prosmotr.png" id="like_png">
                <p class="likes" id="counter_<?php echo $image['id']; ?>" ><?php echo $image['views']; ?></p>
                <a class="likes_link" href="javascript://" data-id="<?php echo $image['id']; ?>"> <img src="/templates/images/like.png" id="view_png"></a>
                <p id='likes_<?php echo $image['id']; ?>' class="views" data-id="<?php echo $image['id']; ?>">
                    <?php echo $image['likes']; ?>
                </p>
            </div>
        </li>
    <?php endforeach; ?>
</ul>


    <div id="modal" class="modal">
        <div class="modal header">

        </div>
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>X</span></button>
            <ul class="slider_gallery">
                <?php foreach ($returnParams as $image): ?>
                    <li  class="cat" id="cat_<?php echo $image['id']; ?>">
                        <img src="<?php echo $image['linkfull']; ?>">
                    </li>
                <?php endforeach; ?>
                <div class="nav">

                </div>
            </ul>

        </div>
        
        <script>
            $('.btn').click(function() {
                var id = $(this).attr('data-id');
                $('#cat_' + id).addClass('catActive');
                var open = $('#cat_' + id)
                open.addClass('catActive');
                var counter = $(this).attr('data-counter');
                console.log(counter);
                $('.close').click(function(){
                    open.removeClass('catActive');
                })
            })
        </script>

    </div>



<?php require_once ROOT.'/templates/footer.php'; ?>
