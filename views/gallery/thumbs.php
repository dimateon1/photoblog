<?php require_once ROOT.'/templates/header.php'; ?>
<<<<<<< HEAD

<ul id="category">
<?php foreach ($returnParams as $image): ?>
    <li class="category" id="<?php echo $image['id']; ?>">
    <a href="#modal" role="button" class="btn" data-toggle="modal" data-id="<?php echo $image['id']; ?>">
    <img id='wer' src="<?php echo $image['linkthumb']; ?>"></a>
    <div class="photo_info">
    	<img src="/templates/images/prosmotr.png" id="like_png"><p id="likes">47</p>
    	<img src="/templates/images/like.png" id="view_png"><p id="views">71</p>
=======

<ul id="category">
    <?php foreach ($returnParams as $image): ?>
        <li class="category" id="<?php echo $image['id']; ?>">
            <a href="#modal" role="button" class="btn" data-toggle="modal" data-id="<?php echo $image['id']; ?>">
                <img id='wer' src="<?php echo $image['linkthumb']; ?>"></a>
            <div class="photo_info">
                <img src="/templates/images/prosmotr.png" id="like_png"><p id="likes">47</p>
                <img src="/templates/images/like.png" id="view_png"><p id="views">71</p>
            </div>
        </li>
    <?php endforeach; ?>
</ul>


    <div id="modal" class="modal">
        <div class="modal header">

        </div>
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
>>>>>>> e2eb55b545e04f5c8543000482b7f2a08d35f14b
    </div>



<<<<<<< HEAD

    <ul id="category">
<?php foreach ($returnParams as $image): ?>
        <li class="category" id="<?php echo $image['id']; ?>">
    <a href="/gallery/<?php echo $image['category']; ?>/<?php echo $image['id']; ?>"><img src="<?php echo $image['linkthumb']; ?>"></a>
            <p id="<?php echo $image['id']; ?>"><?php echo $image['views'];?></p>
            <p id="<?php echo $image['id']; ?>"><?php echo $image['likes'];?></p>
        </li>

<?php endforeach; ?>
    </ul>
<?php require_once ROOT.'/templates/header.php'; ?>

=======
<?php require_once ROOT.'/templates/footer.php'; ?>
>>>>>>> e2eb55b545e04f5c8543000482b7f2a08d35f14b