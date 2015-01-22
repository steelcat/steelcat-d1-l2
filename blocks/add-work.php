<form action="blocks/mail.php" method="GET">
    <label for="nameProject">Название проекта <br></label>
    <input placeholder="Введите название" id="nameProject" name="nameProject" type="text"><br>
    <label for="picture">Картинка проекта <br></label>
    <p>
        <input id="picture" name="picture" placeholder="Загрузите изображение" type="text"><span id="upload-picture"></span>
    </p>
    <label for="url">URL проекта <br></label>
    <input id="url" name="url" placeholder="Добавьте ссылку" type="url"><br>
    <label for="description">Описание<br></label>
    <textarea id="description" name="description" placeholder="Пара слов о Вашем проекте"></textarea>
    <div class="buttons">
        <button type="submit">Добавить</button>
    </div>
</form>