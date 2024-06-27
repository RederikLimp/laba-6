<body style="background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

    <div style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

        <h1 style="text-align: center; font-family: Arial, sans-serif;">Создать новость</h1>

        <form action="" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 10px;">
            @csrf
            <label for="title">Заголовок</label>
            <input required type="text" name="title" id="title">

            <label for="text">Текст</label>
            <input required type="text" name="text" id="text">

            <label for="image">Изображение</label>
            <input type="file" alt="" name="image" id="image">

            <button type="submit" style="padding: 10px; border: none; border-radius: 5px; background-color: #4CAF50; color: white; font-weight: bold; cursor: pointer;">Создать</button>
        </form>

    </div>

</body>