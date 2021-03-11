<div class="catalog-show">
    <h1 class="page-title">Catalog</h1>
    <div class="categories">
        <div class="category">
            <div class="category-title">
                <a class="category-name" href="/catalog/category/<?=$laptops[0]['category_id']?>">Laptops</a>
                <div class="flexblock"></div>
                <a class="category-show-all" href="/catalog/category/<?=$laptops[0]['category_id']?>">SHOW ALL</a>
            </div>
            <div class="products">
                <?
                    foreach($laptops as $laptop){
                        ?>
                        <div class="product">
                            <p class="product-name"><?=$laptop['product_name']?></p>
                            <img class="product-img-laptop" src="<?=$laptop['img']?>">
                            <p class="product-price"><?=$laptop['price']?>,- €</p>
                        </div>
                        <?
                    }
                ?>
            </div>
        </div>
        <div class="category">
            <div class="category-title">
                <a class="category-name" href="/catalog/category/<?=$phones[0]['category_id']?>">Phones</a>
                <div class="flexblock"></div>
                <a class="category-show-all" href="/catalog/category/<?=$phones[0]['category_id']?>">SHOW ALL</a>
            </div>
            <div class="products">
                    <?
                    foreach($phones as $phone){
                        ?>
                        <div class="product">
                            <p class="product-name"><?=$phone['product_name']?></p>
                            <img class="product-img-phone" src="<?=$phone['img']?>">
                            <p class="product-price"><?=$phone['price']?>,- €</p>
                        </div>
                        <?
                    }
                    ?>
            </div>
        </div>
        <div class="category">
            <div class="category-title">
                <a class="category-name" href="/catalog/category/<?=$games[0]['category_id']?>">Games</a>
                <div class="flexblock"></div>
                <a class="category-show-all" href="/catalog/category/<?=$games[0]['category_id']?>">SHOW ALL</a>
            </div>
            <div class="products">
                    <?
                    foreach($games as $game){
                        ?>
                        <div class="product">
                            <p class="product-name"><?=$game['product_name']?></p>
                            <img class="product-img-games" src="<?=$game['img']?>">
                            <p class="product-price"><?=$game['price']?>,- €</p>
                        </div>
                        <?
                    }
                    ?>
            </div>
        </div>
        <div class="category">
            <div class="category-title">
                <a class="category-name" href="/catalog/category/<?=$photos_videos[0]['category_id']?>">Photo/Video</a>
                <div class="flexblock"></div>
                <a class="category-show-all" href="/catalog/category/<?=$photos_videos[0]['category_id']?>">SHOW ALL</a>
            </div>
            <div class="products">
                    <?
                    foreach($photos_videos as $photo_video){
                        ?>
                        <div class="product">
                            <p class="product-name"><?=$photo_video['product_name']?></p>
                            <img class="product-img-photo-video" src="<?=$photo_video['img']?>">
                            <p class="product-price"><?=$photo_video['price']?>,- €</p>
                        </div>
                        <?
                    }
                    ?>
            </div>
        </div>
    </div>
</div>