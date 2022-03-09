<ul class="<?=$position?>">
<?php foreach(arraySort($array, $key, $sort) as $subArray) : ?>
    <?php if($_SERVER["REQUEST_URI"] == $subArray['path']): ?>
        <li><a href="<?=$subArray['path']?>" class="active"><?=cutString($subArray['title'])?></a></li>
    <?php else: ?>
        <li><a href="<?=$subArray['path']?>"><?=cutString($subArray['title'])?></a></li>
    <?php endif ?>
<?php endforeach?>
</ul>