<?php 

foreach(arraySorty ($array, 0, SORT_ASC) as $arrayValue) : ?>
    <figure style="display: inline-block; background-color: #000; padding: 5px;">
        <input type="checkbox" name="image[]" value="<?=$arrayValue?>">
        <p><img style="weight: 100px; height: 100px;" src="<?='/upload' . '/' . $arrayValue?>" alt=""></p>
        <figcaption style="padding-left: 5px;"><?= cutingString($arrayValue) ?></figcaption>
        <figcaption style="padding-left: 5px;"><?= date("F d Y H:i:s.", filectime($_SERVER['DOCUMENT_ROOT'].'/upload' . '/' . $arrayValue))?></figcaption>
        <figcaption style="padding-left: 5px;"><?=fileSizeName($arrayValue)?></figcaption>
    </figure>
<?php endforeach?>