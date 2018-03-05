<!-- Шаблон для блока с последними новостями на главной странице
 отображаются 3 последние заголовка -->
<div style="border: solid thin">

    <?php
    $lastcomments = array_slice($this->data['book']->getAllRecords(),-3 , 3);
    foreach ($lastcomments as $record)
    {
        echo '(' . $record->getAuthor() . ') - ' . $record->getMessage();
        ?><br> <?php
    }
    ?>

</div>
