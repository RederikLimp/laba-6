<div style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
   <form action="" method="post" style="display: flex; flex-direction: column;">
    @csrf
    <label for="login" style="margin-bottom: 5px;">Логин</label>
    <input type="text" name="login" id="login" style="margin-bottom: 15px; padding: 8px; border: 1px solid #ccc; border-radius: 3px;">
    
    <label for="password" style="margin-bottom: 5px;">Пароль</label>
    <input type="password" name="password" id="password" style="margin-bottom: 15px; padding: 8px; border: 1px solid #ccc; border-radius: 3px;">
    
    <button type="submit" style="padding: 10px 15px; border: none; border-radius: 3px; background-color: #007bff; color: white; cursor: pointer;">
      Зарегистрироваться
    </button>
   </form>
</div>