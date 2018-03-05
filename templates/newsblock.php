<!-- Шаблон для блока с последними записями в гостевой книге
 отображаются 3 последние записи -->
<div style="border: solid thin">
<ul>
    <?php
    $lastnews = array_slice($this->data['news']->getAllNews(),-3 , 3);
    foreach ($lastnews as $article)
    {
        ?><li> <?php
        echo $article->getHeadline();
        ?></li><br> <?php
    }
    ?>
</ul>
</div>
